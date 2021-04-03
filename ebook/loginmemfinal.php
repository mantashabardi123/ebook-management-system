<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:loginfinal.php");
} else {
?>
<!doctype html>
<html>
<head>
<title>Welcome</title>
<style>
    body {
  background:rgba(255, 99, 71, 0.5);
  background-image:url('');
  background-repeat:no-repeat;
  background-size: cover;
  display: flex;
  height: 100vh;
  flex-direction: column;
}

*{
  font-family: serif;
  box-sizing: border-box;
}

</style>
</head>
<body>
<h2>Welcome, <?=$_SESSION['sess_user'];?>! <a href="logoutfinal.php">Logout</a></h2>
<p>
YOU HAVE SUCCESSFULLY REGISTERED AND LOGGED IN INTO YOUR ACCOUNT!!
</p>
</body>
</html>
<?php
}
?>
