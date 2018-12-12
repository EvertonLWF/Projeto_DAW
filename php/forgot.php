<?php
	require_once('conect.php');
	require_once('function.php');
	$email = $_POST['email'];
	$key = rand();
	$var = forgotPass($pdo,$email,$key);
	if(empty($var)){
		echo json_encode($var);
	}else{
		$var['key_user']=$key;
		echo json_encode($var);
	}
	
	
?>