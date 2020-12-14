<?php
	//session_start();
	require_once('../models/usersService.php');

	if(isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$password = $_REQUEST['password'];

		if(empty($id) || empty($password)){
			//echo "null submission";
			header('location: ../view/login.php?msg=null');
		}else{

			$user = [
				'id'=> $id,
				'password'=> $password
			];

			$status = validate($user);

			if($status){
				setcookie('flag', $id, time()+3600, '/');
				header('location: ../view/user_home.php');
			}else{
				header('location: ../view/login.php?msg=invalid');
			}
		}
	}else{
		header('location: ../view/login.php');
	}
	

?>