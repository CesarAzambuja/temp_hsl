<?php
$conexao = mysql_connect("localhost","saolucas","n3Czj7lS");

if ($conexao) 
{
	mysql_select_db("saolucas",$conexao);
    echo mysql_error();
}
else
{
	echo "N�o foi poss�vel abrir o banco de dados";
	Exit;
}
?>
