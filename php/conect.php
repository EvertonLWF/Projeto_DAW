<?php
	
	ini_set('display_errors',1);
	ini_set('display_startup_erros',1);
	error_reporting(E_ALL);
	$dns = "pgsql:dbname=Projeto_3_Sem;host=localhost;port=5431";
	$user = 'postgres';
	$pass = 'root';
	$pdo = "";
	try{
		 $pdo = new PDO($dns, $user, $pass);
	}catch(PDOException $e){
		echo "Falhou = ".$e->getMessage();
	}

?>
