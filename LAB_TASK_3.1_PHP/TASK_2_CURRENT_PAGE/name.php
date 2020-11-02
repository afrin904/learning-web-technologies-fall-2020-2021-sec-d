<?php
if(isset($_REQUEST['submit'])){
     echo $_POST['name'];
   
}
?>

</html><!DOCTYPE html>
<html>
<head>
	<title>Name Page</title>
</head>
<body>
	<form method="post">
			<fieldset>
				<legend><b>NAME</b></legend>
			
			<input type="text" name="name" value="" > <br>
			<hr>
			<input type="submit" name="submit" value="Submit"> <br>
			</fieldset>
	</form>
</body>
</html>