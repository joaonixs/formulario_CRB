<?php
require_once("../phpmailer/class.phpmailer.php");
require_once("../phpmailer/class.smtp.php");

$voltar = "../";

 $mail = new PHPMailer();
 $mail->IsSMTP(); // envia por SMTP 
 $mail->CharSet = 'UTF-8';
 $mail->Host = "mail.newsoda.com.br"; # Endereço do servidor SMTP
 $mail->Port = 587; // Porta TCP para a conexão
 $mail->SMTPAutoTLS = false; // Utiliza TLS Automaticamente se disponível
 $mail->SMTPAuth = true; # Usar autenticação SMTP - Sim
 $mail->Username = 'joao@newsoda.com.br'; # Usuário de e-mail
 $mail->Password = 'Joaonixs123!'; // # Senha do usuário de e-mail
 $mail->From = "joao@newsoda.com.br"; // From
 $mail->FromName = "João Victor" ; // Nome de quem envia o email
 $mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
 $mail->WordWrap = 50; // Definir quebra de linha
 $mail->IsHTML = true ; // Enviar como HTML
 $mail->Subject = $assunto ; // Assunto
 $mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

if(!$mail->Send()) // Envia o email
 { 
 echo "Erro no envio da mensagem";
 }else {
 	echo utf8_decode("<script>alert('Mensagem enviada com sucesso.');location.href='".$voltar."'</script>");
 }
?>