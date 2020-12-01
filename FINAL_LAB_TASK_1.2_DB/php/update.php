<?php
    require_once('../php/header.php');
	require_once('../models/usersService.php');

    $id = $_GET['id'];
    $username = $_GET['username'];
	$password = $_GET['password'];
	$email = $_GET['email'];
	$type = $_GET['type'];

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

	updateUsers($user);
	echo "User updated !";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<center>
	<form method="post" action="">
		<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
		        <fieldset>
			    <legend>Update</legend>	
				Id<br/><input type="text" name="id" value="<?= $id ; ?>"><br/>
				Username<br/><input type="text" name="username" value="<?= $username ; ?>"><br/>
			    Password<br/><input type="password" name="password" value="<?= $password ; ?>"><br/>
			    Email<br/><input type="text" name="email" value="<?= $email ; ?>"><br/>
			    Type<br/><select name="type"><br/><br/>
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