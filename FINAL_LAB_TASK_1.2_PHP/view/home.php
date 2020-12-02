<?php
	require_once('../php/header.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home! <?php echo $_COOKIE['flag'];?></h1>
	<a href="../view/profile.php">Profile</a> |
	<a href="../php/insert.php">Create New User</a> |
	<a href="../view/userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>
</body>
</html>