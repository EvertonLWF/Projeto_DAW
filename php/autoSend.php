<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once('index_user/admin/PHP_mailer/SMTP.php');
require_once('index_user/admin/PHP_mailer/PHPMailer.php');
require_once('index_user/admin/PHP_mailer/Exception.php');
require_once('conect.php');
require_once('function.php');

if (isset($_POST) && !empty($_POST)) {

	$id_user = $_POST['id'];
	$newPass = $_POST['key'];
	$hash = $_POST['hash'];
	$dest = $_POST['email'];
	$addr = "192.168.1.4";
	$end = ":8080/Projeto_DAW/index.php";
	
	$rem = "dawifsul@gmail.com";
	$assunto = "Recuperar  a senha";
	$msn ="Acesse o link -> ".$addr.$end." <br> Seu usuario = '".$dest."' e sua nova senha = '".$newPass."'";
	$senha ="62378eve";
	


	

	if(isset($hash) && !empty($hash) && $hash != md5('Active')){
		
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
			$mail->isHTML(false);
			$mail->Subject = $assunto;
			$mail->Body = $msn;
			$mail->send();
		}catch(Exception $e){
			echo "erro",$mail->ErrorInfo;
		}
		echo json_encode($id_user);

	}else{
		die();
	}
}else{
	die();
}

?>