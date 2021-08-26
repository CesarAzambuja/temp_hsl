<?php
	if (!$logado) 
	{ 
		echo "<script>location.href='../index.php'</script>";
	}
	
	include ("../includes/conexao.php");
	include ("../includes/input_verificacao.php");
	

	$pagina = isset($_REQUEST["pagina"]) ? $_REQUEST["pagina"] : NULL;
	$pagina = anti_injection_txt($pagina);
	
	$busca = "SELECT * FROM dicas ORDER BY id_dica DESC";
	
	$total_reg = "8";
	
	if (!$pagina) {
		$pc = "1";
	} else {
		$pc = $pagina;
	}
	
	$inicio = $pc - 1;
	$inicio = $inicio * $total_reg;
	
	$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
	$todos = mysql_query("$busca");
	
	$tr = mysql_num_rows($todos);
	$tp = $tr / $total_reg;
	
	
	
function reduzString ($str, $limite) {
	if(!is_string($str))
		return false; 
  	if(!is_int($limite))
		return false; 
  	if($limite <= 0)
		return ""; 
  	else if ($limite > strlen($str))
		return false;
  	else if($limite == strlen($str))
		return $str;
		
	$novaStr = substr($str,0,($limite+1));
	$tmpStr = $novaStr;
	$cont = substr_count($novaStr,' ');
	$pos = 0;
	
	for($i=0;$i<$cont;$i++) {
		$pos = strpos($tmpStr,' ');
		$tmpStr[$pos] = '*';
	}
	$novaStr = substr($novaStr,0,$pos);
	return $novaStr;
}

?>
<form action="index.php" method="post" name="form" style="float:right;" >
    <input type="hidden" name="c" value="incluir" />
    <input name="image" type="submit" class="botao" value="CADASTRAR NOVA DICA" />
</form>

<br /><br />

<p>
    <table class="tabela" style="width:100%; line-height:20px;">
        <tr>
            <th width="10">Id</th>
            <th width="20%">Título</th>
            <th width="38%">Resumo</th>
            <th width="10">Capa</th>
            <th width="20">Imagem Interna</th>
            <th width="70">&nbsp;</th>
            <th width="70">&nbsp;</th>
        </tr>
        
		<?php
			$i = true;
			while ($dados = mysql_fetch_array($limite))
			{
				$id_dica	  = $dados["id_dica"];
				$titulo_dica  = utf8_encode($dados["titulo_dica"]); 
				$resumo_dica  = utf8_encode($dados["texto_dica"]);
				$foto_dica	  = utf8_encode($dados["foto_dica"]);
				$foto_interna = utf8_encode($dados["foto_interna"]);
				
				if($i){
					echo "<tr class='zbr'>";
					$i = false;
				}else{
					echo "<tr>";
					$i = true;
				};
					echo "<td>" . $id_dica . "</td>";
					echo "<td>" . $titulo_dica . "</td>";
					echo "<td>" . reduzString($resumo_dica, 140) . "...</td>";
					echo "<td><a href='../../images/dicas/" . $foto_dica . "?t=" . date("dmYhis") . "' target='_blank' class='thumbs'>&nbsp;</a></td>";
					if($foto_interna){
						echo "<td><a href='../../images/internas/" . $foto_interna . "?t=" . date("dmYhis") . "' target='_blank' class='thumbs'>&nbsp;</a></td>";
					}else{
						echo "<td>&nbsp;</td>";
					};
					echo "<td>
						<form action='index.php' method='post' name='form'>
						<input type='hidden' name='id_dica' value='$id_dica' />
						<input type='hidden' name='c' value='alterar' />
						<input type='submit' name='image' class='botao' value='ALTERAR' />
						</form>
					</td>";
					echo "<td>
						<form action='funcao.php' method='post' name='form'>
						<input type='hidden' name='id_dica' value='$id_dica' />
						<input type='hidden' name='opcao' value='excluir' />
						<input type='submit' name='image' class='botao excluir_btn' value='EXCLUIR' />
						</form>
					</td>";
				echo "</tr>";	  
			}
        ?>
        <tr>
        	<th colspan="6">&nbsp;</th>
		</tr>
        <tr>
        	<th colspan="6" id="paginacao">
			<?php
                
				// Paginação
				
				$anterior	= $pc -1;
                $proximo	= $pc +1;
				$escopo		= 2; //mostrar números das páginas anteriores e próximas apartir do atual
				
				if ($pc>1){
					echo "<a href='index.php?pagina=$anterior' class='botao fixo anterior'>Anterior</a>";
					echo "<div class='numeros'>";
					//if($pc>=$escopo){ $escopo=$escopo+($escopo/$pc); }
					for($x=$escopo; $x>0; $x--){
						$link = $pc-$x;
						if($link>0){ echo "<a href='?pagina=$link'><b>$link</b></a>"; }
					}
				}
				
				if ($pc==1){ echo "<div class='numeros'>"; }
				if ($tp>1){ echo "<a href='#' class='no_link'>$pc</a>"; }
				if ($pc==$tp){ echo "</div>"; }
				
				if ($pc<$tp){
					if($pc<=$escopo){ $escopo=$escopo+($escopo/$pc); }
					for($x=1; $x<=$escopo; $x++){
						$link = $pc+$x;
						if($link<($tp+1)){ echo "<a href='?pagina=$link'><b>$link</b></a>"; }
					}
					echo "</div>";
					echo "<a href='index.php?pagina=$proximo' class='botao fixo proximo'>Próximo</a>";
				}
				
				
				
                mysql_close($conexao);
            ?>
            </th>
        </tr>
    </table>
</p>

<script>
	$('.excluir_btn').click(function(e){
		e.preventDefault();

		var resp=confirm("Têm certeza que deseja excluir esta dica?");
		if(resp==true) {
			$(this).parent().submit();
		}else{
			return false;
		}
	})
	$(function(){
		$("a.thumbs").thumbPopup();
		$("a.thumbs").click(function(e){ e.preventDefault(); });
	});
</script>