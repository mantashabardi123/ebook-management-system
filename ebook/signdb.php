<?php 
$con = mysqli_connect('localhost','root','','www_project');

if ($con) {
	echo "<center><strong><font color=green size='5pt'>Signup successful!</font></strong></center>";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'signup');
$username = $_POST['username'];
$email = $_POST['email'];
$comment = $_POST['password'];

$query = " INSERT INTO signinfo (username, email, password)
 VALUES ('$username', '$email' ,'$comment') ";

echo "";


mysqli_query($con, $query);

?>