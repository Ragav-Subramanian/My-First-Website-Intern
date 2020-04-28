<?php

include("RagavDBConnection.php"); // include the connection object from the DBConnection.php
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 $inName = $_POST["name"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[]
 $inFeedback = $_POST["feedback"];
 $stmt = $db->prepare("INSERT INTO Feedback(Name,Comments) VALUES(?, ?)"); 
 $stmt->bind_param("ss", $inName, $inFeedback); 
 $stmt->execute();
 $result = $stmt->affected_rows;
 $stmt -> close();
 $db -> close(); 
}

echo "<script>alert('Your Feedback have been submitted Succesfully!'); window.location = 'RagavUserProfile.php';</script>";


?>