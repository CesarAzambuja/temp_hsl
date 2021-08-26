<?php
	if (!$logado) 
	{ 
		echo "<script>location.href='../index.php'</script>";
	}
	
	include ("../includes/conexao.php");
	include ("../includes/input_verificacao.php");
	

	$pagina = isset($_REQUEST["pagina"]) ? $_REQUEST["pagina"] : NULL;
	$pagina = anti_injection_txt($pagina);
	
	$busca = "SELECT * FROM usuarios ORDER BY login";
	
	$total_reg = "10";
	
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
?>
<form action="index.php" method="post" name="form" style="float:right;" >
    <input type="hidden" name="c" value="incluir" />
    <input name="image" type="submit" class="botao" value="CADASTRAR NOVO USUÁRIO" />
</form>

<br /><br />

<p>
<?php
	/*if($pagina>$tp){
		echo "Esta página não existe.";
	}else{*/
?>
    <table class="tabela" style="width:100%;">
        <tr>
            <th width="197">Usuário</th>
            <th width="45%">Perfil</th>
            <th width="80">Ativo</th>
            <th width="80">&nbsp;</th>
            <th width="80">&nbsp;</th>
        </tr>
        
		<?php
			$i = true;
			while ($dados = mysql_fetch_array($limite))
			{
				$id_usuario   = $dados["id_usuario"];
				$login		  = utf8_encode($dados["login"]); 
				$tipo_usuario = $dados["tipo_usuario"];
				$ativo		  = $dados["ativo"]==1 ? 'Sim' : 'Não';
				
				if($tipo_usuario==1){
					$tipo_usuario = 'Administrador';
				}else{
					$tipo_usuario = 'Publicador';
				}
				
				if($i){
					echo "<tr class='zbr'>";
					$i = false;
				}else{
					echo "<tr>";
					$i = true;
				};
					echo "<td>" . $login . "</td>";
					echo "<td>" . $tipo_usuario . "</td>";
					echo "<td>" . $ativo . "</td>";
					echo "<td>
						<form action='index.php' method='post' name='form'>
						<input type='hidden' name='id_usuario' value='$id_usuario' />
						<input type='hidden' name='c' value='alterar' />
						<input type='submit' name='image' class='botao' value='ALTERAR' />
						</form>
					</td>";
					echo "<td>
						<form action='funcao.php' method='post' name='form'>
						<input type='hidden' name='id_usuario' value='$id_usuario' />
						<input type='hidden' name='opcao' value='excluir' />
						<input type='submit' name='image' class='botao excluir_btn' value='EXCLUIR' />
						</form>
					</td>";
				echo "</tr>";	  
			}
        ?>
        <tr>
        	<th colspan="5">&nbsp;</th>
		</tr>
        <tr>
        	<th colspan="5" id="paginacao">
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
<?php //} ?>
</p>

<script>
	$('.excluir_btn').click(function(e){
		e.preventDefault();

		var resp=confirm("Têm certeza que deseja excluir este usuário?");
		if(resp==true) {
			$(this).parent().submit();
		}else{
			return false;
		}
	})
</script>