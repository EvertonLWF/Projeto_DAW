<div class="home">
	<div class="Dashboard">
		<button class="btn-admin" id="btn-admin-medic" data-teste="medico">Medicos</button><br><br>
		<button class="btn-admin" id="btn-admin-user" data-teste="Cuidadores">Cuidadores</button><br><br>
		<button class="btn-admin" id="btn-admin-device">Dispositivos</button><br><br>
		<button class="btn-admin" id="btn-admin-map">Mapa de atividade</button><br><br>
		<button class="btn-admin" id="btn-admin-emerg">Emergencia</button><br><br>
		<button class="btn-admin" id="btn-admin-atend">Atendimentos</button><br><br>
	</div>
	<iframe class="Dashboard-admin Dashboard-admin-map"src="https://www.google.com/maps/d/embed?mid=1Xqg02gW9YjHTfSvtXUxD2JG343xGsHZI&hl=pt-BR" width="640" height="480"></iframe>
	<div class="Dashboard-admin Dashboard-admin-medic">Medicos</div>
	<div class="Dashboard-admin Dashboard-admin-user">Usuarios</div>
	<div class="Dashboard-admin Dashboard-admin-device">Dispositivos</div>
	<div class="Dashboard-admin Dashboard-admin-emerg">Emergencias</div>
	<div class="Dashboard-admin Dashboard-admin-atend">Atendimentos</div>
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
			<input type="email" name="email" placeholder="Informe o email do usuario" ><br><br>
			<hr>
			Tipo:<br><br>
			<select>
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
		<h2>Cadastro Dispositivos mqtt</h2>
		<form>
			Client_Id:<br>
			<input type="text" name="cliente_id"><br>
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
			<button>Salvar</button>
		</form>
	</div>
	<div class="Dashboard-admin-cadastro cadastro-admin-posto">
		<h2>Cadastro posto</h2>
		<form>
			Cep:<br>
			<input type="text" name="cep"><br>
			<hr>
			Rua:<br>
			<input type="text" name="rua"><br>
			<hr>
			Numero:<br>
			<input type="text" name="numero"><br>
			<hr>
			Telefone:<br>
			<input type="text" name="fone"><br>
			<hr>
			<button>Salvar</button>
		</form>
	</div>
	
</div>
<div class="medic">
		
</div>
<br><br>
	