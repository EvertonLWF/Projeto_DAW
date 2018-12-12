<?php 	

function consulta_mail($mail,$pdo){
	$sql = "SELECT * FROM Users WHERE email_user = :email";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':email',$mail);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql;
}
function unblock($pdo,$crm){
	$sql = "UPDATE medicos SET ative ='HIGH' WHERE crm = :crm";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':crm',$crm);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function drop($pdo,$crm){
	$sql = "DELETE FROM medicos WHERE crm = :crm";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':crm',$crm);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function dropU($pdo,$coren){
	$sql = "DELETE FROM enfermeiros WHERE coren = :coren";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':coren',$coren);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function dropD($pdo,$topico){
	$sql = "DELETE FROM pacientes WHERE cliente_topico = :topico";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':topico',$topico);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function block($pdo,$crm){
	$sql = "UPDATE medicos SET ative ='LOW' WHERE crm = :crm";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':crm',$crm);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function unblockE($pdo,$coren){
	$sql = "UPDATE enfermeiros SET ative ='HIGH' WHERE coren = :coren";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':coren',$coren);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function blockE($pdo,$coren){
	$sql = "UPDATE enfermeiros SET ative ='LOW' WHERE coren = :coren";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':coren',$coren);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function consulta_key($key,$id_user,$pdo){
	$sql = "SELECT * FROM Users WHERE key_user = :key AND id_user = '".$id_user."'";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':key',$key);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql;
}
function selectTipo($id_user,$pdo){
	$sql = "SELECT tipo,hash FROM Users WHERE id_user = '".$id_user."'";
	$sql = $pdo->query($sql);
	$sql = $sql->fetch();
	return $sql;
}
function verificaEmail($email,$pdo){
	$sql = "SELECT nome FROM users WHERE email_user = :email";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':email',$email);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function verificaDevice($cliente_iot,$pdo){
	$sql = "SELECT id_cliente FROM pacientes WHERE cliente_iot = :cliente_iot";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':cliente_iot',$cliente_iot);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function verificaPosto($pdo,$nome){
	$sql = "SELECT nome FROM posto WHERE nome = :nome";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':nome',$nome);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql; 
}
function cadastro_etapa_1($tipo,$email,$pdo){
	$sql = "INSERT INTO users (tipo,email_user,key_user,nome,hash) VALUES (:tipo,:email,:key,:nome,:hash)";
	$hash = md5(date('DMYhms').rand());
	$nome = explode('@', $email);
	$key = md5($email);
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':tipo',$tipo);
	$sql->bindValue(':nome',$nome[0]);
	$sql->bindValue(':email',$email);
	$sql->bindValue(':key',$key);
	$sql->bindValue(':hash',$hash);
	$sql->execute();
	$sql = $sql->fetchall();
	return $sql;
}
function cadastroMqtt($pdo,$cliente_iot,$cliente_topico,$cliente_server,$cliente_port){
	$sql = "INSERT INTO pacientes(cliente_iot,cliente_topico,cliente_server,cliente_port)VALUES(:cliente_iot,:cliente_topico,:cliente_server,:cliente_port)";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':cliente_topico',$cliente_topico);
	$sql->bindValue(':cliente_iot',$cliente_iot);
	$sql->bindValue(':cliente_server',$cliente_server);
	$sql->bindValue(':cliente_port',$cliente_port);
	$sql->execute();
	$sql = $sql->fetchall();
	return $sql;
}
function cadastroPosto($pdo,$cidade,$endereco,$NumeroRua,$nome,$cep){
	$sql = "INSERT INTO posto(cidade,endereço,numero_rua,nome,cep)VALUES(:cidade,:endereco,:NumeroRua,:nome,:cep)";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':cidade',$cidade);
	$sql->bindValue(':endereco',$endereco);
	$sql->bindValue(':NumeroRua',$NumeroRua);
	$sql->bindValue(':nome',$nome);
	$sql->bindValue(':cep',$cep);
	$sql->execute();
	$sql = $sql->fetchall();
	return $sql;
}
function selectPosto($pdo){
	$sql = "SELECT nome FROM posto";
	$sql = $pdo->prepare($sql);
	$sql->execute();
	$sql = $sql->fetchall();
	return $sql;
}
function selectMedic($pdo){
	$sql = "SELECT nome,especialização,email_user,crm,img,ative FROM medicos JOIN users USING(id_user)";
	$sql = $pdo->prepare($sql);
	$sql->execute();
	$sql = $sql->fetchall();
	return $sql;
}
function selectEnferm($pdo){
	$sql = "SELECT * FROM enfermeiros JOIN users USING (id_user)";
	$sql = $pdo->prepare($sql);
	$sql->execute();
	$sql = $sql->fetchall();
	return $sql;
}
function selectDevice($pdo){
	$sql = "SELECT * FROM pacientes";
	$sql = $pdo->prepare($sql);
	$sql->execute();
	$sql = $sql->fetchall();
	return $sql;
}
function keygen($id,$senha,$pdo){
	$access = md5("Active");
	$sql = "UPDATE users SET key_user = :senha, hash = :access WHERE id_user = :id";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':senha',$senha);
	$sql->bindValue(':id',$id);
	$sql->bindValue(':access',$access);
	$sql->execute();
	$sql = $sql->fetch();
	return "success";
}
function forgotPass($pdo,$email,$key){
	$hash = md5(date('DMYhms').rand());
	$newKey = md5($key);
	$sql2 = "UPDATE users SET hash =:hash,key_user = '".$newKey."'  WHERE email_user = :email" ;
	$sql1 = "SELECT * FROM users WHERE email_user = :email";
	
	$sql1 = $pdo->prepare($sql1);
	$sql2 = $pdo->prepare($sql2);

	$sql1->bindValue(':email',$email);
	$sql2->bindValue(':hash',$hash);
	$sql2->bindValue(':email',$email);

	$sql1->execute();
	$sql1 = $sql1->fetch();
	if(empty($sql1)){
		return $sql1;
	}else{
		$sql2->execute();
		$sql2 = $sql2->fetch();
		return $sql1;
	}	
}
function verificaMedico($pdo,$id){
	$sql = "SELECT * FROM medicos JOIN users USING(id_user) WHERE id_user = :id";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':id',$id);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql;
}
function verificaEnferm($pdo,$id){
	$sql = "SELECT * FROM enfermeiros JOIN users USING(id_user) WHERE id_user = :id";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':id',$id);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql;
}
function atualizaMedico($pdo,$crm,$esp,$cep,$rua,$num,$posto,$id,$img){
	$ative = "LOW";
	$sql = "INSERT INTO medicos(crm,especialização,cep,rua,numero_rua,id_posto,id_user,img,ative) VALUES (:crm,:esp,:cep,:rua,:num,:posto,:id,:img,:ative)";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':crm',$crm);
	$sql->bindValue(':esp',$esp);
	$sql->bindValue(':cep',$cep);
	$sql->bindValue(':rua',$rua);
	$sql->bindValue(':num',$num);
	$sql->bindValue(':posto',$posto);
	$sql->bindValue(':id',$id);
	$sql->bindValue(':img',$img);
	$sql->bindValue(':ative',$ative);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql;
}
function atualizaEnferm($pdo,$coren,$cep,$rua,$num,$posto,$id){
	$ative = "LOW";
	$sql = "INSERT INTO enfermeiros(rua,numero_rua,cep,coren,id_user,posto,ative) VALUES (:rua,:num,:cep,:coren,:id,:posto,:ative)";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(':coren',$coren);
	$sql->bindValue(':cep',$cep);
	$sql->bindValue(':rua',$rua);
	$sql->bindValue(':num',$num);
	$sql->bindValue(':posto',$posto);
	$sql->bindValue(':id',$id);
	$sql->bindValue(':ative',$ative);
	$sql->execute();
	$sql = $sql->fetch();
	return $sql;
}
function card_Ur($pdo){
	$html ="";
	$var = selectMedic($pdo);
	$array = array('../');
	foreach ($var as $key) {
		if($key['especialização']=='Urologia'){
			$html = '<div class="flip-card">
			<div class="flip-card-inner">
			<div class="flip-card-front">
			<img src="'.str_replace($array, "", $key['img']).'" alt="Avatar" style="width:200px;height:200px;">
			</div>
			<div class="flip-card-back">
			<h1>'.$key['nome'].'</h1> 
			<p>'.$key['especialização'].'</p> 
			<p>'.$key['email_user'].'</p>
			</div>
			</div>
			</div>';
		}
		
	}
	return $html;
}
function card_Pe($pdo){
	$html ="";
	$var = selectMedic($pdo);
	$array = array('../');
	foreach ($var as $key) {
		if($key['especialização']=='Pediatria'){
			$html = '<div class="flip-card">
			<div class="flip-card-inner">
			<div class="flip-card-front">
			<img src="'.str_replace($array, "", $key['img']).'" alt="Avatar" style="width:200px;height:200px;">
			</div>
			<div class="flip-card-back">
			<h1>'.$key['nome'].'</h1> 
			<p>'.$key['especialização'].'</p> 
			<p>'.$key['email_user'].'</p>
			</div>
			</div>
			</div>';
		}
		
	}
	return $html;
}
function card_Ps($pdo){
	$html ="";
	$var = selectMedic($pdo);
	$array = array('../');
	foreach ($var as $key) {
		if($key['especialização']=='Psiquiatra'){
			$html = '<div class="flip-card">
			<div class="flip-card-inner">
			<div class="flip-card-front">
			<img src="'.str_replace($array, "", $key['img']).'" alt="Avatar" style="width:200px;height:200px;">
			</div>
			<div class="flip-card-back">
			<h1>'.$key['nome'].'</h1> 
			<p>'.$key['especialização'].'</p> 
			<p>'.$key['email_user'].'</p>
			</div>
			</div>
			</div>';
		}
		
	}
	return $html;
}
function card_Ca($pdo){
	$html ="";
	$var = selectMedic($pdo);
	$array = array('../');
	foreach ($var as $key) {
		if($key['especialização']=='Cardiologia'){
			$html = '<div class="flip-card">
			<div class="flip-card-inner">
			<div class="flip-card-front">
			<img src="'.str_replace($array, "", $key['img']).'" alt="Avatar" style="width:200px;height:200px;">
			</div>
			<div class="flip-card-back">
			<h1>'.$key['nome'].'</h1> 
			<p>'.$key['especialização'].'</p> 
			<p>'.$key['email_user'].'</p>
			</div>
			</div>
			</div>';
		}
		
	}
	return $html;
}
function card_En($pdo){
	$html ="";
	$var = selectMedic($pdo);
	$array = array('../');
	foreach ($var as $key) {
		if($key['especialização']=='Endocrinologia'){
			$html = '<div class="flip-card">
			<div class="flip-card-inner">
			<div class="flip-card-front">
			<img src="'.str_replace($array, "", $key['img']).'" alt="Avatar" style="width:200px;height:200px;">
			</div>
			<div class="flip-card-back">
			<h1>'.$key['nome'].'</h1> 
			<p>'.$key['especialização'].'</p> 
			<p>'.$key['email_user'].'</p>
			</div>
			</div>
			</div>';
		}
		
	}
	return $html;
}


?>