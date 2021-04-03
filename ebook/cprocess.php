<?php 

if (isset($_POST['submit_data'])) {
	require_once('storydb.php');
	$title = mysqli_real_escape_string($con, $_POST['story_title']);
	$content = mysqli_real_escape_string($con, $_POST['story_content']);	
	$author = mysqli_real_escape_string($con, $_POST['author']);

if(!empty($title) || !empty($content)){

	$sql = "INSERT INTO story(story_title, story_content, author) VALUES('$title','$content', '$author');";
	$execute = mysqli_query($con,$sql);

	if(!$execute){
		echo "<br>Failed to submit the data";
		exit();
	}else{
		header('refresh:5; url=create.php');
		echo "<br>Story Published Successfully";
		exit();
}

}else{
	header('Location: create.php?emptyFields');
	exit();
}

}else{
	header('Location: create.php?invalidRequest');
	exit();
}











?>