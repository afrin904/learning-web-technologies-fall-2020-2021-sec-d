<?php
    echo "<h2>Your Input:</h2>";
    $gender ="";

    $data1= "";
    $data2= "";
    $data3= "";
	if(isset($_REQUEST['submit'])){
		$name = $_REQUEST['name'];
		$email=$_REQUEST['email'];
		$gender = $_REQUEST['gender'];
		$dd = $_REQUEST['dd'];
	    $mm = $_REQUEST['mm'];
	    $yyyy = $_REQUEST['yyyy'];
		
		if(empty($name))
		{
			echo "Please Enter Your Name";
			echo "<br>";
		}
		elseif (!preg_match("/^[a-zA-Z'-''.'\s]+$/",$name))
		 {
			echo "Please Enter Name as String and start with a letter";
			echo "<br>";
		}	
		
		else{ echo $name;
			echo "<br>";}
     if(empty($email))
        {
			echo "Please Enter Email Address";
		}
	  elseif(!preg_match("/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/",$email))
	    {
			echo "Please Enter valid email addres "; 
		}
		 else {
			echo $email;
			echo "<br>";  
		}

	if ($gender =="Male" || $gender =="Female" || $gender =="Other" && !empty($gender))
	{
		echo $gender;
		echo "<br>";
	}
	else{
		echo "At least one of them has to be selected";
	}

	if($dd == "" && $mm == "" && $yyyy == ""){
			echo "Please Enter Date";
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
            echo "<br>";		
		}

    	if(!empty($_REQUEST['blood_group']))
    	{
	   echo $_REQUEST['blood_group'];
	   echo "<br>";
	}
	   else {
	   	echo "Please Select Blood Group";
	   }
	if (!empty($_POST["dept"]))
	{
		foreach ($_POST["dept"] as $key => $value) {
		echo $value."<br>";
		}
	}
	else{
		echo "At least one of them has to be selected ";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PERSON PROFILE</title>
</head>
<body>
	<form method="post">
     <table width="500px" border="1" align="center">
	    <tr>
			<td width="60px" colspan="3" align="center">
				<h1><b>PERSON PROFILE</b></h1>
			</td>
	    </tr>
	    <tr>
	    	<td width="30px" height="30px"><b>Name</b></td>
	    	<td width="70px" >
	    	  <input type="text" name="name" value=""><br>
	        </td>
	        <td width="30px"></td>
		</tr>
		 <tr>
	    	<td width="30px" height="30px"><b>Email</b></td>
	    	<td width="70px">
	    	  <input type="email" name="email" value="" > 
			<button title="hint:sample@example.com"><b>i</b></button><br>
	        </td>
	        <td width="30px"></td>
		</tr>
		<tr>
	    	<td width="30px" height="30px"><b>Gender</b></td>
	    	<td width="70px" >
	    	   <input type="radio" name="gender" value="Male" <?php if($gender =="Male")
		{echo "checked";}?>> Male 
				<input type="radio" name="gender" value="Female" <?php if($gender =="Female")
		{echo "checked";}?> > Female
				<input type="radio" name="gender" value="Other" <?php if($gender =="Other")
		{echo "checked";}?>> Other <br>
	        </td>
	        <td width="30px"></td>
		</tr>
		<tr>
	    	<td width="30px" height="30px"><b>Date of Birth</b></td>
	    	<td width="70px">
	    	  <b>dd</b><input type="text" name="dd" size="1" value=" <?=$data1 ?>">/
			<b>mm</b><input type="text" name="mm" size="1" value=" <?=$data2 ?>"> /
			<b>yyyy</b><input type="text" name="yyyy" size="3" value=" <?=$data3 ?>">  <i>(dd/mm/yyyy)</i>
	        </td>
	         <td width="30px"></td>
		</tr>
		<tr>
	    	<td width="30px" height="30px"><b>Blood Group </b></td>
	    	<td width="70px" >
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
	        </td>
	         <td width="30px"></td>
		</tr>
		<tr>
	    	<td   width="30px" height="30px"><b>Degree</b></td>
	    	<td width="70px">
	    	   <input type="checkbox" name="dept[]" value="SSC"><b> SSC</b>
			<input type="checkbox" name="dept[]" value="HSC"><b> HSC</b>
			<input type="checkbox" name="dept[]" value="BSc"><b> BSc</b>
			<input type="checkbox" name="dept[]" value="MSc"><b> MSc</b><br>
			
	        </td>
	       <td width="30px"></td>
		</tr>
		<tr>
	    	<td height="30px"><b>Photo</b></td>
	    	<td width="70px" colspan="2">
	    	    <input type="file" name="picture"  > 
	    	</td>
		</tr>
		<tr>
			<td width="60px" height="30px" colspan="3">
			</td>
	    </tr>
		<tr>
			<td width="60px" height="30px" colspan="3" align="right">
				<input type="submit" name="submit" value="Submit">
		        <input type="reset" name="reset" value="Reset"> <br>
			</td>
	    </tr>
      </table>
	</form>
</body>
</html>
