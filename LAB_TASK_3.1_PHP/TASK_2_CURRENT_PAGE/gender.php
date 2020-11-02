<!DOCTYPE html>
<html>
<head>
	<title>Gender Page</title>
</head>
<body>

	<form method="post">
		<fieldset>
			<legend><b>GENDER</b></legend>
			    <input type="radio" name="gender" value="male" > Male 
				<input type="radio" name="gender" value="female" > Female
				<input type="radio" name="gender" value="other" > Other <br>
				<hr>
				<input type="submit" name="submit" value="Submit"> <br>
		</fieldset>
		
	</form>
</body>
</html>

<?php
if(isset($_REQUEST['submit'])){
	
	
	if ($_REQUEST['gender']==" ")
	
		echo "Error";
	elseif ($_REQUEST['gender']=="male")
	
		echo "Male";
	elseif ($_REQUEST['gender']=="female")
	
		echo "Female";
	else
	
		echo "Other";
}
?>