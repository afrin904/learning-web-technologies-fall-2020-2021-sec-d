<?php
    $gender ="";
if(isset($_REQUEST['submit'])){
	$gender = $_REQUEST['gender'];
	
	if ($gender =="Male" || $gender =="Female" || $gender =="Other")
		echo $gender;
	else
	
		echo "Error";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gender Page</title>
</head>
<body>

	<form method="post">
		<fieldset>
			<legend><b>GENDER</b></legend>
			    <input type="radio" name="gender" value="Male" <?php if($gender =="Male")
		{echo "checked";}?>> Male 
				<input type="radio" name="gender" value="Female" <?php if($gender =="Female")
		{echo "checked";}?> > Female
				<input type="radio" name="gender" value="Other" <?php if($gender =="Other")
		{echo "checked";}?>> Other <br>
				<hr>
				<input type="submit" name="submit" value="Submit"> <br>
		</fieldset>
		
	</form>
</body>
</html>
