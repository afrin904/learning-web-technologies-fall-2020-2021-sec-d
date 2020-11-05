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
				<b>Logged in as <a href="login_dash.php"><?php echo $_SESSION['uname']?></a>|
	             <a href="logout.php">Logout</a></b>
			</td>
		</tr>
		<tr>
			<td width="200px">
				<b>Account</b>
				<hr>
				<ul>
				<li><a href="login_dash.php">Dashboard</a></li>
				<li><a href="view_profile.php">View Profile</a></li>
				<li><a href="edit_profile.php">Edit Profile</a></li>
				<li><a href="profile_picture.php">Change Profile Picture</a></li>
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