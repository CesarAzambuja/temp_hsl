<?php
	if (!$logado) 
	{ 
		echo "<script>location.href='../index.php'</script>";
	}
	
	include ("../includes/conexao.php");
	include ("../includes/input_verificacao.php");
	
	$id_dica = isset($_POST["id_dica"]) ? $_POST["id_dica"] : NULL;
	$id_dica = anti_injection_txt($id_dica); 
	
	$sql = "SELECT * FROM dicas WHERE id_dica = '$id_dica'";
	$tabela = mysql_query($sql);
	$reg = mysql_num_rows($tabela);
		
	if ($reg <= 0)
	{
		echo "<script>alert(\"Erro na consulta!\"); </script>";
		echo "<script>location.href='index.php'</script>";
	}
	
	mysql_close($conexao);
?>
<br />
<p class="subtitulo">Alterar Dica</p>

<form id="form-remover" method="post" action="funcao.php" style="position:absolute; top:772px; right:80px;">
	<input type="hidden" name="id_dica" value="<?php echo mysql_result($tabela,0,"id_dica");?>" />
    <input type="hidden" name="opcao" value="remover" />
    <input name="Submit" type="submit" class="botao" value="Remover Imagem" />
</form>

<form id="form-contato" method="post" action="funcao.php" onSubmit="return valida_dados(this)" enctype="multipart/form-data">
	<input type="hidden" name="id_dica" value="<?php echo mysql_result($tabela,0,"id_dica");?>" />
	<input type="hidden" name="opcao" value="alterar" />
    	
        <br />
        
        <table width="500" border="0" cellpadding="0">
        	<tr>
            	<td colspan="2"></td>
            </tr>
            <tr>
                <td><label for="id">ID:</label></td>
                <td><input type="text" name="id" class="campo" id="id" style="width:340px;" maxlength="300" value="<?php echo mysql_result($tabela,0,"id_dica");?>" disabled="disabled" /></td>
            </tr>
            <tr>
                <td><label for="titulo">TÍTULO:*</label></td>
                <td><input type="text" name="titulo" class="campo" id="titulo" style="width:340px;" maxlength="300" value="<?php echo utf8_encode(mysql_result($tabela,0,"titulo_dica"));?>" /></td>
            </tr>
            <tr>
                <td><label for="texto">TEXTO:*</label></td>
                <td><textarea name="texto" id="texto" class="campo" rows="5" wrap="virtual" cols="40" style="width:340px;"><?php echo utf8_encode(mysql_result($tabela,0,"texto_dica"));?></textarea></td>
            </tr>
            <tr>
                <td><label for="perfil" style="width:120px;">NOVA CAPA:</label></td>
                <td>
                    <div class="inputFile">
                        <span>Selecione uma foto para efetuar a troca</span>
                        <input type="file" name="foto" id="foto" accept="image/jpeg,image/pjpeg,image/jpeg,image/pjpeg" />
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="perfil" style="width:120px;">IMAGEM INTERNA:</label></td>
                <td>
                    <div class="inputFile">
                        <span>Selecione uma foto para efetuar a troca</span>
                        <input type="file" name="foto_interna" id="foto_interna" accept="image/jpeg,image/pjpeg,image/jpeg,image/pjpeg" />
                    </div>
                </td>
            </tr>
            <tr>
            	<td colspan="2"><input name="Submit" type="submit" class="botao" value="Alterar" /></td>
            </tr>
        </table>
            
</form>
<p align="center">
	* Campos obrigatórios <br /><br />
	<a href="./">Voltar</a>
</p>
<script type="text/javascript">
	
	function valida_dados(nomeform){
		
		$('form input').blur();
		
		if (nomeform.titulo.value.length < 3){
			new Messi('Informe um título para a dica.', {
				title: 'Atenção',
				modal: true,
				buttons: [{id: 0, label: 'OK'}],
				callback: function() { nomeform.titulo.focus(); }
			});
			return false;
		};
		
		if (nomeform.texto.value.length < 10){
			new Messi('Informe o texto da dica.', {
				title: 'Atenção',
				modal: true,
				buttons: [{id: 0, label: 'OK'}],
				callback: function() { nomeform.texto.focus(); }
			});
			return false;
		};
						
		return true;
	};
					
</script>