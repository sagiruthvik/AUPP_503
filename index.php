
<?php 
$conn= new mysqli("localhost","root","","fitnesscustomers");//connecting to database
$data=new stdClass();
if(isset($_POST['submit'])){// storing the entered values by the user in the respective variables
	extract($_POST);
	$data->username=$username;
	$data->phonenumber=$phonenumber;
	$data->email=$email;
	$data->password=$password;
	// $data->username=$username;
	//this is for validating confirm password and password are equal or not
	print_r($data);
	//inseting the stored data into the database
	$res=$conn->query("INSERT INTO `registration`(username,phonenumber,email,password)VALUES('$username','$phonenumber','$email','$password')");
	//die(mysqli_error($conn));
if($res==true){
	echo'success';
	header('location:login.php');
}else{

	echo "error";
}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- style tag is used for styling the webpage-->
<style>
body{background-image:url('bg.jpg');
background-repeat:no-repeat;
background-position:center;
background-size:cover;}
footer{margin-left:80%;}
nav{margin-left:80%;}
img{height:50%;
width:50%;}
</style>
<script>
function validateform()
{
var a=document.forms["Ruthvik"]["phonenumber"].value;
if(a=="" || a.length>10 || a.length<10)
{ alert("phone number is mandatory and should have 10 digits.");
return false;
}}
</script>
</head>

<body>
<h1>Registration Form</h1><!-- h1 tag is used for placing the heading in the webpage-->
<header><!-- header tag is used as the header of the page--><nav><!-- nav tag is for placing navigation bars in the webpage-->
<button class="btn btn-basic"><a href="contact.html"><big>Contact us</big></a></button></nav></header>
<div class="container-fluid "><!-- division tag is used for dividing the webpage-->
	<div class="container">
		<div class="row ">
		 <div class="col-md-5 ">
				<img src="logo.jpg" alt="LOGO"><br><br><!-- br tag is used for breaking the webpage-->
				<form name="Ruthvik" method="POST" action="index.php" onsubmit="return validateform();">
				<!-- form tag is uused for creting the form in the webpage-->
				<input type="text" name="username" class="form-control"  placeholder="USERNAME" required><br>
			    <!-- input type is used for creating a feild in the webpage-->
				<input type="number" name="phonenumber" class="form-control" placeholder="PHONENUMBER" required><br>
				<input type="email" name="email" class="form-control" placeholder="EMAIL ID" required><br>
			    <input type="password" name="password" class="form-control" placeholder="PASSWORD"  pattern=".{3,10}" required><br>			
				<br>
				<input type="submit" name="submit" class="btn btn-info" value="SIGN UP">
			</form>
			</div>
		</div>
	</div>
</div>
<!-- footer tag is used as footer of the website-->
<footer>
FITNESS</footer>
</body>
</html>