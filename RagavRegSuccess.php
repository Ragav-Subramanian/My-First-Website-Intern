<!DOCTYPE HTML>
<html>
<title>Registered!!</title>

<head>
    
    <style>
        
        h1
        {
            padding-top:100px;
            text-align:center;
        }
        
        body
        {
           ! background-color:grey;
        }
        
        .blinking{
    animation:blinkingText 2s infinite;
}
@keyframes blinkingText{
    0%{     color: #00ccff;    }
    25%{    color: #0000ff;    }
    50%{    color: #ff0000;    }
    75%{    color: #4ddbff;    }
    100%{   color: #00ccff;   }
}
        
    </style>
    
</head>

<body>
 
<?php

echo "<h1>Registration Successful!!</h1>";

echo "<br/>";
echo "<center>";
echo " <h2>
     <span class='blinking'>Congratulations!</span><br>
     You have succesfully registered to our website!
     <br>
     Now,You can Login to our website and can use our resources..<br>
     
 </h2>";
 echo "</center>";
?> 

 <center>
 <font size=4>
 <a href='RagavLoginPage.php' style="color=blue">Please click this link to redirect to Login Page</a>
 </font>
</center>
</body>
</html>