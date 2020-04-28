<!DOCTYPE HTML>
<html>
<body>
<?php 
/*header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");*/
 include_once("RagavDBConnection.php"); 
 session_start(); //always start a session in the beginning 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
 if (empty($_POST['username']) || empty($_POST['password'])) //Validating inputs using PHP code 
 { 
 echo 
 "Incorrect username or password";
 header("location: RagavLoginPage.php");//You will be sent to RagavLoginPage.php for re-login 
 } 
 
 $inUsername = $_POST["username"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 

 $inPassword = $_POST["password"]; 

 if($inUsername == 'admin' && $inPassword == 'password')
 {
 	header("location: RagavAdminPage.php");
 }
 else if($inUsername == 'admin' && $inPassword == 'feedback')
 {
        header("location: RagavFeedbackDetails.php");
 }
 else
 {

 $sql_fn="SELECT Full_Name FROM User_Details WHERE User_Name='$inUsername'";
 $res_fn = mysqli_query($db, $sql_fn);
 $val=mysqli_fetch_object($res_fn);

 $stmt= $db->prepare("SELECT User_Name, Password FROM User_Details WHERE User_Name= ? and Password=?"); //Fetching all the records with input credentials

 $stmt->bind_param("ss", $inUsername ,$inPassword); //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
 
 $stmt->execute();

 $stmt->bind_result($UsernameDB, $PasswordDB); // Binding i.e. mapping database results to new variables
   
 //Compare if the database has username and password entered by the user. 

 if ($stmt->fetch()) 

 {

 $_SESSION['username']=$val->Full_Name; //Storing the username value in session variable so that it can be retrieved on other pages

 header("location: RagavUserProfile.php"); // user will be taken to profile page

 }

 else

 {

    echo "Incorrect username or password"; 
?>
   <br>
   <a href="RagavLoginPage.php">Login</a>
<?php
 }
 } 
 } 
?>
 </body> 
 </html>