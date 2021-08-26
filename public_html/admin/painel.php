<?php 
	include_once("includes/cookie.php");
	
	if (!$logado) 
	{ 
		echo "<script>location.href='index.php'</script>";
	}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Hospital São Lucas</title>
    <meta name="description" content=" " />
    <meta name="keywords" content="sao lucas"/>
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

        <div id="conteudo" class="admin">
                <div class="titulo">Administração do Site</div>
                <a href="logoff.php" class="sair">Sair</a>
                <br /><br />
                <div class="fileira">
                    
                    <br />
                    
					<table>
                        <tr>
                            <td class="opcoes">
                            	<a href="dicas/">
                                    <img src="images/icon_dica.png"><br /><br />
                                    <span class="botao">Dicas</span><br />
                                    <p>Publicar, alterar e apagar as dicas do site</p>
                                </a>
                            </td>
                            <td>&nbsp;</td>
                            <?php if ($tipo_usuario == "1"){ ?>
                            <td class="opcoes">
                            	<a href="usuarios/">
                                    <img src="images/icon_usuario.png"><br /><br />
                                    <span class="botao">Usuários</span><br />
                                    <p>Gerenciar usuários com acesso a administração</p>
                                </a>
                            </td>
                            <?php } ?>
                        </tr>
                    </table>
            
                    <div style="clear:both;"></div>
                    
                </div>
        
			<div class="fileira_escura" style="height:175px; display:none;"></div>
        
        </div>    
    </div>

    <div id="rodape" style="height:48px;">
        <div class="linha_grande"></div>
    </div>