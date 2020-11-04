<?php
	if(isset($_REQUEST['submit'])){
		$ui = $_REQUEST['user_id'];
		
		if(empty($ui))
		{
			echo "Please Enter Your User ID";
		}
		elseif (!preg_match("/^[0-9\s]+$/",$ui))
		 {
			echo "Please Enter Positive Number ";
		}
		if(empty($_REQUEST['picture']))
		{
			echo "Please Enter Picture";
		}
		
		else{ echo $ui;
			echo $_REQUEST['picture'];}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture Page</title>
</head>
<body>
	<form method="post">
		<fieldset>

			<legend><b>Profile Picture</b></legend>
			  <b>User ID</b> <input type="text" name="user_id"  > <br>
			  <b>Picture</b>
			  <button id="files" onclick="document.getElementById('file').click();return false">Browse..</button>
			  <input type="file" id="file" style="visibility: hidden;" name="picture"><br>
			  <hr>
			<input type="submit" name="submit" value="Submit"> <br>
			</fieldset>
	</form>
</body>
</html>