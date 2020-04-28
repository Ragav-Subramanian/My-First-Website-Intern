<!DOCTYPE HTML>
<html>
<body>
<?php
 
include("RagavDBConnection.php"); // include the connection object from the DBConnection.php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $inFullname = $_POST["fullname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $inAge = $_POST["age"];
 $inGender = $_POST["gender"];
 $inMobileno = $_POST["mobileno"];
 $inEmail = $_POST["email"];
 $inUsername = $_POST["username"];
 $inPassword = $_POST["password"];
 
 //$encryptPassword = password_hash($inPassword, PASSWORD_DEFAULT);
 
 $sql_m="SELECT * FROM User_Details WHERE Mobile_No='$inMobileno'";
 $sql_e="SELECT * FROM User_Details WHERE Email_Id='$inEmail'";
 $sql_u="SELECT * FROM User_Details WHERE User_Name='$inUsername'";

 $res_m = mysqli_query($db, $sql_m);
 $res_e = mysqli_query($db, $sql_e);
 $res_u = mysqli_query($db, $sql_u);
 
 if(mysqli_num_rows($res_m) > 0)
 {
  	$name_error = "Sorry... The Mobile Number which you have entered is already Registered with another Account";
  	$_SESSION['variable']=$name_error;
	header("location: RagavRegFail.php"); 
 }
 else if(mysqli_num_rows($res_e) > 0)
 {
  	$name_error = "Sorry... The Email Id which you have entered is already Registered with another Account";
  	$_SESSION['variable']=$name_error;
  	header("location: RagavRegFail.php"); 
 }
 else if(mysqli_num_rows($res_u) > 0)
 {
  	$name_error = "Sorry... This Username is already taken";
  	$_SESSION['variable']=$name_error;
  	header("location: RagavRegFail.php"); 
 }
 else
{

 $stmt = $db->prepare("INSERT INTO User_Details(Full_Name, Age, Gender, Mobile_No, Email_Id, User_Name, Password) VALUES(?, ?, ?, ?, ?, ?, ?)"); //Fetching all the records with input credentials
 $stmt->bind_param("sisssss", $inFullname, $inAge, $inGender, $inMobileno, $inEmail, $inUsername, $inPassword); //Where s indicates string type. You can use i-integer, d-double
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
 
 if($result > 0)
 {
 header("location: RagavRegSuccess.php"); // user will be taken to the success page
 }
 else
 {
 echo "Oops. Something went wrong. Please try again"; 
 ?>
 <a href="RagavRegistrationPage.php">Try Registering Again</a>
 <?php 
 }
}
}
?>
</body> 
</html>