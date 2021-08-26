<?php
	if (!$logado) 
	{ 
		echo "<script>location.href='../index.php'</script>";
	}	
?>
<br />
<p class="subtitulo">Novo Usuário</p>

<form id="form-contato" method="post" action="funcao.php" onSubmit="return valida_dados(this)">
	<input type="hidden" name="opcao" value="incluir" />
    	
        <br />
        
        <table width="500" border="0" cellpadding="0">
        	<tr>
            	<td colspan="2"></td>
            </tr>
            <tr>
                <td><label for="login">USUÁRIO:</label></td>
                <td><input type="text" name="login" class="campo" id="login" style="width:340px;" maxlength="20" /></td>
            </tr>
            <tr>
                <td><label for="senha">SENHA:</label></td>
                <td><input type="password" name="senha" class="campo" id="senha" style="width:340px;" maxlength="8" /></td>
            </tr>
            <tr>
                <td><label for="perfil">PERFIL:</label></td>
                <td>
                    <select name="perfil" id="perfil" class="campo" style="width:360px;">
                        <option value="">Escolha um perfil</option>
                        <option value="1">Administrador</option>
                        <option value="2">Publicador</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="ativo">ATIVO:</label></td>
                <td>
                    <select name="ativo" id="ativo" class="campo">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td colspan="2"><input name="Submit" type="submit" class="botao" value="Cadastrar" /></td>
            </tr>
        </table>
    
</form>
<p align="center"> <a href="./">Voltar</a>
<script type="text/javascript">
	
	function valida_dados(nomeform){
		
		$('form input').blur();
		
		if (nomeform.login.value.length < 3 || nomeform.login.value.length > 20){
			new Messi('O usuário deve ter entre 3 e 20 caracteres.', {
				title: 'Atenção',
				modal: true,
				buttons: [{id: 0, label: 'OK'}],
				callback: function() { nomeform.login.focus(); }
			});
			return false;
		};
		
		if (nomeform.senha.value.length < 6 || nomeform.senha.value.length > 8){
			new Messi('A senha deve ter entre 6 e 8 caracteres.', {
				title: 'Atenção',
				modal: true,
				buttons: [{id: 0, label: 'OK'}],
				callback: function() { nomeform.senha.focus(); }
			});
			return false;
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