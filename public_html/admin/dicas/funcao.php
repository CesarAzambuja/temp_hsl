<?php 
include ("../includes/cookie.php");
if (!$logado) 
{ 
	echo "<script>location.href='../index.php'</script>";
}

$aviso = NULL;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	//pega erro de tamanho de arquivo
	if(empty($_FILES) && empty($_POST) && isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) == 'post'){
		$aviso = 'Arquivo muito grande para envio, o limite é 5MB!';
	}else{
		
		include ("../includes/conexao.php");
		include ("../includes/gfx.php");
		include ("../includes/input_verificacao.php");
		
		$opcao = isset($_POST["opcao"]) ? $_POST["opcao"] : NULL;
	
		$titulo		  = utf8_decode(isset($_POST["titulo"]) ? $_POST["titulo"] : NULL);
		$texto		  = isset($_POST["texto"]) ? $_POST["texto"] : NULL;
		$foto		  = isset($_FILES['foto']) ? $_FILES['foto'] : NULL;
		$foto_interna = isset($_FILES['foto_interna']) ? $_FILES['foto_interna'] : NULL;
		
		$titulo = anti_injection_txt($titulo);

		$agora     = array('–', '“', '”');
		$depois    = array('-', '"', '"');
		$texto     = utf8_decode( str_replace($agora, $depois, $texto) );
		
		$titulo_tamanho	= strlen($titulo);
		$texto_tamanho	= strlen($texto);
			
	
		if($opcao == "incluir"){
			
			if ($titulo_tamanho < 3)
			{
				$aviso = "Informe um título para a dica";
			}
			elseif($texto_tamanho < 10)
			{	
				$aviso = "Informe o texto da dica";
			}
			elseif(($foto["size"]>5000000) || ($foto_interna["size"]>5000000))
			{ //5 MB setado no htaccess
				$aviso = 'Foto muito grande para envio, o limite é 5MB!';
			}
			elseif ( ($foto['error'] !== UPLOAD_ERR_OK) ) //|| ($foto_interna['error'] !== UPLOAD_ERR_OK)
			{
				//die("Upload failed with error " . $_FILES['file']['error']);
				$aviso = 'Não foi possível cadastrar a dica, tente novamente mais tarde.';
			}
			else
			{
				#$finfo = finfo_open(FILEINFO_MIME, "/usr/share/misc/magic");
				#$mime = finfo_file($finfo, $foto['tmp_name']);
				
				#$finfo = new finfo(FILEINFO_MIME, "/usr/share/misc/magic");
				#$filename = $foto['tmp_name'];
				#$mime = $finfo->file($filename);
				
				$ok = false;
				$extPermitidos		= array("jpg", "jpeg"); 
				$extensao			= end(explode(".", $foto["name"]));
				$extensao_interna	= end(explode(".", $foto_interna["name"]));
				
				switch ($foto["type"]) {
					case 'image/jpeg':
					case 'image/pjpeg':
					case 'image/jpeg':
					case 'image/pjpeg':
						$ok = true;
						break;
					default:
						//die("Unknown/not permitted file type");
						$aviso = 'Arquivo desconhecido ou não permitido. Insira a foto em formato jpg ou jpeg.';
						$ok = false;
				}
				
				//verifica extensão permitida
				if($ok && in_array($extensao, $extPermitidos)){
					
					// se arquivo foi upado
					if(file_exists($foto["tmp_name"])){ //&& !empty($foto)
						
						$tabela = mysql_query("SELECT titulo_dica FROM dicas WHERE titulo_dica = '$titulo'");
						$reg = mysql_num_rows($tabela);
						if ($reg > 0){
							echo utf8_decode("<script>alert(\"Dica com este título já existe!\");</script>");
							echo "<script>location.href='javascript:window.history.go(-1)'</script>";
						}else{
							$sqlinsere = "INSERT INTO dicas (titulo_dica, texto_dica) VALUES ('$titulo', '$texto')";
							$resultadoinsere = mysql_query($sqlinsere, $conexao);
				
							if ($resultadoinsere){
								$ultimo_id = mysql_insert_id();
								$imagem_nome = $ultimo_id .".jpg"; // sempre salvar como jpg
								$imagem_dir = "../../images/dicas/". $imagem_nome;
								
								smart_resize_image($foto["tmp_name"], 250, 155, false, 'file', false, false, $imagem_dir);
								
								$sqlatualiza = "UPDATE dicas SET foto_dica = '$imagem_nome' WHERE id_dica = '$ultimo_id'";
								$resultadoatualiza = mysql_query($sqlatualiza, $conexao);
								
								// se tiver imagem interna
								
								if(file_exists($foto_interna["tmp_name"]) && in_array($extensao_interna, $extPermitidos)){
									$imagem_interna_nome = "i".$ultimo_id .".jpg"; // sempre salvar como jpg
									$imagem_interna_dir = "../../images/internas/". $imagem_interna_nome;
									
									smart_resize_image($foto_interna["tmp_name"], 250, 155, false, 'file', false, false, $imagem_interna_dir);
									
									$sqlatualiza_interna = "UPDATE dicas SET foto_interna = '$imagem_interna_nome' WHERE id_dica = '$ultimo_id'";
									$resultadoatualiza_interna = mysql_query($sqlatualiza_interna, $conexao);
								}
								
								
								if(file_exists($foto_interna["tmp_name"])){
									if(!in_array($extensao_interna, $extPermitidos)){
										echo utf8_decode("<script>alert(\"Dica cadastrada, mas a imagem interna não pode ser utilizada. Insira a foto em formato jpg ou jpeg\"); </script>");
									}else{
										echo utf8_decode("<script>alert(\"Dica cadastrada com sucesso\"); </script>");
									}
								}else{
									echo utf8_decode("<script>alert(\"Dica cadastrada com sucesso\"); </script>");
								}
								echo "<script>location.href='index.php'</script>";
							}else{
								echo utf8_decode("<script>alert(\"Dica não pode ser cadastrada\"); </script>");
								echo "<script>location.href='index.php'</script>";
							}
						}
					}
					
				} //if ok
					
			}; // ifs de verificação das informações
			
		}elseif($opcao == "alterar"){
			
			if ($titulo_tamanho < 3)
			{
				$aviso = "Informe um título para a dica";
			}
			elseif($texto_tamanho < 10)
			{	
				$aviso = "Informe o texto da dica";
			}
			else
			{
				$id_dica = isset($_POST["id_dica"]) ? $_POST["id_dica"] : NULL;
				$id_dica = anti_injection_txt($id_dica);
				
				/*$tabela = mysql_query("SELECT titulo_dica FROM dicas WHERE titulo_dica = '$titulo' AND id_dica <> '$id_dica'"); 
				$reg = mysql_num_rows($tabela);
				if ($reg > 0){
					echo utf8_decode("<script>alert(\"Dica com este título já existe!\");</script>");
					echo "<script>location.href='javascript:window.history.go(-1)'</script>";
				}else{*/
				
					$sqlalterar = "UPDATE dicas SET titulo_dica = '$titulo', texto_dica = '$texto' WHERE id_dica = '$id_dica'";
					$resultado = mysql_query($sqlalterar, $conexao);
					
					if ($resultado > 0)
					{	
						if($foto["name"]){
							$ok = false;
							$extPermitidos = array("jpg", "jpeg"); 
							$extensao = end(explode(".", $foto["name"]));
							
							switch ($foto["type"]) {
								case 'image/jpeg':
								case 'image/pjpeg':
								case 'image/jpeg':
								case 'image/pjpeg':
									$ok = true;
									break;
								default:
									//die("Unknown/not permitted file type");
									$aviso = 'Arquivo desconhecido ou não permitido. Insira a foto em formato jpg ou jpeg.';
									$ok = false;
							}
							
							//verifica extensão permitida
							if($ok && in_array($extensao, $extPermitidos)){
								
								// se arquivo foi upado
								if(file_exists($foto["tmp_name"])){ //&& !empty($foto)
									$imagem_nome = $id_dica .".jpg"; // sempre salvar como jpg
									$imagem_dir = "../../images/dicas/". $imagem_nome;
									
									smart_resize_image($foto["tmp_name"], 250, 155, false, 'file', false, false, $imagem_dir);
								}
								
							} //if ok
	
						}
						
						if($foto_interna["name"]){
							$ok = false;
							$extPermitidos = array("jpg", "jpeg"); 
							$extensao_interna = end(explode(".", $foto_interna["name"]));
							
							switch ($foto_interna["type"]) {
								case 'image/jpeg':
								case 'image/pjpeg':
								case 'image/jpeg':
								case 'image/pjpeg':
									$ok = true;
									break;
								default:
									//die("Unknown/not permitted file type");
									$aviso = 'Arquivo desconhecido ou não permitido. Insira a foto em formato jpg ou jpeg.';
									$ok = false;
							}
							
							//verifica extensão permitida
							if($ok && in_array($extensao_interna, $extPermitidos)){
								
								// se arquivo foi upado
								if(file_exists($foto_interna["tmp_name"])){ //&& !empty($foto)
									$imagem_interna_nome = "i".$id_dica .".jpg"; // sempre salvar como jpg
									$imagem_dir = "../../images/internas/". $imagem_interna_nome;
									
									smart_resize_image($foto_interna["tmp_name"], 250, 155, false, 'file', false, false, $imagem_dir);
									
									$sqlatualiza_interna = "UPDATE dicas SET foto_interna = '$imagem_interna_nome' WHERE id_dica = '$id_dica'";
									$resultadoatualiza_interna = mysql_query($sqlatualiza_interna, $conexao);
								}
								
							} //if ok
	
						}
												
						echo utf8_decode("<script>alert(\"Dica Alterada\"); </script>");
						echo "<script>location.href='index.php'</script>";
					}
					else
					{
						echo utf8_decode("<script>alert(\"Erro na Alteração\"); </script>");
						echo "<script>location.href='index.php'</script>";
					}
					
				/*}; // if dica com título já existe*/
			};
		}elseif($opcao == "excluir"){
			$id_dica = isset($_POST["id_dica"]) ? $_POST["id_dica"] : NULL;
			$id_dica = anti_injection_txt($id_dica);
			
			$tabela = mysql_query("DELETE FROM dicas WHERE id_dica = '$id_dica'");
			$linhas = mysql_affected_rows();
				
			if ($linhas > 0)
			{	
				$url = "../../images/dicas/" . $id_dica . ".jpg";
				if(file_exists($url)){
					unlink("$url");
				};
				$url_interna = "../../images/internas/i" . $id_dica . ".jpg";
				if(file_exists($url_interna)){
					unlink("$url_interna");
				};
				
				echo utf8_decode("<script>alert(\"Dica excluída com sucesso\"); </script>");
				echo "<script>location.href='index.php'</script>";
			}
			else
			{	
				echo utf8_decode("<script>alert(\"Erro na exclusão da dica\"); </script>");
				echo "<script>location.href='index.php'</script>";
			}
		}elseif($opcao == "remover"){
			$id_dica = isset($_POST["id_dica"]) ? $_POST["id_dica"] : NULL;
			$id_dica = anti_injection_txt($id_dica);
			
			$tabela = mysql_query("UPDATE dicas SET foto_interna = '' WHERE id_dica = '$id_dica'");
			$linhas = mysql_affected_rows();
				
			if ($linhas > 0)
			{	
				$url_interna = "../../images/internas/i" . $id_dica . ".jpg";
				if(file_exists($url_interna)){
					unlink("$url_interna");
				};
				
				echo utf8_decode("<script>alert(\"Imagem interna removida com sucesso\"); </script>");
				echo "<script>location.href='index.php'</script>";
			}
			else
			{	
				echo utf8_decode("<script>alert(\"Erro na remoção da imagem\"); </script>");
				echo "<script>location.href='index.php'</script>";
			}
		};
		
		if($aviso){
			echo "<script>alert(\"$aviso!\"); </script>";
			echo "<script>location.href='index.php?c=incluir'</script>";
		}	
		
		mysql_close($conexao);
		
	}; // if tamanho de arquivo
};

?>