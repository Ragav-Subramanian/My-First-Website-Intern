<!DOCTYPE html>
<html>
<head>
	<title>Register and Enjoy!</title>

	<style>
		
		.ragav
	 	{
 	   		display: inline-block;
 	  	 	width: 30%;
 	   		border: none;
	   		background-color: #FFFF00;
  	   		color: red;
 	   		padding: 12px 12px;
 	   		font-size: 16px;
 	   		font-weight:bold;
	   		cursor: pointer;
 	   		text-align: center;
 	   		margin-left: 210px;
		}

		h1
		{
			color: red;
			size: 16;
		}

		label
		{
			display: inline-block;
			width: 140px;
  			text-align: right;
  			font-family: roboto;
		}

		form
		{
			color: blue;
			font-size: 18px;
			align-content: center;
			align-items: center;
			margin-left: 400px;
			margin-right: 425px;
			margin-top: 40px;
		}

		body
		{
			background-color: black;
		}

		input#cb
		{
			display: inline-block;
			margin-left: 165px;
		}

		input::placeholder
		{
			font-family: Roboto;
			font-style: italic;
			font-size: 18px;
		}

		.Container
		{
			width: 250px;
			height: 15px;
			padding-top: 10px;
			padding-bottom: 10px;
			margin-left: 20px;
		}

		.dropdown:before
		{
			content: "Gender: ";
			display: inline-block;
			width: 140px;
  			text-align: right;
  			font-family: roboto;
		}
		select
		{
			margin-left: 20px;
			width: 255px;
			height: 41px;
			font-family: Roboto;
			font-size: 18px;
			-webkit-appearance: list-box; 
		}
		option
		{
			text-align-last: right; 
		}
		
		footer
    	{	
    		padding-top: 5px;
    		padding-bottom: 5px;
    		clear: both;
    		color: yellow;
    		text-align: center;
    		position: fixed;
    		background-color: black;
    		bottom: 0;
    		width: 100%;
    	}
		

	</style>

</head>

<body>

<form name="register" method="post" action="RagavRegister.php">
   <fieldset>
   	<legend align="center"> Registration Form </legend>
	<br>   
	<label>Full Name:</label>
	<input type="text" name="fullname" class="Container" placeholder="  Enter your Full Name*"  pattern="[a-zA-Z ]*" minlength="3" title="Numbers and Special Characters are not allowed" maxlength="30" required autofocus>
	   		
	<br><br>

    <label>Age:</label>
	<input type="number" name="age" class="Container" placeholder="  Enter your Age*" min="13" max="150" required >
	   		
	<br><br>

	<div class="dropdown">
		<select name="gender" required >
			<option value="">Select your Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="transgender">Transgender</option>
		</select>
	</div>
	   		
	<br>

	<label>Mobile Number:</label>
	<input type="number" name="mobileno" class="Container" placeholder="  Enter your Mobile Number*" min="1111111111" max="10000000000" required>
	   		
	<br><br>

	 <label>Email ID:</label>
	 <input type="text" name="email" class="Container" placeholder="  Enter your Email ID*" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" maxlength="35" required>
	   		
	<br><br>

	<label>Username:</label>
	<input type="text" name="username" class="Container" placeholder="  Create a Username*" minlength="3" maxlength="10" required>
	   		
	<br><br>

	<label>Password:</label>
	<input type="password" name="password" class="Container" placeholder="  Create Password*" id="myInput" maxlength="15" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
	<br>
	<input id="cb" type="checkbox"  onclick="myFunction()" unchecked>Show Password

	<br><br>	

	<input type="submit" value="Register" class="ragav" onclick="validate()">
	<br><br>
</fieldset>
</form>

	<script>
		function myFunction() 
		{
  			var x = document.getElementById("myInput");
  			if (x.type === "password") 
  			{
    			x.type = "text";
  			} 	
  			else 
  			{
    		x.type = "password";
  			}
		}

	</script>
<footer>
	
	For Any Queries:- &emsp;  Mail : ragavcoc@gmail.com  &emsp; Mobile : 9003273057

</footer>
</body>
</html>