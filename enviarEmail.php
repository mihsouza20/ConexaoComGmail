<?php 
include_once('phpmailer/src/PHPMailer.php');
include_once('phpmailer/src/SMTP.php');
include_once('phpmailer/src/Exception.php');

 
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->IsSMTP(); // enable SMTP

    //$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "mihsouza1995@gmail.com";
    $mail->Password = "65848033";
    $mail->SetFrom("thamiressouza29@outlook.com");
    $mail->Subject = "Aula PWIII";
    $mail->Body = "Recebemos uma mensagem no site <br/>
			<strong>Nome: Corinthians 109 anos de gloria </strong> <br/>
			<strong>e-mail: mihsouza1995@gmail.com</strong> <br/>
			<strong>mensagem: Vai Corinthians!</strong>";

    $mail->AddAddress("mihsouza1995@gmail.com");
    $mail->AddAttachment('queen.png');


     if(!$mail->Send()) {
        echo "descricao do erro: " . $mail->ErrorInfo;
     } else {
        echo "Email Enviado";
     }
?>