<?php
$con = mysqli_connect("localhost","root","");//connecting to database
mysqli_select_db($con,"fitnesscustomers");//selecting the database
session_start();
$data=new stdClass();
if(isset($_POST['submit'])){// storing the entered values by the user in the respective variables
	extract($_POST);
	$data->email=$email;
	$data->password=$password;
    $result = mysqli_query($con," SELECT * FROM  registration WHERE  email ='$email' and password='$password'");
    //print_r($result);
     $num_rows = mysqli_num_rows($result);
    print_r($num_rows);
if ($num_rows==true){
  $_SESSION['email'] = $email;
     header('Location: profile.php');
 }
 else{
 	echo " Login failure";
     header('Location: login.php');
 }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- style tag is used for styling the webpage-->
<style>

body{background-image:url('for.jpg');
background-repeat:no-repeat;
background-position:center;
background-size:cover;
margin-top:15%;}
footer{margin-left:80%;}
nav{margin-left:80%;}
h1{color:tomato;}
span{color:tomato;}
</style>


</head>

<body>
<h1>Login Form</h1><!-- h1 tag is used for placing the heading in the webpage-->
<header><!-- header tag is used as the header of the page--><nav><!-- nav tag is for placing navigation bars in the webpage-->
<button class="btn btn-basic"><a href="contact.html"><big>Contact us</big></a></button></nav></header>
<div class="container-fluid  "><!-- division tag is used for dividing the webpage-->
	<div class="container">
		<div class="row ">
			<div class="col-md-4 ">			
				<form method="POST" action="">
				<!-- form tag is uused for creting the form in the webpage-->
				<input type="text" name="email" class="form-control" placeholder="EMAIL ID" required><br>
				<!-- input type is used for creating a feild in the webpage-->
				<input type="password" name="password" class="form-control" placeholder="PASSWORD" pattern=".{3,10}" required ><br><br>
				<input type="submit" name="submit" class="btn btn-info" value=" LOGIN ">
			</form><br>
			
			<span>Want to create an account then </span><a href="index.php"> Sign Up </a>
<!-- a tag is used for creating a link-->			
			


			</div>
		</div>
	</div>
</div>
<!-- footer tag is used as footer of the website-->
<footer>FITNESS</footer>
</body>
</html>