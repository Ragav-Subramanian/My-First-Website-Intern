<!DOCTYPE html>
<html>
<head>
	<title>Feedbacks</title>

	<style>
		
		h1
		{
			text-align: center;
			font-family: Roboto;
		}

		table
		{
			font-family: arial;
			border-color: black;
			border: 1px solid black;
			border-collapse: separate;
			width: 100%;
		}

		th
		{
			border-color: black;
			border: 3px solid black;
			padding: 8px;
			text-align: center;
			font-size: 20px;
		}
		td
		{
			border-color: black;
			border: 3px solid black;
			padding: 8px;
			text-align: center;
		}

		div
		{
			color: blue;
			text-align: right;
		}

	</style>


</head>
<body>

	<?php
 session_start();
 //$name = $_SESSION['name']; //retrieve the session variable
 ?>
	<h1>Users Feedbacks</h1>

	<div><a href="RagavLogout.php">Log Out</a></div>

	<table border="1">
		
		<tr>
		    <th>F.No</th>
			<th>Name</th>
			<th>Feedbacks</th>
			<th>Action</th>
		</tr>
<tbody>

<?php
	include("RagavDBConnection.php");
	
	
	if(isset($_GET['did']))
	{
	  $deleteid=$_GET['did'];
	  mysqli_query($db,"DELETE FROM Feedback WHERE Fno='{$deleteid}'");
	
	 // echo "<script> alert('Record Deleted');</script>";
	
	}
	
	$sql = "SELECT Fno,Name,Comments FROM Feedback ";
	$result = $db->query($sql);
	if ($result->num_rows > 0) 
	{
	// output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Fno"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Comments"] . "</td><td><a href='RagavFeedbackDetails.php?did={$row["Fno"]}'>Delete</a></td></tr>";
	}
	echo "</table>";
	} 
	else 
	{ 
		echo "0 results"; 
	}
	$db->close();
?>

</tbody>
	</table>
</body>
</html>