<!DOCTYPE html>
<html>
<head>
	<title>Degree Page</title>
</head>
<body>

	<form method="post">
		<fieldset>
			<legend><b>DEGREE</b></legend>
			<input type="checkbox" name="dept[]" value="SSC"><b> SSC</b>
			<input type="checkbox" name="dept[]" value="HSC"><b> HSC</b>
			<input type="checkbox" name="dept[]" value="BSc"><b> BSc</b>
			<input type="checkbox" name="dept[]" value="MSc"><b> MSc</b><br>
			<hr>
			<input type="submit" name="submit" value="Submit"> <br>
			</fieldset>
			
	</form>
</body>
</html>

<?php
if(isset($_REQUEST['submit'])){
	if (!empty($_POST["dept"]))
	{
		foreach ($_POST["dept"] as $key => $value) {
		echo $value."<br>";
		}
	}
}
?>