<?php
	session_start();

	if(isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$password = $_REQUEST['password'];
		$name = $_REQUEST['name'];
		$type = $_REQUEST['type'];
		

		if(empty($id) || empty($password)){
			//echo "null submission";
			header('location: login.php?msg=null');
		}else{

			if($id == '16-10101-2' && $password == 'bob'){
				//$flag = true;
				$_SESSION['flag'] = "true";
				$_SESSION['id'] = $id;
				$_SESSION['password'] =$password;
		        $_SESSION['name'] =$name;
		        $_SESSION['type'] = $type ;

				header('location: admin_home.php');

			}elseif($id == '15-10101-1' && $password == 'Anne'){
				//$flag = true;
				$_SESSION['flag'] = "true";
				$_SESSION['id'] = $id;
				$_SESSION['password'] =$password;
		        $_SESSION['name'] =$name;
		        $_SESSION['type'] = $type ;

				header('location: user_home.php');
			}else{
				header('location: login.php?msg=invalid');
			}
		}
	}else{
		header('location: login.php');
	}	
?>