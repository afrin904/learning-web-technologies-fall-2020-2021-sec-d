<?php
	session_start();

	if(isset($_REQUEST['submit'])){
		$uname = $_REQUEST['uname'];
		$password = $_REQUEST['password'];

		if(empty($uname) || empty($password)){
			//echo "null submission";
			header('location: login.php?msg=null');
		}else{

			if($uname == $password){
				//$flag = true;
				$_SESSION['flag'] = "true";
				$_SESSION['uname'] = $uname;

				header('location: login_dash.php');
			}else{
				header('location: login.php?msg=invalid');
			}
		}
	}else{
		header('location: login.php');
	}	
?>