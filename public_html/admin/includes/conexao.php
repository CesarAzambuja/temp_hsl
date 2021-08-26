<?php
$conexao = mysql_connect("localhost","saolucas","n3Czj7lS");

if ($conexao) 
{
	mysql_select_db("saolucas",$conexao);
    echo mysql_error();
}
else
{
	echo "Não foi possível abrir o banco de dados";
	Exit;
}
?>
