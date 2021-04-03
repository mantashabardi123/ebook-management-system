<?php
	$title = "Administration section";
?>
	<!doctype html>
<html lang="en"> 
<head>
<title>Admin Login</title>
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
        <div class="col-12 col-md-4 col-lg-6 col-xl-5">
          <div class="row">
            <div class="col text-center">
              <h1>Login</h1>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
<form class="form-horizontal" method="post" action="admin_verify.php">
<div class="form-group">
<label>Username</label> 
<input type="text" name="name" class="form-control" autocomplete="off" required><br />
        </div>
<div class="form-group">
<label>Password</label>  
<input type="password" name="pass" class="form-control" autocomplete="off" required ><br />	
</div>
<input type="submit" value="Login" name="submit" class="btn btn-lg btn btn-secondary"/>
</form>