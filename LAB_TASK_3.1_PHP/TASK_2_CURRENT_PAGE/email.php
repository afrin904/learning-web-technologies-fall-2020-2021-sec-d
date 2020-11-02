<?php
if(isset($_REQUEST['submit'])){
     echo $_POST['email'];   
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
			<input type="submit" name="" value="Submit"> <br>
		</fieldset>
	</form>
</body>
</html>