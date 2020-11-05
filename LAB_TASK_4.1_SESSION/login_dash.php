<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>LOGGED IN DASHBOARD</title>
</head>
<body>

	<table width="900px" border="1" align="center">
		<tr colspan="3">
			<td width="100px">
				<img src="pic1.png" width="100px" height="100px" ></td>
				<td align="right">
				<h1>Logged in as <?php echo $_SESSION['uname']?></h1>
	             <a href="logout.php">Logout</a>
			</td>
		</tr>
		<tr height="200px">
			<td>
				<b>Account</b>
				<hr>
				<ul>
				<li><a href="login_dash">Dashboard</a></li>
				<li><a href="view_profile.php">View Profile</a></li>
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="change_profile_picture.php">Change Profile Picture</a></li>
				<li><a href="change_password.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
				</ul>
			</td>
			<td><h1>Welcome <?php echo $_SESSION['uname']?></h1></td>
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