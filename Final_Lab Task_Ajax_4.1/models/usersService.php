<?php

	require_once('../models/db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from reg where id='{$user['id']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	

	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into reg ( id, password ,conpassword, name, email ,user_type) values ('{$user['id']}' , '{$user['password']}', '{$user['conpassword']}','{$user['name']}','{$user['email']}','{$user['user_type']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


?>