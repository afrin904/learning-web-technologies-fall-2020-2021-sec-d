<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>CHANGE PASSWORD</title>
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
		<tr height="200px">
			<td>
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
			<legend><h1><b>CHANGE PASSWORD</b></h1></legend>
	    	
	    	  Current Password:<input type="Password" name="password" value=""><br>
	    	  <br>
	       
	    	  New Password:<input type="Password" name="password" value="" > <br>

	    	 Retype New Password: <input type="Password" name="password" value="" > 
	    	 <hr>
				<input type="submit" name="submit" value="submit">
		       
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