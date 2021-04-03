<?php 

require_once('storydb.php');
$sql = "SELECT * FROM story ORDER BY id DESC;";
$execute = mysqli_query($con,$sql);
$Postdata = mysqli_num_rows($execute);
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Stories</title>
	<link rel="stylesheet"  href="create.css">
</head>
<body>
	<div class="container">
	<?php 
		if($Postdata > 0){
			while($row = mysqli_fetch_array($execute)){
				$author = $row['author'];
				$timestamp = $row['date_publish'];
				$date = date('d M Y', strtotime($timestamp));
				$time = date('h:i A', strtotime($timestamp));

			 ?>
				<h1><a href="sdetails.php?id=<?php echo $row['id']; ?>"><?php echo $row['story_title']; ?></a></h1>
				<span>Written by<?php echo $author; ?></span>
				<span> Published on <?php echo $date;?> At: <?php echo $time; ?></span>
	<?php
			}
		}
	?>
</div>
</body>
</html>