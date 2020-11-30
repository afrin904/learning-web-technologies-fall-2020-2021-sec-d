<?php
	//include('header.php');
	//include_once('header.php');

	//require('header.php');
	require_once('../php/header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
</head>
<body>

	<h3>Profile Page</h3>
	
	<a href="../view/home.php">Back</a> |
	<a href="../php/logout.php">logout</a>
	<br><br>
	
	<img src="images/abc.jpg" width="100px" height="100px">
	<br>
	
	<form>
		Update Image: <input type="file" name="mypic">
		<input type="submit" name="submit" value="upload">
	</form>
</body>
</html>