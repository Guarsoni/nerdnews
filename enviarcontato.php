
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["comentario"];

$conteudo = "Nome: $nome <br> E-mail: $email <br> Assunto: $assunto <br> Mensagem: $mensagem";
$seuemail = "guilhermecjbr@gmail.com";
$headers = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=iso-8859-1\r\n";
$assunto = "Teste - Contato do site";

$enviar = mail($seuemail, $assunto, $conteudo, $headers);

if ($enviar) {
	echo "<script type='text/java/javascript'> alert ('Contato Enviado com Sucesso!'); window.location.href='contato.php'; </script>";
}
 else
 {
echo "<script type='text/ javascript'> alert ('Ocorreu algum erro ao enviar o formulario'); </script>";

 }
?>
