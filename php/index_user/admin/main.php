<div class="home">
	<div class="Dashboard">
		<button class="btn-admin" id="btn-admin-medic">Medicos</button><br><br>
		<button class="btn-admin" id="btn-admin-user">Cuidadores</button><br><br>
		<button class="btn-admin" id="btn-admin-device">Dispositivos</button><br><br>
		<!-- <button class="btn-admin" id="btn-admin-map">Mapa de atividade</button><br><br>
		<button class="btn-admin" id="btn-admin-emerg">Emergencia</button><br><br>
		<button class="btn-admin" id="btn-admin-atend">Atendimentos</button><br><br> -->
	</div>
	<!-- <iframe class="Dashboard-admin Dashboard-admin-map"src="https://www.google.com/maps/d/embed?mid=1Xqg02gW9YjHTfSvtXUxD2JG343xGsHZI&hl=pt-BR" width="640" height="480"></iframe> -->
	<div class="Dashboard-admin Dashboard-admin-medic">
		
		<table class="table-medicos">
			<h3>Lista de Médicos cadastrados</h3>
			<thead>
				<th scope="column">Nome</th>
				<th scope="column">Especialização</th>
				<th scope="column">Email</th>
				<th scope="column">Crm</th>
				<th scope="column" class="ativo_status">Status</th>
				<th scope="column" class="ativo_status">Delete</th>
			</thead>
			<tbody>
				<?php
				$res = selectMedic($pdo);
				foreach ($res as $key){
					
					$key['drop'] = '<button class="drop">Deletar</button>';
					if($key['ative']=='LOW'){
						$key['btn'] = '<button class="ativo_on">Inativo</button>';
					}else{
						$key['btn'] = '<button class="ativo_off">Ativo</button>';
					}

					$html= '<tr id="">
					<td>'.$key['nome'].'</td>
					<td>'.$key['especialização'].'</td>
					<td>'.$key['email_user'].'</td>
					<td class>'.$key['crm'].'</td>
					<td>'.$key['btn'].'</td>
					<td>'.$key['drop'].'</td></tr>';
					echo $html;

				}
				
				?>
			</tbody>
		</table>
	</div>


	<div class="Dashboard-admin Dashboard-admin-user">
		<table class="table-enferm">
			<h3>Lista de Cuidadores cadastrados</h3>
			<thead>
				<th scope="column">Nome</th>
				<th scope="column">Email</th>
				<th scope="column">Coren</th>
				<th scope="column">Status</th>
				<th scope="column">Delete</th>
			</thead>
			<tbody>
				
				<?php
				$res = selectEnferm($pdo);
				foreach ($res as $key){
					$key['drop'] = '<button class="dropEnferm">Deletar</button>';
					if($key['ative']=='LOW'){
						$key['btn'] = '<button class="ativo_on">Ativar</button>';
					}else{
						$key['btn'] = '<button class="ativo_off">Desativar</button>';
					}

					$html= '<tr>
					<td>'.$key['nome'].'</td>
					<td>'.$key['email_user'].'</td>
					<td class>'.$key['coren'].'</td>
					<td>'.$key['btn'].'</td>
					<td>'.$key['drop'].'</td></tr>';
					echo $html;
				}
				
				?>

			</tbody>
		</table>



	</div>
	<div class="Dashboard-admin Dashboard-admin-device">
		<table class="table-devices">
			<h3>Lista de Dispositivos cadastrados</h3>
			<thead>
				<th scope="column">Server</th>
				<th scope="column">Topico</th>
				<th scope="column">Port</th>
				<th scope="column">Client_Iot</th>
				<th scope="column">Remover</th>
			</thead>
			<tbody>


				<?php

				$res = selectDevice($pdo);

				foreach ($res as $key){
					$key['drop'] = '<button class="dropDevice">Deletar</button>';
					$html= '<tr>
					<td>'.$key['cliente_server'].'</td>
					<td>'.$key['cliente_topico'].'</td>
					<td>'.$key['cliente_port'].'</td>
					<td>'.$key['cliente_iot'].'</td>
					<td>'.$key['drop'].'</td></tr>';;
					echo $html;
				}
				?>
			</tbody>
		</table>
	</div>
	<!-- <div class="Dashboard-admin Dashboard-admin-emerg">
		<table>
			<h3>Lista de Emergencias ativas</h3>
			<thead>
				<th scope="column">Nome</th>
				<th scope="column">Especialização</th>
				<th scope="column">Email</th>
				<th scope="column">Crm</th>
				<th scope="column">Operações</th>
			</thead>
			<tbody>


				<?php
				foreach ($res as $key){
					$html= '<br><tr>
					<td>'.$key['nome'].'</td>
					<td>'.$key['especialização'].'</td>
					<td>'.$key['email_user'].'</td>
					<td>'.$key['crm'].'</td>
					<td>'.$key['crm'].'</td>';
					echo $html;
				}
				?>
			</tbody>
		</table>
	</div> --><!-- 
	<div class="Dashboard-admin Dashboard-admin-atend">
		<table>
			<h3>Lista de Atendimentos</h3>
			<thead>
				<th scope="column">Nome</th>
				<th scope="column">Especialização</th>
				<th scope="column">Email</th>
				<th scope="column">Crm</th>
			</thead>
			<tbody>


				<?php
				foreach ($res as $key){
					$html= '<br><tr>
					<td>'.$key['nome'].'</td>
					<td>'.$key['especialização'].'</td>
					<td>'.$key['email_user'].'</td>
					<td>'.$key['crm'].'</td>';
					echo $html;
				}
				?>
			</tbody>
		</table>
	</div>-->
</div> 
<div class="services">
	<div class="Dashboard">
		<button class="btn-admin" id="btn-cadastro-users">Cadastro users</button><br><br>
		<button class="btn-admin" id="btn-cadastro-device">Cadastro MQTT</button><br><br>
		<button class="btn-admin" id="btn-cadastro-clinica">Cadastro Consultorio</button><br><br>
	</div>
	<div class="Dashboard-admin-cadastro cadastro-admin-users">
		<h2>Cadastro de novos usuarios</h2>
		<form method="POST" action="send.php">
			Email:<br><br>
			<input id="emailCadastro" type="email" name="email" placeholder="Informe o email do usuario" ><br><br>
			<hr>
			Tipo:<br><br>
			<select name="tipo">
				<option value="1">medico</option>
				<option value="2">usuario</option>
				<option value="3">Administrador</option>
			</select><br>
			<hr>
			Enviar:<br><br>
			<button>Enviar</button>	
		</form>
	</div>
	<div class="Dashboard-admin-cadastro cadastro-admin-mqtt">
		<h2>Cadastro Dispositivos IOT</h2>
		<form id="formMqtt"> 
			Client_IOT:<br>
			<input type="text" id="cliente_id" name="cliente_id"><br>
			<hr>
			Cliente_topic:<br>
			<input type="text" name="topic"><br>
			<hr>
			Server:<br>
			<input type="text" name="server"><br>
			<hr>
			Port:<br>
			<input type="text" name="port"><br>
			<hr>
			<button id="cadastroAdminMqtt">Salvar</button>
		</form>
	</div>
	<div class="Dashboard-admin-cadastro cadastro-admin-posto">
		<h2>Cadastro posto</h2>
		<form id="formPosto">
			Nome:<br>
			<input type="text" id="nomePosto" name="nome"><br>
			<hr>
			Cep:<br>
			<input type="text" id="cep" name="cep"><br>
			<hr>
			Cidade:<br>
			<input type="text" name="cidade"><br>
			<hr>
			Rua:<br>
			<input type="text" name="endereco"><br>
			<hr>
			Numero:<br>
			<input type="text" name="NumeroRua"><br>
			<hr>
			
			<button id="cadastroAdminPosto">Salvar</button>
		</form>
	</div>
	
</div>
<div class="medic">

</div>
