<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="create.css">
</head>
<body>
	<div class="container">
		<form action="cprocess.php" method="POST">
			<div class="input-field">
				<label for="title">Enter title</label>
				<input type="text" name="story_title" id="title">
			</div>
			<textarea name="story_content" id="story_editor"></textarea>
			<div class="input-field">
				<label for="author">Written By...</label>
				<input type="text" name="author" id="author">
			</div>
			<input type="submit" class="publish-btn" name="submit_data" value="publish">
		</form>
		<a href="shortstories.php" target="_blank">Story</a>
	</div>
<script src="ckeditor/ckeditor.js"></script>
<script>
	CKEDITOR.replace('story_editor');
</script>
</body>
</html>