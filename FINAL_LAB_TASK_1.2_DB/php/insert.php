<?php
    require_once('../php/header.php');
	require_once('../models/usersService.php');
	if(isset($_REQUEST['submit'])){

		$id =$_REQUEST['id'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$type = $_REQUEST['type'];

		$user = [
			    'id' => $id,
				'username'=> $username,
				'password'=> $password,
				'email'=>$email,
				'type'=> $type
			];

	insertUsers($user);

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
	<center>
	<form method="post" action="">
		<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
		        <fieldset>
			    <legend>Insert</legend>	
				Id<br/><input type="text" name="id"><br/>
				Username<br/><input type="text" name="username"><br/>
			    Password<br/><input type="password" name="password"><br/>
			    Email<br/><input type="text" name="email"><br/>
			    Type<br/><select name="type" ><br/><br/>
				    <option value="user" selected>User</option>
				    <option value="admin">Admin</option>
                    <option value="student">Student</option>
			        </select> <br/><hr><hr>
					<input type="submit" name="submit" value="Add">
		        </fieldset>
	        </td>
        </tr>
		</table>
	</form>
	                <a href="../view/userlist.php">Back</a>
	</center>
</body>
</html>