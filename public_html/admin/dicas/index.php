<?php
	include ("../includes/cookie.php");

/*if ($tipo_usuario != "1")
{
	echo "<script>location.href='../sistema_funcionario.php'</script>";
}*/

$c = isset($_REQUEST["c"]) ? $_REQUEST["c"] : "dicas";

$lista = array(
   "dicas"		=> "dicas",
   "incluir" 	=> "incluir",
   "alterar" 	=> "alterar"
);
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
    <link rel="shortcut icon" href="../../images/favicon.png">
    <link rel="stylesheet" href="../../css/messi.min.css" type="text/css" />
    <link rel="stylesheet" href="../../css/style.css" type="text/css" media="screen" />
    <script src="../../js/jquery.js"></script>
    <script src="../../js/messi.min.js"></script>
    <script src="../../js/jquery.meio.mask.js"></script>
    <script src="../../js/scripts.js"></script>
    
    <script src="../../js/jquery.thumbhover.js"></script>
    <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="../../css/ie.css" />
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
        
            <div class="titulo">Dicas</div>
            <a href="../logoff.php" class="sair">Sair</a>
            <div class="sair" style="margin:0 10px;">|</div>
            <a href="../painel.php" class="sair" style="margin:0;">Início</a>
            <br /><br />
            <div class="fileira">
        		
				<?php 
                if ($c == $lista[$c])
                {
                	include("$c.php");
                }
                ?>
                
                <div style="clear:both;"></div>
                
            </div>
        
			<div class="fileira_escura" style="height:175px; display:none;"></div>
        
        </div>    
    </div>

    <div id="rodape" style="height:48px;">
        <div class="linha_grande"></div>
    </div>
    
</body>
</html>