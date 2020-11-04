<?php
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		
		if(empty($name)){
			echo "Please Enter Your Name";
		}elseif (!preg_match("/^[a-zA-Z'-''.'\s]+$/",$name)) {
			echo "Please Enter Name as String and start with a letter ";
		}elseif (!preg_match("/^.{2}$/",$name)) {
			echo "Please Enter at least two words";
		}
		else{ echo $_POST['name'];}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend><b>NAME</b></legend>
			<input type="text" name="name" value=""><br>
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>