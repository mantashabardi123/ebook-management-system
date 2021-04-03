<?php
	session_start();
	//require_once "./functions/admin.php";
	$title = "Edit book";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_GET['bookisbn'])){
		$book_isbn = $_GET['bookisbn'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($book_isbn)){
		echo "Empty isbn! check again!";
		exit;
	}
	
	$ifImageFileUploaded = "0";
	$ifPdfFileUploaded = "0";
	if(count($_POST) > 0)
	{
		echo "<pre>";
		print_r($_POST);

		$book_image = $_FILES["book_image"]["tmp_name"];
		$book_image_name = basename($_FILES['book_image']['name']);
		
		$book_pdf = $_FILES["book_pdf"]["tmp_name"];
		$book_pdf_name = $_FILES["book_pdf"]["name"];

		$image_path = "upload/image/";
		$pdf_path = "upload/pdf/";
		$d = $image_path . $book_image_name;
		$d_path= $pdf_path . $book_pdf_name;

		$isbn = trim($_POST['book_isbn']);
		$isbn = mysqli_real_escape_string($conn, $isbn);
		
		$title = trim($_POST['book_title']);
		$title = mysqli_real_escape_string($conn, $title);

		$author = trim($_POST['book_author']);
		$author = mysqli_real_escape_string($conn, $author);
		
		$descr = trim($_POST['book_descr']);
		$descr = mysqli_real_escape_string($conn, $descr);
		
		$price = floatval(trim($_POST['book_price']));
		$price = mysqli_real_escape_string($conn, $price);
		
		$publisher = trim($_POST['book_publisher']);
		$publisher = mysqli_real_escape_string($conn, $publisher);
		$query = "update books set book_title = '$title',book_author = '$author', book_descr = '$descr',book_price = $price , publisherid = $publisher ";

							
		if(is_uploaded_file($_FILES["book_image"]["tmp_name"]))
		{
			echo "<br />Book Image is Uploaded";
			$ifImageFileUploaded = "1";
			$query .= ",book_image = '$book_image_name'";
		}
		else
		{
			echo "<br />Book image is not present";

		}

		if(is_uploaded_file($_FILES["book_pdf"]["tmp_name"]))
		{
			echo "<br />Book Pdf is Uploaded";
			$query .= ",book_pdf = '$book_pdf_name'";
			$ifPdfFileUploaded = "1";
		}
		else
		{
			echo "<br />Book Pdf is not present";
		}
		$query .= " where book_isbn = '$isbn'";

		$res = mysqli_query($conn,$query);
		if($res > 0)
		{
			if($ifImageFileUploaded == "1")
			{
				if(move_uploaded_file($book_image,$d))
				{
					echo "<br />Image File updated successfully";
				}
				else
				{
					echo "<br />Failed to Update Image File";
				}
			}
			if($ifPdfFileUploaded == "1")
			{
				if(move_uploaded_file($book_pdf,$d_path))
				{
					echo "<br />Pdf File updated successfully";
				}
				else
				{
					echo "<br />Failed to Update Pdf File";
				}
			}
			echo "<br />Data Updated";
		}
		
		//echo "<br/>Query ".$query;							
	}
	

	// get book data
	$query = "SELECT * FROM books WHERE book_isbn = '$book_isbn'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<div class="container">
		<a href="admin_book.php" class="btn btn-success">View Books</a>
		<a href="book_add.php" class="btn btn-primary">Add Book(s)</a>
	</div>
	<table class="table table-striped table-bordered">
	<form method="POST" action="admin_edit.php?bookisbn=<?php echo $_GET['bookisbn']; ?>" enctype="multipart/form-data">
		
			<tr>
				<th>ISBN</th>
				<td><input type="text" name="book_isbn" value="<?php echo $row['book_isbn'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="book_title" value="<?php echo $row['book_title'];?>" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="book_author" value="<?php echo $row['book_author'];?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" accept=".jpg,.png" name="book_image" ></td>
				<td><img src="upload/image/<?php echo $row['book_image']; ?>" width="70" height="70" /></td>
			
			</tr>
			<th>E-Book</th>
				<td><input type="file" accept=".pdf" name="book_pdf" ></td>
				<td><a href="upload/pdf/<?php echo $row['book_pdf']; ?> "> View Book</a></td>
			
			<tr>
				<th>Description</th>
				<td><textarea name="book_descr" value="<?php echo $row['book_descr'];?>" cols="40" rows="5"><?php echo $row['book_descr'];?></textarea>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="book_price" value="<?php echo $row['book_price'];?>" required></td>
			</tr>
			<tr>
				<th>Publisher</th>
				<td><input type="text" name="book_publisher" value="<?php echo $row['publisherid']; ?>" required></td>
			</tr>
			<tr>
				<th><input type="submit" name="save_change" value="Change" class="btn btn-primary"></th>
				<th><input type="reset" value="cancel" class="btn btn-default"></th>
		</tr>
	</form>
	</table>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require "./template/footer.php"
?>