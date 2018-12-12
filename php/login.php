<?php
	session_start();
	require_once('conect.php');
	require_once('function.php');

	if(isset($_POST['mail']) && !empty($_POST['mail'])){
		$sql = array("=","'","-","&","|","+","!");
		$email =($_POST['mail']);
		$email = str_replace($sql,"", $email);
		$res = consulta_mail($email,$pdo);
		if(isset($res) && !empty($res)){
			$_SESSION['email']=$email;
			$array = array('status'=>'ok','mail'=>$email,'id_user'=>$res["id_user"]);
			

		}else{
			$array = array('status'=>'erro');
		}


	}else{
	if(isset($_POST['senha'])&& !empty($_POST['senha']) && isset($_POST['id_user'])&& !empty($_POST['id_user'])){
		$sql = array("=","'","-","&","|","+","!");
		$id_user = $_POST['id_user'];
		$_SESSION['id_user'] = $_POST['id_user'];
		$senha = ($_POST['senha']);
		$senha = str_replace($sql, "", $senha);
		$senha = md5($senha);
		$res2 = consulta_key($senha,$id_user,$pdo);
		if(isset($res2) && !empty($res2)){
			$array = array('status'=>'ok');
			$_SESSION["id_user"] = $id_user;
			$_SESSION["senha"] = $senha;
		}else{
			$array = array('status'=>'erro');
		}
	}else{
		$array = array('status'=>'erro');
	}
}
	echo json_encode($array);

 ?>