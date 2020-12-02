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
	<a href="../view/registration.php">Register Employees</a> |
	<a href="../view/search.php">Search Employees</a> |
	<a href="../view/userlist.php">User List</a> |
	<a href="../php/logout.php">logout</a>
</body>
</html>