<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>EDIT PROFILE</title>
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
			<legend><h1><b>EDIT PROFILE</b></h1></legend>
	    	
	    	  Name:<input type="text" name="name" value=" <?php echo $_SESSION['uname']?>"><br>
	    	  <hr>
	       
	    	  Email:<input type="email" name="email" value="<?php echo $_SESSION['email']?>" > 
			<button title="hint:sample@example.com"><b>i</b></button><br>
	        <hr>

	    	  Gender:  <input type="radio" name="gender" value="Male" <?php if($_SESSION['gender'] =="Male")
		{echo "checked";}?>> Male 
				<input type="radio" name="gender" value="Female" <?php if($_SESSION['gender'] =="Female")
		{echo "checked";}?> > Female
				<input type="radio" name="gender" value="Other" <?php if($_SESSION['gender']  =="Other")
		{echo "checked";}?>> Other <br>
				<hr>
				
	       Date of Birth:<input type="text" name="dob"  value="<?php echo $_SESSION['dd']?>/<?php echo $_SESSION['mm']?>/<?php echo $_SESSION['yyyy']?>">
			  <i>(dd/mm/yyyy)</i><br>
	    
				<input type="submit" name="submit" value="Submit">
		       
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