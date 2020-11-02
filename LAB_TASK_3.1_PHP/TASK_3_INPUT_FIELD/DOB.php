<?php
    $data1= "";
    $data2= "";
    $data3= "";
if(isset($_REQUEST['submit'])){
	$dd = $_REQUEST['dd'];
	$mm = $_REQUEST['mm'];
	$yyyy = $_REQUEST['yyyy'];

	if($dd == "" && $mm == "" && $yyyy == ""){
			echo " field required...";
		}
	
    else{
			$data1= $dd;
			echo $_POST['dd'];
	        echo "/";
	
            $data2=$mm;
            echo $_POST['mm'];
	        echo "/";
	        
            $data3=$yyyy ;
            echo $_POST['yyyy'];
			
		}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Date of Birth Page</title>
</head>
<body>

	<form method="post">
		<fieldset>
			<legend><b>DATE OF BIRTH</b></legend>
			<b>dd</b><input type="text" name="dd" size="1" value=" <?=$data1 ?>">/
			<b>mm</b><input type="text" name="mm" size="1" value=" <?=$data2 ?>"> /
			<b>yyyy</b><input type="text" name="yyyy" size="3" value=" <?=$data3 ?>"> <br>
			<hr>
			<input type="submit" name="submit" value="Submit"> <br>
			</fieldset>
	</form>
</body>
</html>
