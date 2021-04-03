<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Details</title>
	<link rel="stylesheet"  href="create.css">
</head>
<body>
	<?php
		if (isset($_GET['id'])) {
			require_once ('storydb.php');
			$auth_id = mysqli_real_escape_string($con,$_GET['id']);
			$sql = "SELECT * FROM story WHERE id = $auth_id";
			$execute = mysqli_query($con,$sql);
			$post = mysqli_fetch_assoc($execute);

			if ($auth_id != $post['id']) {
				header('refresh:3; url=shortstories.php');
				echo "That id does not exist on our server";
				exit();
			}
		}else{
			header('Location: shortstories.php');
			exit();
		}

	?>
	<div class="container">
		
	<h1><?php echo $post['story_title']; ?></h1>

	<div class="content">
		<?php echo $post['story_content']; ?>
	</div>
	<div>
		<span>Written By &nbsp<b><?php echo $post['author']; ?></b></span>
	</div>
</div>

</body>
</html>