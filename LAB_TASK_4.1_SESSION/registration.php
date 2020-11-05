<html>
<head>
	<title>REGISTRATION</title>
</head>
<body>

	<table width="900px" border="1" align="center">
		<tr colspan="3">
			<td width="100px">
				<img src="pic1.png" width="100px" height="100px" ></td>
				<td align="right">
				<a href="home_page.php"><b>HOME</b></a> | 
				<a href="login.php"><b>Lgin</b></a> | 
				<a href="registration.php"><b>Registration</b></a> 
			</td>
		</tr>
		<tr height="200px">
			<td colspan="3">
		<form>
			<fieldset>
			<legend><h1><b>REGISTRATION</b></h1></legend>
	    	
	    	  Name:<input type="text" name="name" value=""><br>
	    	  <hr>
	       
	    	  Email:<input type="email" name="email" value="" > 
			<button title="hint:sample@example.com"><b>i</b></button><br>
	        <hr>

	    	  User Name:<input type="text" name="uname" value=""><br>
	    	  <hr>
	    	  Password:<input type="Password" name="password" value=""><br>
	    	  <hr>
	   <fieldset>
	   	<legend>Gender</legend>
	    	   <input type="radio" name="gender" value="Male" > Male 
				<input type="radio" name="gender" value="Female" > Female
				<input type="radio" name="gender" value="Other"> Other <br>
				</fieldset>
	       <fieldset>
	       	<legend>Date of Birth</legend>
	    	  <b>dd</b><input type="text" name="dd" size="1" value="">/
			<b>mm</b><input type="text" name="mm" size="1" value=""> /
			<b>yyyy</b><input type="text" name="yyyy" size="3" value="">  <i>(dd/mm/yyyy)</i>
	        </fieldset>
	    
				<input type="submit" name="submit" value="Submit">
		        <input type="reset" name="reset" value="Reset"> <br>
      </fieldset>
	</form>	
</td>
	</tr>	
		<tr >
			<td colspan="3" align="center">
				copyright@2020
			</td>
		</tr>
	</table>
</body>
</html>
