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
	function cadastro_etapa_1($ipv4,$pdo){
		$sql = "SELECT * FROM users WHERE ip = :ip";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':ip',$ipv4);
		$sql->execute();
		$sql = $sql->fetch();
		return $sql;

	}
	function cadastro_etapa_2($ipv4,$pdo){
		$sql = "INSERT INTO users (ip) VALUES (:ip)";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':ip',$ipv4);
		$sql->execute();
		$sql = $sql->fetch();
		return $sql;

	}
	function cadastro_etapa_3($email,$key,$pdo){
		$sql = "INSERT INTO users (email_users,key_user) VALUES (:email,:key)";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(':email',$email);
		$sql->bindValue(':key',$key);
		$sql->execute();
		$sql = $sql->fetch();
		return $sql;
	}

?>