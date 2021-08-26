<?php
	if (!$logado) 
	{ 
		echo "<script>location.href='../index.php'</script>";
	}
	
	include ("../includes/conexao.php");
	include ("../includes/input_verificacao.php");
	
	$id_usuario = isset($_POST["id_usuario"]) ? $_POST["id_usuario"] : NULL;
	$id_usuario = anti_injection_txt($id_usuario); 
	
	$sql = "SELECT * FROM usuarios WHERE id_usuario = '$id_usuario'";
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
<p class="subtitulo">Alterar Usuário</p>

<form id="form-contato" method="post" action="funcao.php" onSubmit="return valida_dados(this)">
	<input type="hidden" name="id_usuario" value="<?php echo mysql_result($tabela,0,"id_usuario");?>" />
	<input type="hidden" name="opcao" value="alterar" />
    	
        <br />
        
        <table width="500" border="0" cellpadding="0">
        	<tr>
            	<td colspan="2"></td>
            </tr>
            <tr>
                <td><label for="login">USUÁRIO:</label></td>
                <td><input type="text" name="login" class="campo" id="login" style="width:340px;" value="<?php echo utf8_encode(mysql_result($tabela,0,"login"));?>" maxlength="20" disabled="disabled" /></td>
            </tr>
            <tr>
                <td><label for="senha" style="width:100px;">NOVA SENHA:</label></td>
                <td><input type="password" name="senha" class="campo" id="senha" style="width:340px;" maxlength="8" /></td>
            </tr>
            <tr>
                <td><label for="perfil">PERFIL:</label></td>
                <td>
                    <select name="perfil" id="perfil" class="campo" style="width:360px;">
                        <option value="">Escolha um perfil</option>
                        <option value="1" <?php if(mysql_result($tabela,0,"tipo_usuario")=='1'){ echo 'selected'; } ?>>Administrador</option>
                        <option value="2" <?php if(mysql_result($tabela,0,"tipo_usuario")=='2'){ echo 'selected'; } ?>>Publicador</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="ativo">ATIVO:</label></td>
                <td>
                    <select name="ativo" id="ativo" class="campo">
                        <option value="1" <?php if(mysql_result($tabela,0,"ativo")=='1'){ echo 'selected'; } ?>>Sim</option>
                        <option value="0" <?php if(mysql_result($tabela,0,"ativo")=='0'){ echo 'selected'; } ?>>Não</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td colspan="2"><input name="Submit" type="submit" class="botao" value="Alterar" /></td>
            </tr>
        </table>
    
</form>
<p align="center"> <a href="./">Voltar</a>
<script type="text/javascript">
	
	function valida_dados(nomeform){
		
		$('form input').blur();
		
		if (nomeform.senha.value.length > 1){
			if (nomeform.senha.value.length < 6 || nomeform.senha.value.length > 8){
				new Messi('A nova senha deve ter entre 6 e 8 caracteres.', {
					title: 'Atenção',
					modal: true,
					buttons: [{id: 0, label: 'OK'}],
					callback: function() { nomeform.senha.focus(); }
				});
				return false;
			};
		};
		
		if (nomeform.perfil.value.length < 1){
			new Messi('Escolha um perfil.', {
				title: 'Atenção',
				modal: true,
				buttons: [{id: 0, label: 'OK'}],
				callback: function() { nomeform.perfil.focus(); }
			});
			return false;
		};
						
		return true;
	};
					
</script>	