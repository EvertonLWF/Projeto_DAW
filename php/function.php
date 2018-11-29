<?php 	

	function consulta_mail($mail,$pdo){
		$sql = "SELECT * FROM Users WHERE email_user = :email";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':email',$mail);
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
		$sql = "SELECT tipo FROM Users WHERE id_user = '".$id_user."'";
		$sql = $pdo->query($sql);
		$sql = $sql->fetch();
		return $sql;
	}
	
	function cadastro_etapa_1($email,$key,$pdo){
		$sql = "INSERT INTO users (email_users,key_user,id) VALUES (:email,:key,:hash)";
		$hash = md5(date('DMYhms').rand());
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':email',$email);
		$sql->bindValue(':key',$key);
		$sql->bindValue(':hash',$hash);
		$sql->execute();
		$sql = $sql->fetch();
		return $sql;
	}
	function selectMedic($pdo){
		$sql = "SELECT nome,especialização,email_user,crm FROM medico JOIN ";
		$sql = $pdo->prepare($sql);
		$sql->execute();
		$sql = $sql->fetch();
		return $sql;
	}

?>