<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'null'){
			echo "null submission...";
		}

		if($_REQUEST['msg'] == 'invalid'){
			echo "invalid username/password";
		}

		if($_REQUEST['msg'] == 'login_first'){
			echo "please login first...";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>

	<table width="900px" border="1" align="center">
		<tr colspan="3">
			<td width="100px">
				<img src="pic1.png" width="100px" height="100px" ></td>
				<td align="right">
				<a href="public_home.php"><b>Home</b></a> | 
				<a href="login.php"><b>Login</b></a> | 
				<a href="registration.php"><b>Registration</b></a> 
			</td>
		</tr>
		<tr height="200px">
			<td colspan="3">
				<form method="POST" action="logincheck.php">
					<fieldset>
						<legend>LOGIN</legend>

			User Name:<input type="text" name="uname" value=""><br>
	    	  <hr>
	    	  Password:<input type="Password" name="password" value=""><br>
	    	  <hr>
	    	  <input type="checkbox" name="rm" value="">Remember Me<br>
	    	  <input type="submit" name="submit" value="Submit">
	    	  <a href="forget_password.php"><b>Forget Password?</b></a> 

					</fieldset>
				</form>
			</td>
		</tr>
				
		<tr height="50px">
			<td colspan="3" align="center">
				Copyright@2017
			</td>
		</tr>
	</table>
</body>
</html>