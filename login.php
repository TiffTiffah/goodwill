<?php
//start session
session_start();

include('db.php');

if(isset($_POST['submit']))
{

$username=$_POST['username'];
$password=$_POST['password'];



$sql = "SELECT * FROM `login` WHERE username = '$username' AND password1 = '$password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if($row ['username'] == $username && $row ['password1'] == $password)
{
    $_SESSION['username'] = $username;
	$_SESSION['id']=$pat_id;
     header("location:patientpanel.html");
    // echo"<script>setTimeout(()=>{alert('Welcome!')},500);</script>";
    // echo"<script>window.setTimeout(function() {window.location.href='patientpanel.html';},1000);</script>";
    
}

else{
    echo "<script>alert('Check your credentials')</script>";
    echo "<script>location.replace('login.php')</script>";

}

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>World wide health</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<header>
	<div class="logo">
			<img src="goodwl.png">
		</div>
		<div class="nav">
			<a href="index.html">Home</a>
			<a href="#">About</a>
			<a href="#">Contact Us</a>
		</div>
	</header>
	<form class="values" action="login.php" method="POST">
		<h2>Login</h2>
		<input type="text" name="username" placeholder="USERNAME" required>
		<!-- <br> -->
		<input type="password" name="password" placeholder="PASSWORD" required>
		<!-- <br> -->
		<input type="submit" name="submit" value="Sign-in" required>
		<!-- <br> -->
		<p><a href="signup.html">Create Account</a></p>
	</form>

	
</body>
</html>
