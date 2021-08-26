<?php
	if (!$logado) 
	{ 
		echo "<script>location.href='../index.php'</script>";
	}	
?>
<br />
<p class="subtitulo">Nova Dica</p>

<form id="form-contato" method="post" action="funcao.php" onSubmit="return valida_dados(this)" enctype="multipart/form-data">
	<input type="hidden" name="opcao" value="incluir" />
    	
        <br />
        
        <table width="500" border="0" cellpadding="0">
        	<tr>
            	<td colspan="2"></td>
            </tr>
            <tr>
                <td><label for="titulo">TÍTULO:*</label></td>
                <td><input type="text" name="titulo" class="campo" id="titulo" style="width:340px;" maxlength="300" /></td>
            </tr>
            <tr>
                <td><label for="texto">TEXTO:*</label></td>
                <td><textarea name="texto" id="texto" class="campo" rows="5" wrap="virtual" cols="40" style="width:340px;"></textarea></td>
            </tr>
            <tr>
                <td><label for="perfil">CAPA:*</label></td>
                <td>
                    <div class="inputFile">
                        <span>Selecione uma foto no formato .JPG ou .JPEG</span>
                        <input type="file" name="foto" id="foto" accept="image/jpeg,image/pjpeg,image/jpeg,image/pjpeg" />
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="perfil" style="width:120px;">IMAGEM INTERNA:</label></td>
                <td>
                    <div class="inputFile">
                        <span>Selecione uma foto no formato .JPG ou .JPEG</span>
                        <input type="file" name="foto_interna" id="foto_interna" accept="image/jpeg,image/pjpeg,image/jpeg,image/pjpeg" />
                    </div>
                </td>
            </tr>
            <tr>
            	<td colspan="2"><input name="Submit" type="submit" class="botao" value="Cadastrar" /></td>
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
		
		if (nomeform.foto.value.length < 1){
			new Messi('Selecione uma foto para a capa da dica.', {
				title: 'Atenção',
				modal: true,
				buttons: [{id: 0, label: 'OK'}]
			});
			return false;
		};
						
		return true;
	};
					
</script>	