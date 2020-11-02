<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth Page</title>
</head>
<body>

	<form method="post">
		<fieldset>
			<legend><b>DATE OF BIRTH</b></legend>
			<b>dd</b><input type="text" name="dd" size="1">/
			<b>mm</b><input type="text" name="mm" size="1"> /
			<b>yyyy</b><input type="text" name="yyyy" size="3"> <br>
			<hr>
			<input type="submit" name="submit" value="Submit"> <br>
			</fieldset>
	</form>
</body>
</html>
<?php
if(isset($_REQUEST['submit'])){
	echo $_POST['dd'];
	echo "/";
	echo $_POST['mm'];
	echo "/";
	echo $_POST['yyyy'];
}
?>