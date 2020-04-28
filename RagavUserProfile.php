<html>
<title>UserProfile</title>
<head>

	<style>
		
		header
		{
			width: 100%;
			padding: 18px 10px;
			text-align: center;
			font-weight: bold;
			font-family: arial;
			font-size: 30px;
		}

		body
		{
			background-color: grey;
			overflow: hidden;
		}
				
		.navbar 
		{
  			overflow: hidden;
  			background-color: #333;
		}

		.navbar a 
		{
  			float: left;
  			font-size: 16px;
  			color: white;
  			text-align: center;
  			padding: 14px 20px;
  			text-decoration: none;
  			overflow:hidden;
		}

		.dropdown 
		{
  			float: left;
  			overflow: hidden;
		}

		.dropdown .dropbtn 
		{
		    font-size: 16px;  
  			border: none;
  			outline: none;
  			color: white;
  			padding: 14px 20px;
  			background-color: inherit;
  			font-family: inherit;
  			margin: 0;
		}

		.navbar a:hover, .dropdown:hover .dropbtn 
		{
  			background-color: red;
		}
        
        .active
        {
            background-color: green;
        }
        
		.dropdown-content 
		{
  			display: none;
  			position: absolute;
  			background-color: #f9f9f9;
  			min-width: 160px;
  			box-shadow: 0px 12px 16px 0px rgba(0,0,0,0.2);
  			z-index: 1;
		}

		.dropdown-content a 
		{
  			float: none;
  			color: black;
  			padding: 12px 16px;
  			text-decoration: none;
  			display: block;
  			text-align: center;
		}

		.dropdown-content a:hover 
		{
 			background-color: #ddd;
		}

		.dropdown:hover .dropdown-content 
		{
  			display: block;
  		}
  		
  		textarea
  		{   
  		    
  		    resize:none;
  		    font-family: Roboto;
			font-style: italic;
			font-size: 18px;
			padding-left:10px;
			padding-top:10px;
			padding-bottom:10px;
			padding-right:10px;
			
			
  		}
  		
  		textarea::placeholder
		{
			font-family: Roboto;
			font-style: italic;
			font-size: 18px;

		}
        
        .btn
        {
            display:inline-block;
            content:right;
            padding:4px 6px;
        }
        
        
        fieldset
        {
            margin-left:370px;
            margin-right:420px;
            padding:10px; 
            width:250px; 
            line-height:1.4;
           
        }
        
  		p
  		{
  			font-family: inherit;
  			font-size: 30px;
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

</head>
<body>
 <?php
 session_start();
 $username = $_SESSION['username']; //retrieve the session variable
 ?>
 
 <header>Welcome <?php echo $username ?> </header>

 <div class="navbar">
  <a href="RagavUserProfile.php" class="active">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Stack</button>
    <div class="dropdown-content">
      <a href="StackArray.txt">Array Implementation</a>
      <a href="StackADT.txt">Stack ADT(JAVA)</a>
      <a href="StackLinkedList.txt">Linked List Implementation</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">Queue</button>
    <div class="dropdown-content">
      <a href="QueueArray.txt">Array Implementation</a>
      <a href="QueueLinkedList.txt">Linked List Implementation</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Linked Lists</button>
    <div class="dropdown-content">
      <a href="SinglyLinkedList.txt">Singly Linked List</a>
      <a href="PolynomialAddition.txt">Addition of Polynomials</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Trees</button>
    <div class="dropdown-content">
      <a href="BinaryTree.txt">Binary Tree</a>
      <a href="BinarySearchTree.txt">Binary Search Tree</a>
      <a href="AVLTree.txt">AVL Tree</a>
      <a href="HeapTreeArrayImplementation.txt">Heap Tree</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Graph Traversals</button>
    <div class="dropdown-content">
      <a href="BFS.txt">Breadth First Search(BFS)</a>
      <a href="DFS.txt">Depth First Search(DFS)</a>
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">Sorting</button>
    <div class="dropdown-content">
      <a href="MergeSort.txt">Merge Sort</a>
      <a href="QuickSort.txt">Quick Sort</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Applications of Stack</button>
    <div class="dropdown-content">
      <a href="InfixToPostfixExpression.txt">Infix to Postfix Conversion</a>
      <a href="EvaluationofPostfixExpression.txt">Postfix Evaluation</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Applications of Queue</button>
    <div class="dropdown-content">
      <a href="FCFSScheduling.txt">FCFS Scheduling</a>
      <a href="#">Soon...</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Hashing</button>
    <div class="dropdown-content">
      <a href="HashingLinearProbing.txt">Linear Probing</a>
      <a href="HashingSeparateChainingResizable.txt">Separate Chaining(Resizable)</a>
    </div>
  </div>

  <div style="float: right">
  	<a href="RagavLogout.php">Logout</a></li><!-- calling RagavLogout.php to destroy the session -->
  </div>
</div>
  
 <?php
  if(!isset($_SESSION['username'])) //If user is not logged in then he cannot access the profile page
  {
 	//echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
 	header("location:RagavLoginPage.php");
  }
 ?>
 <br>
 <p>
    This website is a platform for providing the best solutions for your queries in Data Structures and Object-Oriented Programming.
    <br><br>
    Your problem of desire can be selected from the above given menu bar in particular sections.
    <br><br>
To get the solutions of your problem or if you have any confusions/doubts with the given solution you can feel free to contact us...Our Team will Solve your query within a day of time!
<fieldset align="center">
    
     <legend align="center" ><b><i>Feedback</i></b></legend>
     <form method="post" action="RagavFeedback.php">
         <input type="hidden" name="name" value="<?php echo $username;?>">
         <textarea name="feedback" cols="60" rows="4" placeholder="Please...Give your valuable feedback here!" required></textarea>
         <br>
         <input type="submit" class="btn" name="submit">
     </form>
 </fieldset>
<footer>

	Contact Details:- &emsp;  Mail : ragavcoc@gmail.com  &emsp; Mobile : 9003273057

</footer>

</body>
</html>