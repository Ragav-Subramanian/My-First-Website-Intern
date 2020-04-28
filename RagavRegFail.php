<!DOCTYPE html>
<html>
<head>
	<title>Registration Failed! </title>

    <style>
        
        h1
        {
            text-align:center;
        }
        
    </style>

</head>

<body>

	<h1>Sorry! Registration Failed </h1>

	<?php 
	//include("RagavRegister.php");
	session_start();
	$name_error=$_SESSION['variable'];
	echo "<center>";
	print_r($name_error);
	echo "</center>";
	session_destroy();
	?>
	<br>
<center><font size="4"><a href="RagavRegistrationPage.php">Register Now!</a></center></font>

</body>
</html>