<div class="home"><br><br>
	<?php 
	$ver = verificaEnferm($pdo,$_SESSION['id_user']);
	if(isset($ver) && !empty($ver)){
		$html = '<form class="meusDados">
		<h3>Meus dados</h3>

		
		Nome:'.$ver['nome'].

		'<br>Coren:'.$ver['coren'].'

		<br>Cep:'.$ver['cep'].'

		<br>Rua:'.$ver['rua'].'

		<br>Numero:'.$ver['numero_rua'].'
		
		<input type="button" name="atualizar" value="atualizar">
		</form>';
		echo $html;
	}else{
		?>

		<form class="dados" id="dados">

			<h3>Antes de começar você precisa atualizar alguns dados :</h3>
			<input type="hidden" name="id" value="<?php echo $_SESSION['id_user']; ?>">
			coren:<br>
			<input type="text" name="coren" placeholder="Informe seu coren"><br><br>
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
			</select><br><br><br><br>

			<input type="submit" id="atualizar-Enferm" value="Salvar">
		</form>
	<?php } ?>
</div>
<div class="services">

</div>
<div class="medic">


</div>

