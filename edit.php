<?php
include("RagavDBConnection.php");
$edited=$_GET["eid"];
$sql_detail="SELECT Sno,Full_Name,Age,Gender,Mobile_No,Email_Id FROM User_Details WHERE Sno='{$edited}'";
$selectquery=mysqli_query($db,$sql_detail);
$userdetails=mysqli_fetch_array($selectquery);
//print_r($userdetails);

if($_POST)
{
    $Sno=$_POST['sno'];
    $Full_Name= $_POST['fullname'];
    $Age= $_POST['age'];
    $Gender= $_POST['gender'];
    $Mobile_No= $_POST['mobileno'];
    $Email_Id= $_POST['email'];
    
    $uq = mysqli_query($db,"UPDATE User_Details SET Full_Name='{$Full_Name}',Age='{$Age}',Gender='{$Gender}',Mobile_No='{$Mobile_No}',Email_Id='{$Email_Id}' WHERE Sno='{$Sno}'");
    
    if($uq)
    {
        header("location: RagavAdminPage.php");
    }
}

?>
<html>
    <head>
        
        <style>
            
            h1
            {
                margin-top:100px;
                text-align:center;
                color:red;
                font-size:60px;
            }
            
            form
		    {
		    margin-top: 0px;
			color: blue;
			font-size: 27px;
			align-content: center;
			align-items: center;
			margin-left: 400px;
			margin-right: 425px;
		    }
            
            label
		    {
			display: inline-block;
			width: 140px;
  			text-align: right;
  			font-family: roboto;
		    }
            
            .cnt
		    {
			width: 230px;
			height: 20px;
			padding-top: 15px;
			padding-bottom: 15px;
			padding-left: 5px;
			margin-left: 30px;
		    }
		    
		    .ragav
	 	    {
 	   		display: inline-block;
 	  	 	width: 20%;
 	   		border: none;
	   		color: #111;
	   		background-color: 5f83ff;
 	   		padding: 10px 10px;
 	   		font-size: 13px;
 	   		font-style:bold;
 	   		font-weight:bolder;
	   		cursor: pointer;
 	   		text-align: center;
 	   		margin-left: 240px;
		    }
		    
            
        </style>
        
    </head>
    <body>
        <h1>Editing Area</h1>
        <form  method="post">
            <input type="hidden" value="<?php echo $userdetails['Sno']; ?>" name="sno">
            <label>Full_Name :</label> <input type="text" class="cnt" value="<?php echo $userdetails['Full_Name'];?>" name="fullname">
            <br>
            <label>Age :</label> <input type="number" class="cnt" value="<?php echo $userdetails['Age']; ?>" name="age">
            <br>
            <label>Gender :</label> <input type="text" class="cnt" value="<?php echo $userdetails['Gender']; ?>" name="gender">
            <br>
            <label>Mobile No :</label> <input type="number" class="cnt" value="<?php echo  $userdetails['Mobile_No']; ?>" name="mobileno">
            <br>
            <label>Email Id :</label> <input type="text" class="cnt" value="<?php echo $userdetails['Email_Id']; ?>" name="email">
            <br><br>
            <input type="submit" class="ragav" value="Update">
            
        </form>
    </body>
</html>