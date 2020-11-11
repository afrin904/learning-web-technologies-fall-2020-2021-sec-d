<?php
	session_start();
	if(isset($_SESSION['flag']))
?>
<center>
	<form >
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="password" value="" /><br />
						New Password<br />
						<input type="password" name="password" value="" /><br />
						Retype New Password<br />
						<input type="password" name="password" value=""/>								
						<hr />
						<input type="submit" name="submit" value="Change" />     
						if{$_}
						<a href="user_home.php">Home</a>
						<a href="admin_home.php">Home</a>						
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>
<?php

	}else{
		header('location: login.php?msg=login_first');
	}

?>