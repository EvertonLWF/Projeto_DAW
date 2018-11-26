<?php

if(isset($_SERVER['REMOTE_ADDR']) && !empty($_SERVER['REMOTE_ADDR'])){
	$ipv4 = $_SERVER['REMOTE_ADDR'];
	$etapa_1 = cadastro_etapa_1($ipv4,$pdo);
	if(isset($etapa_1) && !empty($etapa_1)){
		var_dump($etapa_1);
		?>
		<div class="home">
		<form class="form-cadastro">
		<h3>Seja bem vindo: <?php echo $etapa_1['nome']; ?></h3>
		<hr>
		<h4>É necessario alterar a sua senha </h4>
		Nova senha:
		<input type="password" name="key"><br><br>
		Repita a senha:
		<input type="password" name="key"><br><br>
		<input type="submit" value="Salvar">


		</form>
		</div>
		<div class="services">

		</div>
		<div class="medic">

		</div>
		<br><br>
		<?php
	}else{
		$etapa_2 = cadastro_etapa_2($ipv4,$pdo);
		if(isset($etapa_2) && !empty($etapa_2)){
			header("location:cadastro.php");
		}

	}
}else{
	die();
}

?>

