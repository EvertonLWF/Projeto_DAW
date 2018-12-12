<?php 
require_once("php/logout.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="dist/hamburgers.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
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
			<li id="btn1" class="li">Home</li>
			<li id="btn2" class="li">Serviços</li>
			<li id="btn3" class="li">Medicos</li>
			<li id="btn4" class="li">Login</li>
		</ul>
		<form>
			<div class="busca">              
				<input type="text" class="busca-btn" placeholder=" Busca">
				<button class="btn"></button>
			</div>
		</form>
	</nav>
	<div class="login">
		<input class="input-login" type="email" name="email" placeholder="Digite o email"><br><br>
		
		<input class="input-login-senha" type="password" name="senha" placeholder="Digite a senha"><br><br>

		<input type="button" class="btn-login" value="Login" placeholder="Login"><br><br>
		<button class="btn-login-forgot">Esqueci a senha</button>
	</div>

	<div class="login-forgot">
		<form>
			<h3>Recuperar a senha:</h3>
			<input type="email" name="email" placeholder="Informe o seu email usado para login"><br><br>
			<input type="button" class="btn-login-forgot-enviar" value="Enviar"><br><br>
		</form>
	</div> 
