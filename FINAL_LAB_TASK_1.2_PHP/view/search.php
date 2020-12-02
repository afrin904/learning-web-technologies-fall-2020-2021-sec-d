<?php
    require_once('../php/header.php');
	require_once('../models/usersService.php');

	 $id = $_GET['id'];
    $name = $_GET['name'];
    $username = $_GET['username'];
	$password = $_GET['password'];
	$contactno = $_GET['contactno'];
	
	if(isset($_REQUEST['submit'])){

		$id =$_REQUEST['id'];
		$name = $_REQUEST['name'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$contactno = $_REQUEST['contactno'];
		
		$user = [
			    'id' => $id,
			    'name'=> $name,
				'username'=> $username,
				'password'=> $password,
				'contactno'=>$contactno	
			];

	searchUsers($id);
	echo "User updated !";

}

   

?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<center>
	<form method="post" action="">
		<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
		        <fieldset>
			    <legend>Search</legend>	
				Id<br/><input type="text" name="id" value="<?= $id ; ?>"><br/>
				Name<br/><input type="text" name="name" value="<?= $name ; ?>"><br/>
				Username<br/><input type="text" name="username" value="<?= $username ; ?>"><br/>
			    Password<br/><input type="password" name="password" value="<?= $password ; ?>"><br/>
			    Contact Number<br/><input type="text" name="contactno" value="<?= $contactno ; ?>"><br/>
			     <br/><hr><hr>
					<input type="submit" name="submit" value="Search">
		        </fieldset>
	        </td>
        </tr>
		</table>
	</form>
	                <a href="../view/userlist.php">Back</a>
	</center>
</body>
</html>