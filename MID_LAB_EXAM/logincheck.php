<?php
	session_start();

	if(isset($_REQUEST['submit'])){
		$userid = $_REQUEST['userId'];
		$password = $_REQUEST['password'];

		if(empty($userid) || empty($password)){
			//echo "null submission";
			header('location: login.php?msg=null');
		}else{

			if($_REQUEST['type']='User'){
				//$flag = true;
				$_SESSION['flag'] = "true";
				$_SESSION['userId'] = $userid;

				header('location: user_home.php');
			}else{
				if($_REQUEST['type']='Admin'){
				//$flag = true;
				$_SESSION['flag'] = "true";
				$_SESSION['userId'] = $userid;
				header('location: admin_home.php');
			}else{
				header('location: login.php?msg=invalid');
			}
			}
		}
	}else{
		header('location: login.php');
	}
	

?>