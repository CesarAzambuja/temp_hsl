<?php
include ("includes/cookie.php"); 

if ($logado) 
{
	setcookie("logado", false); 
	setcookie("tipo_usuario", "0"); 		
}

echo "<script>alert(\"Saindo do sistema!\"); </script>";
echo "<script>location.href='index.php'</script>";
?>