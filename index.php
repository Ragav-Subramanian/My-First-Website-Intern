<!DOCTYPE html>

<html>
    
<head>
    
<title>  Ragav Solutions </title>

<style>

/* Style the tab */
.tab 
{
  overflow-y: hidden;
  border: 1px solid #ccc;
  background-color: grey;
}

/* Style th ebuttons inside the tab */
.tab button 
{
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover 
{
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active 
{
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent 
{
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

!h1 { color : red;     animation:blinkingText 1s infinite; }

p { color  : cyan;  }
	
	
@keyframes blinkingText
{
    0%{     color: #0000ff;    }
    20%{    color: #ff0000;    }
    40%{    color: #0000ff;    }
    60%{    color: #ff0000;    }
    80%{    color: #0000ff;    }
    100%{   color: #ff0000;    }
}

    	

*  { box-sizing: border-box; }

body { font-family: Verdana, sans-serif;  overflow:auto; background-color: #333; }

.mySlides { display: none; }

img { vertical-align: middle; padding-bottom: 20px;}

/* Slideshow container */
.slideshow-container 
{
  max-width: 1000px;
  position: relative;
  margin: auto;
  overflow: auto;
}


.active 
{
  background-color: #717171;
}

/* Fading animation */
.fade 
{
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade 
{
  from {opacity: .9 } 
  to {opacity: 1 }
}

@keyframes fade {
  from { opacity: .9 } 
  to   { opacity:  1 }
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) 
{
  .text { font-size: 11px }
}


</style>

</head>


<body>
<font color=cyan>
<marquee scrollamount="15">Heartful thanks to my family, friends and everyone who helped and guided me throughout the project. Without your support it is not possible to achieve this in this short period of time.....</marquee>
</font>
<br>

<div class="tab">
  <button class="tablinks" onclick="openDiv(event, 'Home')" id="defaultOpen">Home</button> 
  <button class="tablinks" onclick="openDiv(event, 'About')">About</button>
  <form action="RagavLoginPage.php" method="post">
   <button class="tablinks">Login</button>
  </form>
  <form method="post" action="RagavRegistrationPage.php">
   <button class="tablinks">Register</button>
  </form>
  <button class="tablinks" onclick="openDiv(event, 'Contact')">Contact</button>
</div>

<div id="Home" class="tabcontent">
<br>
 <div class="slideshow-container">
    <div class="mySlides fade">
     <img src="q3.jpeg" style="width:100%">
    </div>
    <div class="mySlides fade">
     <img src="q2.jpeg" style="width:100%">
    </div>
    <div class="mySlides fade">
     <img src="q1.jpeg" style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="push.gif" height=550 style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="pop.gif" height=550 style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="enqueue.gif" height=550 style="width:100%">
    </div>
    <div class="mySlides fade">
        <img src="dequeue.gif" height=550 style="width:100%">
    </div>
 </div>
 
 <br>
 
</div>

<div id="About" class="tabcontent">
    
    <center>
     
 

 <p> <font size="6">
     
This website creation idea evolved from the fact that I couldn't find efficient solutions to Data Structure related programming problems on the internet!<br>
My intuition helped me all the way to design this website.<br>
<br>
Here, we provide solutions to Data Structure and Object-Oriented Programming problems in any Language!<br>
Wait, in any programming language! XD<br>
<br><font  face = "Comic sans MS">
<i>Programming makes life simpler and more fun;<br>
Programming never ceases to interest people!<br>
</i>
</font>
<br>
It is my concern and pleasure to be helpful to all the co-programmers around the globe!
So, let us continue this journey of programming together!
 </font>
</div>

<div id="Contact" class="tabcontent">
  <p>
      <font size="5">
    Feel free to contact us any time when you face any sort of issues regarding the website...<br>
    We will solve your issues at the earliest..<br>
    <br>
    Email&nbsp;&nbsp;&nbsp;: ragavcoc@gmail.com
    <br>
    Mobile&nbsp; : 9003273057
    <br>
    </font>
  </p>
</div>


<script>

function openDiv(evt, Name) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(Name).style.display = "block";
  evt.currentTarget.className += " active";
}
  
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  //var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  //for (i = 0; i < dots.length; i++) {
    //dots[i].className = dots[i].className.replace(" active", "");
  //}
  slides[slideIndex-1].style.display = "block";  
  //dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3500); // Change image every 2 seconds
}


</script>


</body>
</html>