﻿<?php 
 
 session_start();
 $username = $_SESSION['username']; //retrieve the session variable
 
 unset($_SESSION['username']); //to remove session variable
 session_destroy(); //destroy the session
 header("location: RagavLoginPage.php"); //to redirect back to "Login.php" after logging out
 exit();
 
 if(!isset($_SESSION['username'])) //If user is not logged in then he cannot access the profile page
 {
 echo 'You are not logged in. <a href="RagavLoginPage.php">Click here</a> to log in.';
 header("location:RagavLoginPage.php");
 }
?>