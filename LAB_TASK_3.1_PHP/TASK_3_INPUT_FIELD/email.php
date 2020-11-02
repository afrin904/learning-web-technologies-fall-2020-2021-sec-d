<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];
		
		if($email == ""){
			echo " field required...";
		}else{
			$data = $email;
			echo $data;
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
			<input type="email" name="email" value=" <?=$data ?>" > 
			<button title="hint:sample@example.com"><b>i</b></button><br>
			<hr>
			<input type="submit" name="submit" value="Submit"> <br>
		</fieldset>
	</form>
</body>
</html>

