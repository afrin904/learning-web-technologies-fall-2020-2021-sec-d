<?php

	require_once('../models/db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from users where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	function getById(){

		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function insertUsers($user){

		$conn = getConnection();
		$sql = "insert into users( name,username , password , contactno) values('{$user['name']}' ,'{$user['username']}', '{$user['password']}', '{$user['contactno']}')";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}


	function deleteUsers($id){
		$conn = getConnection();
		$sql = "delete from users where id=$id";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}

	function updateUsers($user){
		$conn = getConnection();
		$sql ="update users set name = '{$user['name']}',username = '{$user['username']}', password = '{$user['password']}', contactno = '{$user['contactno']}' ";

	    $status = mysqli_query($conn, $sql);

	    if($status){
			return true;
		}else{
			return false;
		}

	}

function searchUsers($id){
		$conn = getConnection();
		$sql = "select * from users where id=$id";

		$status = mysqli_query($conn, $sql);

		if($status){
			return true;
		}else{
			return false;
		}
	}
?>