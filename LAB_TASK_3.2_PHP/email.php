<?php
if(isset($_REQUEST['submit'])){
	$email=$_REQUEST['email'];
     
     if(empty($email))
        {
			echo "Please Enter Email Address";
		}
	  elseif(!preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/",$email))
	    {
			echo "Please Enter valid email addres "; 
		}
		 else {
			echo $_POST['email'];  
		}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email Page</title>
</head>
<body>

	<form method="post">
		<fieldset>
				<legend><b>EMAIL</b></legend>
			<input type="email" name="email" value="" > 
			<button title="hint:sample@example.com"><b>i</b></button><br>
			<hr>
			<input type="submit" name="submit" value="Submit"> <br>
		</fieldset>
	</form>
</body>
</html>

