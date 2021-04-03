<?php 
$con = mysqli_connect('localhost','root');

if ($con) {
	echo "Connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con, 'contactus');
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$query = " insert into userinfo (name, email, comment)
 values ('$name', '$email' ,'$comment') ";
echo "$query";

mysqli_query($con, $query);

?>