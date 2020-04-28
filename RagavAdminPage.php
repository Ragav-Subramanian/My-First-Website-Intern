<!DOCTYPE html>
<html>
<head>
	<title>Administrator Login</title>

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

        a#frst
        {
            float: right;
            padding-bottom: 10px;
        }
	</style>


</head>
<body>

	<?php
 session_start();
// $username = $_SESSION['username']; //retrieve the session variable
 ?>
	<h1>User Details</h1>

    <div>
        
        <form method="post" action="RagavAdminPage.php">
            
            <input type="hidden" name="sbox" placeholder="Search here" required>
            
            <input type="hidden" name="search" value="Search">
            
        </form>
        
        <a href="RagavLogout.php" id="frst">Log Out</a>
        
    </div>
	
	<br>

	<table border="1">
		
		<tr>
			<th>S.No</th>
			<th>Full Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Mobile No</th>			
			<th>Email Id</th>
			<th>User Name</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
<tbody>

<?php
	include("RagavDBConnection.php");
	
	if(isset($_GET['did']))
	{
	  $deleteid=$_GET['did'];
	  mysqli_query($db,"DELETE FROM User_Details WHERE Sno='{$deleteid}'");
	
	 // echo "<script> alert('Record Deleted');</script>";
	
	}
	
	$sql = "SELECT Sno,Full_Name,Age,Gender,Mobile_No,Email_Id,User_Name,Password FROM User_Details";
	$result = $db->query($sql);
	if ($result->num_rows > 0) 
	{
	// output data of each row
	while($row = $result->fetch_assoc()) 
	{
		echo "<tr><td>" . $row["Sno"] . "</td><td>" . $row["Full_Name"]. "</td>  <td>" . $row["Age"] . "</td>  <td>" . $row["Gender"]. "</td>  <td>" . $row["Mobile_No"] . "</td>  <td>" . $row["Email_Id"] . "</td>  <td>" . $row["User_Name"] . "</td>  <td>" . $row["Password"] . "</td> <td><a href='edit.php?eid={$row["Sno"]}'>Edit</a> | <a href='RagavAdminPage.php?did={$row["Sno"]}'>Delete</td> </tr>";
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