<!DOCTYPE html>
<html>
<head>
	<title>Blood Group Page</title>
</head>
<body>

	<form method="post">
			<fieldset>
			<legend><b>BLOOD GROUP</b></legend>
			<select name="blood_group" >
				<option selected disabled></option>
				<option value="A+">A+</option>
				<option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
			</select> <br>
			<hr>
            <input type="submit" name="submit" value="Submit"> <br>
        </fieldset>
	</form>
</body>
</html>

<?php
    if(isset($_REQUEST['submit'])){
	   echo $_REQUEST['blood_group'];
       }
?>