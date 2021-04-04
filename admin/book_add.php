<?php
session_start();
//require_once "./functions/admin.php";
$title = "Add new book";
include "./template/header.php";
include "./functions/database_functions.php";
$conn = db_connect();
$msg = "";
$isImageFileValid = "1";
$isPdfFileValid = "1";
if (count($_POST) > 0) {
	//echo "<pre>";
	//print_r($_POST);
	$image_allowed = array('jpg', 'jpeg', 'png');
	$pdf_allowed = array('pdf');

	$isbn = trim($_POST['book_isbn']);
	$isbn = mysqli_real_escape_string($conn, $isbn);

	$title = trim($_POST['book_title']);
	$title = mysqli_real_escape_string($conn, $title);

	$author = trim($_POST['book_author']);
	$author = mysqli_real_escape_string($conn, $author);

	$bkcategory = trim($_POST['bkcategory']);
	$bkcategory = mysqli_real_escape_string($conn, $bkcategory);

	$bktype = trim($_POST['bktype']);
	$bktype = mysqli_real_escape_string($conn, $bktype);

	$descr = trim($_POST['book_description']);
	$descr = mysqli_real_escape_string($conn, $descr);

	$price = floatval(trim($_POST['book_price']));
	$price = mysqli_real_escape_string($conn, $price);

	$publisher = trim($_POST['book_publisher']);
	$publisher = mysqli_real_escape_string($conn, $publisher);

	$image_file = $_FILES['book_image']['name'];
	$pdf_file = $_FILES['book_pdf']['name'];

	$image_ext = pathinfo($image_file, PATHINFO_EXTENSION);
	$pdf_ext = pathinfo($pdf_file, PATHINFO_EXTENSION);

	if (!in_array($image_ext, $image_allowed)) {
		$isImageFileValid = "0";
	}
	if (!in_array($pdf_ext, $pdf_allowed)) {
		$isPdfFileValid = "0";
	}

	//echo "isImageFileValid ".$isImageFileValid . " isPdfFileValid ".$isPdfFileValid;

	if (strlen($isbn) > 0 && strlen($title) > 0 && strlen($author) > 0 && strlen($descr) > 0 && strlen($price) > 0 && strlen($publisher) > 0 && $isImageFileValid == "1" && $isPdfFileValid == "1") {
		// add image
		$findPub = "SELECT * FROM books WHERE book_isbn = '$isbn'";
		$findResult = mysqli_query($conn, $findPub);
		$count = mysqli_num_rows($findResult);
		//echo "<br>Book Count: ".$count;

		if (!($count > 0)) {
			$image = $_FILES['book_image']['name'];
			$file = rand(1000, 100000) . "-" . basename($_FILES['book_pdf']['name']);

			//Adding new Publisher block
			$query = "INSERT INTO `books` (book_isbn, book_title, book_author, book_image, book_descr, book_pdf,book_category, book_type, book_price, publisherid) VALUES ('$isbn', '$title', '$author', '$image','$descr', '$file', '$bkcategory', '$bktype', '$price', '$publisher')";
			$result = mysqli_query($conn, $query);
			if (!$result) {
				echo "Can't add new data";
				//exit;
			} else {
				//$row = mysqli_fetch_assoc($result);
				//$bookid = $row['publisherid'];
				$bookid = mysqli_insert_id($conn);
				echo "<br>Book Inserted Book Id" . $bookid . "<br />";
			}
			//Adding new Publisher block

			// //Adding new Book block
			// $insertPub = "INSERT INTO publisher(publisher_name) VALUES ('$publisher')";
			// 	$insertResult = mysqli_query($conn, $insertPub);
			// 	if(!$insertResult){
			// 		echo "Can't add new publisher " . mysqli_error($conn);
			// 		//exit;
			// 	}
			// 	else {
			// 	//$publisherid = mysql_insert_id($conn);
			// 	$row = mysqli_fetch_assoc($insertResult);
			// 	$publisherid = $row['publisherid'];
			// 	echo "Publisher Inserted ".$publisherid . "<br>"; 
			// }


			$book_image = $_FILES["book_image"]["tmp_name"];
			$book_image_name = basename($_FILES['book_image']['name']);

			$book_pdf = $_FILES["book_pdf"]["tmp_name"];
			$book_pdf_name = $file;

			$file_loc = $_FILES['book_pdf']['tmp_name'];
			$file_size = $_FILES['book_pdf']['size'];
			$file_type = $_FILES['book_pdf']['type'];

			//echo "<br /> Book Image " . $book_image;
			//echo "<br /> Book Image Name" . $book_image_name;

			$image_path = "upload/image/";
			$pdf_path = "upload/pdf/";
			$d = $image_path . $book_image_name;
			$d_path = $pdf_path . $book_pdf_name;


			/* new file size in KB */
			$new_size = $file_size / 1024;
			/* new file size in KB */

			/* make file name in lower case */
			$new_file_name = strtolower($file);
			/* make file name in lower case */

			$final_file = str_replace(' ', '-', $new_file_name);
			//echo "<br />". $pdf_url;

			if (is_dir($image_path) && is_dir($pdf_path)) {
				$msg .= "<br /> Upload path is available";
			} else {
				$msg .= "<br />Upload Path is not available";
			}

			if (move_uploaded_file($book_image, $d) && move_uploaded_file($book_pdf, $d_path)) {
				$msg .= "<br />The file " . basename($_FILES["book_image"]["name"]) . " and " . basename($_FILES["book_pdf"]["name"]) . " is uploaded to Directory";
			} else {
				$msg .= "<br />Error while uploading business profile";
			}
		} else {
			$msg .= "Book Already exists";
		}
	}
	echo $msg;
}
?>

<html>

<head>
	<title>Admin | Add Book</title>
</head>

<body>
	<div class="container" style="margin:10px;">
		<a href="admin_book.php" class="btn btn-success">View Books</a>
	</div>
	<table class="table table-striped table-bordered">
		<form enctype="multipart/form-data" method="POST">
			<tr>
				<th>ISBN</th>
				<td><input type="number" name="book_isbn" required></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="book_title" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="book_author" required></td>
			</tr>
			<tr>
				<th>Book Category</th>
				<td>
					<select name="bkcategory">
						<option disabled selected>-- Select Category --</option>
						<?php
						$records = mysqli_query($conn, "SELECT * FROM `category`");  // Use select query here 
						while ($data = mysqli_fetch_array($records)) {
							echo "<option value=" . $data['category_name'] . ">" . $data['category_name'] . "</option>";  // displaying data in option menu
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<th>Book Type</th>
				<td>
					<select name="bktype">
						<option value='free'>free</option>
						<option value='paid'>paid</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" accept=".jpg,.png" name="book_image" required></td>
			</tr>
			<tr>
				<th>E-Book</th>
				<td><input type="file" accept=".pdf" name="book_pdf" required></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="book_description" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="book_price" required></td>
			</tr>
			<tr>
				<th>Publisher</th>
				<td><input type="text" name="book_publisher" required></td>
			</tr>
			<tr>
				<th colspan="2"><input type="submit" name="submit" value="Add Book"></th>
			</tr>
		</form>
	</table>
</body>

</html>
<?php
if (isset($conn)) {
	mysqli_close($conn);
}
require_once "./template/footer.php";
?>