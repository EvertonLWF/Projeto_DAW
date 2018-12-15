<div class="home"><br><br>
	<?php 
	$ver = verificaEnferm($pdo,$_SESSION['id_user']);
	if(isset($ver) && !empty($ver)){
		$html = '<form class="meusDados">
		<h3>Meus dados</h3>

		
		<p>Nome:'.$ver['nome'].'</p>

		<p>Coren:'.$ver['coren'].'</p>

		<p>Cep:'.$ver['cep'].'</p>

		<p>Rua:'.$ver['rua'].'</p>

		<p>Numero:'.$ver['numero_rua'].'</p><br>
		
		<input type="button" class="btn-dados-enfermeiro" value="Atualizar">
		</form>';
		echo $html;
		?>

		<form class="atualizarDadosEnferm" id="atualizarDadosEnferm">
			<h3>Atualizar Dados :</h3><br><br>
			COREN:<input type="text" name="coren" value="<?php echo $ver['coren']; ?>"><br><br>
			cep:<input type="text" name="cep" value="<?php echo $ver['cep']; ?>"><br><br>
			Rua:<input type="tetx" name="rua" value="<?php echo $ver['rua']; ?>"><br><br>
			Numero:<input type="text" name="num" value="<?php echo $ver['numero_rua']; ?>"><br><br>
			Posto:<select name="posto" value="<?php echo $ver['posto']; ?>">
				<?php 
				$posto = selectPosto($pdo);
				$count = 1;
				foreach ($posto as $key) {
					echo '<option value='.$count.'>'.$key['nome'].'</option><br>';
				}
				?>
			</select><br><br>
			<input  type="submit" id="SalvarDadosEnferm" value="Salvar"><br><br>
		</form>

		<?php

	}else{
		?>

		<form class="dados" id="dados">

			<h3>Antes de começar você precisa atualizar alguns dados :</h3>
			<input type="hidden" name="id" value="<?php echo $_SESSION['id_user']; ?>">
			coren:<br>
			<input type="text" name="coren" placeholder="Informe seu coren"><br><br>
			cep:<br>
			<input type="text" name="cep" id="cep" placeholder="Informe o cep"><br><br>
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
<div class="services" style="background-image: url('../../img/site-em-manuteno.jpg');">

</div>
<div class="medic">


</div>

