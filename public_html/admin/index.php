<?php
	
	include_once("includes/cookie.php");
	
	if ($logado) 
	{ 
		echo "<script>location.href='painel.php'</script>";
	}
	
	$aviso = NULL;
	
	// recupera dados
	$cp_login	= isset($_POST['login']) ? $_POST['login'] : NULL;
	$cp_senha	= isset($_POST['senha']) ? $_POST['senha'] : NULL;
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		include("includes/conexao.php");
		include("../includes/verificar_email.php");
		include("../includes/input_verificacao.php");
		
		// trata dados
		$cp_login 	= anti_injection_txt($cp_login);
		$cp_senha	= anti_injection_txt($cp_senha);
		
		// tamanho dos campos obrigatórios
		$tm_login 	= strlen($cp_login);
		$tm_senha 	= strlen($cp_senha);
		
		// encripta senha
		$cp_senha	= md5($cp_senha . "91215");
		
		if (($tm_login < 3) || ($tm_login > 20))
		{
			$aviso = "Erro no usuário!";
		}
		elseif (($tm_senha < 6) || ($tm_senha > 8))
		{
			$aviso = "Erro na senha!";
		}
		else
		{
			$resultado = mysql_query("SELECT * FROM usuarios WHERE login = '$cp_login' AND senha = '$cp_senha' AND ativo = '1'");
				
			if (mysql_num_rows($resultado) > 0) 
			{
				$tipo_usuario = mysql_result($resultado,0,"tipo_usuario");
				$id_login = mysql_result($resultado,0,"id_usuario");
						
				setcookie("logado", true); 
				setcookie("tipo_usuario", $tipo_usuario); 
					
				if ($tipo_usuario == 1 || $tipo_usuario == 2)
				{
					header("Location: painel.php");
				}
				else
				{
					header("Location: index.php"); 
				}
			}
			else
			{
				$aviso = "Login ou senha inválido!";
			}
		}
		mysql_close($conexao);
	}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Hospital São Lucas</title>
    <meta name="description" content=" " />
    <meta name="keywords" content="sao lucas"/>
    <meta name="robots" content="noindex" />
    <meta property="og:title" content="Hospital São Lucas" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.saolucas.com.br/" />
    <meta property="og:image" content="http://www.saolucas.com.br/images/og-image.png" />
    <meta property="og:description" content=" " />
    <link rel="shortcut icon" href="../images/favicon.png">
    <link rel="stylesheet" href="../css/messi.min.css" type="text/css" />
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
    <script src="../js/jquery.js"></script>
    <script src="../js/messi.min.js"></script>
    <script src="../js/jquery.meio.mask.js"></script>
    <script src="../js/scripts.js"></script>
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="../css/ie.css" />
    <![endif]-->
</head>

<body>
	<div id="topo"></div>
    <div id="site">

        <div id="cabecalho" style="height:320px;">
            <div id="logo"></div>
            <!--<div id="anos"></div>-->
        </div>

        <div id="conteudo">
            <div style="width:500px; margin:auto;">
                <div class="titulo">Login</div>
                <br /><br />
                <div class="fileira">
                    
                    <form id="form-contato" method="post" onSubmit="return valida_login(this)">
                    
                    <table width="500" border="0" cellpadding="0">
                      <tr>
                      	<td><label for="nome">USUÁRIO:</label></td>
                        <td><input type="text" name="login" class="campo" id="login" style="width:340px; border:1px solid #E0E0E0;" value="<?php if($cp_login){ echo $cp_login; } ?>" maxlength="20" /></td>
                      </tr>
                      <tr>
                      	<td><label for="email">SENHA:</label></td>
                        <td><input type="password" name="senha" class="campo" id="senha" style="width:340px; border:1px solid #E0E0E0;" value="" maxlength="8"/></td>
                      </tr>
                      <tr>
                      	<td></td>
                        <td><input type="submit" value="Enviar" class="botao" style="width:360px;" /></td>
                      </tr>
                    </table>
                    
                    </form>
            
                    <div style="clear:both;"></div>
                    
                </div>
            </div>
        
			<div class="fileira_escura" style="height:175px; display:none;"></div>
        
        </div>    
    </div>

    <div id="rodape" style="height:48px;">
        <div class="linha_grande"></div>
    </div>
    
	<script type="text/javascript">
		
        function valida_login(nomeform){
            
            $('form input').blur();
            
            if (nomeform.login.value.length < 3){
                new Messi('Informe um usuário corretamente.', {
                    title: 'Atenção',
                    modal: true,
                    buttons: [{id: 0, label: 'OK'}],
                    callback: function() { nomeform.login.focus(); }
                });
                return false;
            };
            
            if (nomeform.senha.value.length < 6){
                new Messi('Informe uma senha válida.', {
                    title: 'Atenção',
                    modal: true,
                    buttons: [{id: 0, label: 'OK'}],
                    callback: function() { nomeform.senha.focus(); }
                });
                return false;
            };
                            
            return true;
        };
		
		var aviso_ms = '<?php echo $aviso; ?>';
		if (aviso_ms!=''){
			new Messi(aviso_ms, {
				title: 'Atenção',
				modal: true,
				buttons: [{id: 0, label: 'OK'}]
				<?php if(isset($focus)) echo ', callback: function() { document.getElementById("form-contato").'.$focus.'.focus(); }'; ?>
			});
		};
                        
    </script>

</body>
</html>