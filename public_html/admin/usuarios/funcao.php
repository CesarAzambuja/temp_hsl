<?php 
include ("../includes/cookie.php");
if (!$logado) 
{ 
	echo "<script>location.href='../index.php'</script>";
}

$aviso = NULL;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	include ("../includes/conexao.php");
	include ("../includes/input_verificacao.php");
	
	$opcao = isset($_POST["opcao"]) ? $_POST["opcao"] : NULL;

	$login			= utf8_decode(isset($_POST["login"]) ? $_POST["login"] : NULL);
	$senha			= isset($_POST["senha"]) ? $_POST["senha"] : NULL;
	$tipo_usuario	= isset($_POST["perfil"]) ? $_POST["perfil"] : NULL;
	$ativo			= isset($_POST["ativo"]) ? $_POST["ativo"] : NULL;
	
	$login			= anti_injection_txt($login);
	$senha			= anti_injection_txt($senha); 
	$tipo_usuario	= anti_injection_txt($tipo_usuario); 
	$ativo			= anti_injection_txt($ativo);
	
	$login_tamanho	= strlen($login);
	$senha_tamanho	= strlen($senha);
	$tipo_tamanho	= strlen($tipo_usuario);
	
	$senha = md5($senha . "91215");
	

	if($opcao == "incluir"){
		
		if (($login_tamanho < 3) || ($login_tamanho > 20))
		{
			$aviso = "O usuario deve ter entre 3 e 20 caracteres";
		}
		elseif(($senha_tamanho < 6) || ($senha_tamanho > 8))
		{	
			$aviso = "A senha deve ter entre 6 e 8 caracteres";
		}
		elseif($tipo_tamanho<1)
		{
			$aviso = "Escolha um perfil";
		}
		else
		{
			$tabela = mysql_query("SELECT login FROM usuarios WHERE login = '$login'");
			$reg = mysql_num_rows($tabela);
			if ($reg > 0){
				echo utf8_decode("<script>alert(\"Usuário já cadastrado!\");</script>");
				echo "<script>location.href='index.php?c=incluir'</script>";
			}else{
				$sqlinsere = "INSERT INTO usuarios (login, senha, tipo_usuario, ativo) VALUES ('$login', '$senha', '$tipo_usuario', '$ativo')";
				$resultadoinsere = mysql_query($sqlinsere, $conexao);
	
				if ($resultadoinsere)
				{
					echo utf8_decode("<script>alert(\"Usuário cadastrado com sucesso\"); </script>");
					echo "<script>location.href='index.php'</script>";
				}
				else
				{
					echo utf8_decode("<script>alert(\"Usuário não pode ser cadastrado\"); </script>");
					echo "<script>location.href='index.php'</script>";
				}
			}
		};
		
	}elseif($opcao == "alterar"){
		
		if($senha_tamanho > 0 && ($senha_tamanho < 6 || $senha_tamanho > 8))
		{
			$aviso = "A senha deve ter entre 6 e 8 caracteres";
		}
		elseif($tipo_tamanho<1)
		{
			$aviso = "Escolha um perfil";
		}
		else
		{
			$id_usuario = isset($_POST["id_usuario"]) ? $_POST["id_usuario"] : NULL;
			$id_usuario = anti_injection_txt($id_usuario);
				
			if($senha_tamanho > 0)
			{
				$sqlalterar = "UPDATE usuarios SET senha = '$senha', tipo_usuario = '$tipo_usuario', ativo = '$ativo' WHERE id_usuario = '$id_usuario'";
			}
			else
			{
				$sqlalterar = "UPDATE usuarios SET tipo_usuario = '$tipo_usuario', ativo = '$ativo' WHERE id_usuario = '$id_usuario'";
			}
			
			$resultado = mysql_query($sqlalterar, $conexao);
			
			if ($resultado > 0)
			{
				echo utf8_decode("<script>alert(\"Usuário Alterado\"); </script>");
				echo "<script>location.href='index.php'</script>";
			}
			else
			{
				echo utf8_decode("<script>alert(\"Erro na Alteração\"); </script>");
				echo "<script>location.href='index.php'</script>";
			}
		};
	}elseif($opcao == "excluir"){
		$id_usuario = isset($_POST["id_usuario"]) ? $_POST["id_usuario"] : NULL;
		$id_usuario = anti_injection_txt($id_usuario);
		
		$tabela = mysql_query("DELETE FROM usuarios WHERE id_usuario = '$id_usuario'");
		$linhas = mysql_affected_rows();
			
		if ($linhas > 0)
		{	
			echo utf8_decode("<script>alert(\"Usuário excluído com sucesso\"); </script>");
			echo "<script>location.href='index.php'</script>";
		}
		else
		{	
			echo utf8_decode("<script>alert(\"Erro na exclusão do usuário\"); </script>");
			echo "<script>location.href='index.php'</script>";
		}
	};
	
	if($aviso){
		echo "<script>alert(\"$aviso!\"); </script>";
		echo "<script>location.href='index.php?c=incluir'</script>";
	}	
	
	mysql_close($conexao);
};

?>