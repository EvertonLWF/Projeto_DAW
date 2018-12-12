<?php

session_start();


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('PHP_mailer/SMTP.php');
require_once('PHP_mailer/PHPMailer.php');
require_once('PHP_mailer/Exception.php');
require_once('../../conect.php');
require_once('../../function.php');


$addr = "172.17.5.235";
$dest = $_POST['email'];
$rem = "dawifsul@gmail.com";
$assunto = "Cadastro novo usuario";
$msn ="Acesse o link -> ".$addr.":8080/Projeto_DAW/index.php seu usuario e senha são ".$dest."";
$senha ="62378eve";
$tipo = $_POST['tipo'];

if (isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])) {

	$res =  cadastro_etapa_1($tipo,$dest,$pdo);

	if(isset($res) && !empty($res)){
		$mail = new PHPMailer(true);
		try{
			$mail->SMTPDebug = 3;
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
		
		header("location:index.php");
	}else{
		echo "Erro!!!!!!!!!!!!";

	}
}else{
	session_destroy();
	header("location:../../../index.php");
}

?>