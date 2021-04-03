<!doctype html>
<html lang="en"> 
<head>
<title>Login</title>
    <head> 
<script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="sign.css">
</head> 
	
	<!-- Required meta tags --> 
	<meta charset="utf-8"> 
	<meta name="viewport" content= 
		"width=device-width, initial-scale=1, shrink-to-fit=no"> 
<body>
	<body> 
	<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-6 col-xl-5">
          <div class="row">
            <div class="col text-center">
              <h1>Login</h1>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
<form action="" method="POST" >
<div class="form-group">
<label>Username</label> 
<input type="text" name="user" pattern="[a-zA-Z][a-zA-Z0-9-_.]{1,20}"
        title="Only letters (either case), numbers, hyphens, underscores, and periods.The username must start with a letter and must be between 1 and 20 characters long" class="form-control" autocomplete="off" required><br />
        </div>
<div class="form-group">
<label>Password</label>  
<input type="password" name="pass" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number" class="form-control" autocomplete="off" required ><br />	
</div>
<input type="submit" value="Login" name="submit" class="btn btn-lg btn btn-secondary"/>
<center><p>Dont have an account?<a href="signupcopy4.php">Signup</a></p></center>
</form>
<?php

if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'www_project') or die("cannot select DB");

	$result=mysqli_query($con, "SELECT * FROM signinfo WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysqli_num_rows($result);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($result))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	session_start();
	$_SESSION['sess_user']=$user;

	/* Redirect browser */
	header("Location:home.php");
	}
	} else {
	echo " <center><strong><font color=red size='5pt'> Invalid username or password! </font></strong></center>";
	}

} else {
	echo "All fields are required!";
}
}
?>

</body>
</html>