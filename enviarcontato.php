<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	//Recebendo os dados do formulário.
	$nome = $_POST["nome"];
	$email=$_POST["email"];
	$assunto=$_POST["assunto"];
	$mensagem=$_POST["comentario"];
	$conteudo = "Nome: $nome <br>E-mail: $email<br> Assunto: $assunto <br> Mensagem: $mensagem";
	$seuemail="guilhermecjbr@gmail.com";
	$headers="MIME-Version: 1.0\r\n";
	$headers="Content-type: text/html; charset=iso-8859-1\r\n";
	$headers="From: $email\r\n";
	$assunto="Teste - Contato do site";
	$enviar= mail($seuemail, $assunto, $conteudo, $headers);
	if($enviar){
		echo"<script type='text/javascript'> alert('Contato Enviado com Sucesso!'); window.location.href='index.php?pagina=13';
		</script>";}
	else
		{
		echo "<script type='text/ javascript' alert('Ocorreu algum erro ao enviar o formulario');</<script>";
		}
?>
	
</body>
</html>