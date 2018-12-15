<div class="home">
	<br><br>
	<?php 
	$ver = verificaMedico($pdo,$_SESSION['id_user']);
	
	if(isset($ver) && !empty($ver)){
 		$html = '<form class="meusDados">
		<h3>Meus dados</h3>

		
		<p>Nome:'.$ver['nome'].'</p>

		<p>Especialização:'.$ver['especialização'].'</p>

		<p>CRM:'.$ver['crm'].'</p>

		<p>Cep:'.$ver['cep'].'</p>

		<p>Rua:'.$ver['rua'].'</p>

		<p>Numero:'.$ver['numero_rua'].'</p><br>
		
		<img src="../../'.$ver['img'].'"><br>

		<input type="button" class="btn-dados-medico" value="Atualizar">
		</form>';
		echo $html;
		?>
		<form class="atualizarDadosMedico" id="atualizarDadosMedico">
			<h3>Atualizar Dados :</h3><br><br>
			CRM:<input type="text" name="crm" value="<?php echo $ver['crm']; ?>"><br><br>
			Especialização:<select name="esp" value="<?php echo $ver['especialização']; ?>">
				<option value="Urologia">Urologia</option>
				<option value="Pediatra">Pediatra</option>
				<option value="Psiquiatra">Psiquiatra</option>
				<option value="Cardiologia">Cardiologia</option>
				<option value="Endocrinologia">Endocrinologia</option>
			</select><br><br>
			cep:<input type="text" name="cep" id="cep" value="<?php echo $ver['cep']; ?>"><br><br>
			Rua:<input type="text" name="rua" value="<?php echo $ver['rua']; ?>"><br><br>
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
			Selecione sua foto:<input type="file" name="foto" id="arquivo">
			<input type="hidden" name="tamanho" value="200000">
			<input type="hidden" name="url" id="url"><br><br><br><br>

			<input  type="submit" id="SalvarDadosMedicos" value="Salvar"><br><br>
		</form>

		<?php

	}else{
		?>

		<form class="dados" id="dados">
			<h3>Antes de começar você precisa atualizar alguns dados :</h3>
			CRM:<input type="text" name="crm" placeholder="Informe seu crm"><br><br>
			Especialização:<select name="esp">
				<option value="Urologia">Urologia</option>
				<option value="Pediatra">Pediatra</option>
				<option value="Psiquiatra">Psiquiatra</option>
				<option value="Cardiologia">Cardiologia</option>
				<option value="Endocrinologia">Endocrinologia</option>
			</select><br><br>
			Cep:<input type="text" name="cep" id="cep" placeholder="Informe o Cep"><br><br>
			Rua:<input type="tetx" name="rua" placeholder="informe a rua"><br><br>
			Número:<input type="text" name="num" placeholder="informe o numero"><br><br>
			Posto:<select name="posto">
				<?php 
				$posto = selectPosto($pdo);
				$count = 1;
				foreach ($posto as $key) {
					echo '<option value='.$count.'>'.$key['nome'].'</option><br>';
				}
				?>
			</select><br><br>
			Selecione sua foto:<input type="file" name="foto" id="arquivo">
			<input type="hidden" name="tamanho" value="200000">
			<input type="hidden" name="url" id="url"><br><br>

			<input type="submit" id="atualizar" value="Salvar"><br><br>
		</form>
	<?php } ?>
	
</div>
<div class="services">
	<?php var_dump($ver); ?>
</div>
<div class="medic">
	<div class="Dashboard">
		<button class="btn-admin" id="btn-admin-device-online">Pacientes online</button>
	</div>
	<div class="Dashboard-admin Dashboard-admin-device-online">
		<table class="table-devices">
			<h3>Lista de Dispositivos Online</h3>
			<thead>
				<th scope="column">Server</th>
				<th scope="column">Topico</th>
				<th scope="column">Port</th>
				<th scope="column">Client_Iot</th>
				<th scope="column">Selecionar</th>
			</thead>
			<tbody>


				<?php

				$res = selectDevicePosto($pdo,$ver['id_posto']);
					
				foreach ($res as $key){
					
					$key['select'] = '<button class="selectDevice" id="btn-online" value="'.$key['id_cliente'].'">Selecionar</button>';
					$html= '<tr class="testemqtt">
					<td nome="server">'.$key['cliente_server'].'</td>
					<td nome="topivo">'.$key['cliente_topico'].'</td>
					<td nome="port">'.$key['cliente_port'].'</td>
					<td nome="id">'.$key['cliente_iot'].'</td>
					<td>'.$key['select'].'</td></tr>';
					echo $html;
				}
				?>
			</tbody>
		</table>
	</div>
	<div class="Dashboard-admin Dashboard-admin-device-online-mqtt">
		<div class="chart-container">
			<canvas class="Graphc" id="Graphc"></canvas>
			<div class="temp"><h3 id="h3"></h3></div>
		</div>
		<button class="Graphc-sair">Sair</button>
	</div>

</div>