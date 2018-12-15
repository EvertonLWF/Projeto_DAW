<?php
session_start();
if(isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){
	require_once('conect.php');
	require_once('function.php');
	$clientId = $_POST['on'];

	$var = unblockD($pdo,$clientId);
    
	//var_dump($_POST);

	echo json_encode($var);

}else{
	session_destroy();
	die();
}


?>