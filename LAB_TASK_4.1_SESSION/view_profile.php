<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>VIEW PROFILE</title>
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
		<tr width="200px">
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
			<td>
				<form>
					<fieldset>
						<legend><b>PROFILE</b></legend>
						<b>Name:</b> <?php echo $_SESSION['uname']?><hr>
						<table align="right">
							<tr >
								<td><img src="pic2.png" width="100px" height="100px" align="right"><br>
                         <a href="profile_picture.php">Change</a><br></td>
							</tr>
						</table>
						<b>Email:</b> <?php echo $_SESSION['email']?><hr>
						<b>Gender:</b> <?php echo $_SESSION['gender']?><hr>
						<b>Date of Birth:</b><?php echo $_SESSION['dd']?>/<?php echo $_SESSION['mm']?>/<?php echo $_SESSION['yyyy']?><hr>

						<a href="edit_profile.php">Edit Profile</a>
            </td>
					</fieldset>
				</form>
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