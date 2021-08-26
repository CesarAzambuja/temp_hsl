<?php
function anti_injection_txt($txt)
{
	// remove palavras que contenham sintaxe sql
	$txt = preg_replace(sql_regcase("/(from|GRANT|PRIVILEGES|OPTION|select|table|database|1=1|or 1|destroy|destroy|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$txt);
	
	// remove caracteres
	$txt = get_magic_quotes_gpc() == 0 ? addslashes($txt) : $txt;
	$txt = preg_replace("@(--|\#|\*|;|=)@s", "", $txt);	

	//tira tags html e php
	$txt = strip_tags($txt);
	
	//limpa espaços vazio no inicio e final
	$txt = trim($txt);
		
	return $txt;
}
?>
