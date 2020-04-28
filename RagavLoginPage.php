<!DOCTYPE HTML>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome to Login Page</title>


<style>

.ragav
	 {
 	   display: inline-block;
 	   width: 12%;
 	   border: none;
	   background-color: #4CAF50;
  	   color: white;
 	   padding: 6px 18px;
 	   font-size: 17px;
 	   font-weight:bold;
	   cursor: pointer;
 	   text-align: center;
 	}



body 
{
    padding-top: 100px;
    background-color: grey;
}

h3 { color : white; }

form 
{ 
    padding-top : 10px; 
    text-align : center; 
    font-size : 30px; 
    border-radius:25px; 
    background-color:#003cb3; 
    margin-left:350px;
    margin-right:350px;
}

input 
{ 
    padding-left:10px; 
    width : 200px; 
    height : 40px; 
    font-size : 20px; 
    font-family: Roboto; 
    font-style:italic; 
    border-radius:25px;
}

input::placeholder
{
	font-family:Roboto;
	font-style:italic;
	font-size:22px;
}


label
{
    color:white;
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

<script type="text/javascript">

function validate()
{
var username = document.login.username.value;
var password = document.login.password.value;
 
if (username==null || username=="")
{
  alert("Username can't be blank");
  return false;
}
else if (password==null || password=="")
{
  alert("password can't be blank");
  return false;
}
}
</script>

</head>

<body>


<br>

 <form name="login" method="post" action="RagavLogin.php" onsubmit="return validate();">
 	
 	<h3>
            Enter Your Login Creditentials!
    </h3>
    
    <br>
    
   	 <label ><strong>Username    : </strong> </label><input type="text" name="username" placeholder=" Username*"  autofocus ><br><br>
     <label><strong>Password    :  </strong></label><input type="password" name="password"  placeholder="  Password*"><br><br>
   	
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="submit" value="Login" id="btn" class="ragav">
    </font>
    <br><br>
 </form>
 
</body>
</html>