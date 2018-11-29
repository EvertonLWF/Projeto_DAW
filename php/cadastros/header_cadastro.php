<?php 
	echo "<br>".$_SERVER['PHP_SELF']."<br>";
	require_once('../../conect.php');
	require_once('../../function.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="../../../dist/hamburgers.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../style.css">
	<title>index.html</title>
</head>
<body>
	<nav class="nav1">
		  <div class="hamburger hamburger--elastic">
   			 <div class="hamburger-box">
		      <div class="hamburger-inner"></div>
		    </div>
		  </div>
		<ul class="ul">
			<li id="btn1" class="li">Cadastro</li>
			<li id="btn2" class="li">Termos de utilização</li>
			<li id="btn3" class="li">Serviços</li>
			
		</ul>
	</nav>
	<div class="login">
		<input class="input-login" type="email" name="email" placeholder="Digite o email"><br><br>
	
		<input class="input-login-senha" type="password" name="senha" placeholder="Digite a senha"><br><br>

		<input type="button" class="btn-login" value="Login" placeholder="Login"><br><br>
		<button class="btn-login-forgot">Esqueci a senha</button>
	</div>
	<div class="div-btn">
		<ul class="ul-btn">
			<li id="btn5" class="li-btn">Cadastro</li>
			<li id="btn6" class="li-btn">Termos de utilização</li>
			<li id="btn7" class="li-btn">Serviços</li>			
		</ul>
	</div>