<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>Home Page, <?php echo $_COOKIE['flag'];?></title>
</head>
<body>

	<table width="900px" border="1" align="center">
		<tr colspan="3">
			<td width="100px">
				<img src="../assets/pic1.png" width="100px" height="100px" ></td>
				<td align="right">
				<b>Logged in as <?php echo $_SESSION['uname']?>!|
	            <b><a href="profile.php">Profile</a> <b>|
	            <b><a href="../php/logout.php">Logout</a></b>

				
			</td>
		</tr>
		<tr height="200px">
			<td colspan="3" align="left">
				<b>Welcome <?php echo $_SESSION['uname']?>!<br>
				
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

<?php

	}else{
		header('location: login.php?msg=login_first');
	}

?>