<?php

session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('PHP_mailer/SMTP.php');
require_once('PHP_mailer/PHPMailer.php');
require_once('PHP_mailer/Exception.php');



$addr = "172.17.5.235";
$dest = $_POST['email'];
$rem = "dawifsul@gmail.com";
$assunto = "Fale conosco ";
$msn ='Olá recebemos a sua mensagem :'.$_POST['msn'].', e responderemos em breve!!';
$senha ="62378eve";

		$mail = new PHPMailer(true);
		try{
			$mail->SMTPDebug = 0;
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = $rem;
			$mail->Password = $senha;
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->CharSet = "utf-8";
			$mail->SetFrom($rem,'Administrador');
			$mail->addAddress($dest);
			$mail->addReplyTo($rem,'Administrador');
			$mail->isHTML(true);
			$mail->Subject = $assunto;
			$mail->Body = $msn;
			$mail->send();
		}catch(Exception $e){
			echo "erro",$mail->ErrorInfo;
		}
		
		echo json_encode($_POST);
?>