<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once('PHP_mailer/SMTP.php');
require_once('PHP_mailer/PHPMailer.php');
require_once('PHP_mailer/Exception.php');
require_once('../../conect.php');
require_once('../../function.php');


$addr = "172.17.11.47";
$dest = $_POST['email'];
$rem = "dawifsul@gmail.com";
$assunto = "Cadastro novo usuario";
$msn ="link -> ".$addr.":8081/Projeto_DAW/php/finalizarCadastro.php";
$senha ="62378eve";

$res =  cadastro_etapa_1($dest,$dest,$pdo);
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
}else{
	echo "Erro!!!!!!!!!!!!"
}




?>