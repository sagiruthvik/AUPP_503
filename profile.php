<?php
session_start();
if(!isset($_SESSION["email"])){//carrying the email to next page
header("Location: login.php");
exit(); }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Fitness Customers</title>
<!-- style tag is used for styling the webpage-->
<style>
body{background-color:grey;
color:black;}
img{height:30%;
width:30%;}
h2{align:center;}
</style>
</head>
<body>
<h2> Fitness Center</h2><!-- h2 tag is used for placing the heading in the webpage-->
<div class="form"><!-- division tag is used for dividing the webpage-->
<p>Welcome to Fitness Customers<h4><?php echo $_SESSION['email'];?></h4>You have successfully loged in this website
named Fitness Center which was started by Kane Williamson in 1999.This company has different branches all over Australia.
This company has different instruments in all the branches and very experienced trainers through which the customers can
be fit.</p>
<h1>These are our Pacakages provided in the Fitness Center</h1><!-- h1 tag is used for placing the heading in the webpage-->
<p> 
<img src="pacakages.png" alt="PACAKAGES"><!-- img tag is used for placing the images in the webpage-->


<button><a href="logout.php">Logout</a></button><!-- a tag is used for creating a link-->
</div>
</body>
</html>