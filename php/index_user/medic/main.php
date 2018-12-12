<div class="home">
	
</div>
<div class="services">

</div>
<div class="medic">
	<?php 
	$ver = verificaMedico($pdo,$_SESSION['id_user']);
	print_r($ver);
	if(isset($ver) && !empty($ver)){
		$html = '<form class="meusDados">
		<h3>Meus dados</h3>

		
		Nome:'.$ver['nome'].

		'<br>Especialização:'.$ver['especialização'].'

		<br>CRM:'.$ver['crm'].'

		<br>Cep:'.$ver['cep'].'

		<br>Rua:'.$ver['rua'].'

		<br>Numero:'.$ver['numero_rua'].'
		
		<br><img src="../../'.$ver['img'].'"><br>

		<input type="button" name="atualizar" value="atualizar">
		</form>';
		echo $html;
	}else{
		?>

		<form class="dados" id="dados">



			<h3>Antes de começar você precisa atualizar alguns dados :</h3>

			CRM:<br>
			<input type="text" name="crm" placeholder="Informe seu crm"><br><br>
			Especialização:<br>
			<select name="esp">
				<option value="Urologia">Urologia</option>
				<option value="Pediatra">Pediatra</option>
				<option value="Psiquiatra">Psiquiatra</option>
				<option value="Cardiologia">Cardiologia</option>
				<option value="Endocrinologia">Endocrinologia</option>
			</select><br><br>
			cep:<br>
			<input type="text" name="cep" placeholder="Informe o cep"><br><br>
			Rua:<br>
			<input type="tetx" name="rua" placeholder="informe a rua"><br><br>
			Numero:<br>
			<input type="text" name="num" placeholder="informe o numero"><br><br>
			Posto:<br>
			<select name="posto">
				<?php 
				$posto = selectPosto($pdo);
				$count = 1;
				foreach ($posto as $key) {
					echo '<option value='.$count.'>'.$key['nome'].'</option><br>';
				}
				?>
			</select><br><br>
			Selecione sua foto:<br>
			<input type="file" name="foto" id="arquivo"><br><br>
			<input type="hidden" name="tamanho" value="200000">
			<input type="hidden" name="url" id="url">

			<input type="submit" id="atualizar" value="Salvar">
		</form>
	<?php } ?>

</div>