<?php
    require_once('../php/header.php');
	require_once('../models/usersService.php');
	if(isset($_REQUEST['submit'])){

		$name = $_REQUEST['name'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$contactno = $_REQUEST['contactno'];

		if(empty($name) || empty($username) ||empty($password) || empty($contactno))
		{
			echo "Null Submition";
		}
		else{

		$user = [
			    
			    'name'=> $name,
				'username'=> $username,
				'password'=> $password,
				'contactno'=> $contactno
			];

	insertUsers($user);
	echo "Registration Done !";
}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<center>
	<form method="post" action="">
		<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
		        <fieldset>
			    <legend>Registration</legend>	
				Name<br/><input type="text" name="name"><br/>
				Username<br/><input type="text" name="username"><br/>
			    Password<br/><input type="password" name="password"><br/>
			    Contact Number<br/><input type="text" name="contactno"><br/>
					<input type="submit" name="submit" value="Register">
		        </fieldset>
	        </td>
        </tr>
		</table>
	</form>
	                <a href="../view/userlist.php">Back</a>
	</center>
</body>
</html>