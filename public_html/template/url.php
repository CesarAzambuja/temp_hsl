<?php

// teste servidor
/*
if(count($url_array)>6){
	header( 'Location: '.$host.'404' ) ;
}elseif(count($url_array)>5){
	$url = '../../../../';
}elseif(count($url_array)>4){
	$url = '../../../../';
}elseif(count($url_array)>3){
	$url = '../../../';*/


//Limita parametro até 3, se for maior redireciona para erro 404
if(count($url_array)>4){
	header( 'Location: '.$host.'404' ) ;
}elseif(count($url_array)>3){
	$url = '../../';
}elseif(count($url_array)>2){
	$url = '../';
}else{
	$url = '';
}

//echo count($url_array);

?>