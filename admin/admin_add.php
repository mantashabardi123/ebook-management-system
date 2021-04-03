<?php
	session_start();
	//require_once "./functions/admin.php";
	$title = "Add new book";
	require "./template/header.php";
	include "./functions/database_functions.php";
	$conn = db_connect();
	

	if(isset($_POST['add']))
	{
		
		echo "<pre>";
		print_r($_POST);
		
		$isPdfFileValid = "1";
		$isImageFileValid = "1";
		
		$image_allowed = array('jpg','jpeg','png','JPG','JPEG','PNG');
		$pdf_allowed = array('pdf');
		
		$isbn = trim($_POST['isbn']);
		$isbn = mysqli_real_escape_string($conn, $isbn);
		
		$title = trim($_POST['title']);
		$title = mysqli_real_escape_string($conn, $title);

		$author = trim($_POST['author']);
		$author = mysqli_real_escape_string($conn, $author);
		
		$descr = trim($_POST['descr']);
		$descr = mysqli_real_escape_string($conn, $descr);
		
		$price = floatval(trim($_POST['price']));
		$price = mysqli_real_escape_string($conn, $price);
		
		$publisher = trim($_POST['publisher']);
		$publisher = mysqli_real_escape_string($conn, $publisher);
		
		$image_file = $_FILES['book_image']['name'];
		$pdf_file = $_FILES['book_pdf']['name'];
		
		$image_ext = pathinfo($image_file,PATHINFO_EXTENSION);
		$pdf_ext = pathinfo($pdf_file,PATHINFO_EXTENSION);
		
		if(!in_array($image_ext,$image_allowed))
		{
			$isImageFileValid = "0";
		}
		if(!in_array($pdf_ext,$pdf_allowed))
		{
			$isPdfFileValid = "0";
		}
		
		if(strlen($isbn) > 0 && strlen($title) > 0 && strlen($author) > 0 && strlen($descr) > 0 && strlen($price) > 0 &&strlen($publisher) > 0 && $isImageFileValid == "1" && $isPdfFileValid == "1")
		{
			// add image
			$findPub = "SELECT * FROM books WHERE book_isbn = '$isbn'";
			$findResult = mysqli_query($conn, $findPub);
			$count = mysqli_num_rows($findResult);
			echo "<br>Book Count: ".$cnt;
		
			if(!($count > 0)){
				
				$image = $_FILES['book_image']['name'];
				$file = rand(1000,100000)."-".basename($_FILES['book_pdf']['name']);
				
				//Adding new Publisher block
				$query = "INSERT INTO books VALUES ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "','" . $descr . "', '" . $file . "', '" . $price . "', '" . $publisher . "')";
				$result = mysqli_query($conn, $query);
				if(!$result){
					echo "Can't add new data";
					//exit;
				} else {
					//$row = mysqli_fetch_assoc($result);
					//$bookid = $row['publisherid'];
					//header("Location: admin_book.php");
					echo "<br>Book Inserted "."<br />";
				}
				//Adding new Publisher block
				
				//Adding new Book block
				$insertPub = "INSERT INTO publisher(publisher_name) VALUES ('$publisher')";
					$insertResult = mysqli_query($conn, $insertPub);
					if(!$insertResult){
						echo "Can't add new publisher " . mysqli_error($conn);
						//exit;
					}
					else {
					//$publisherid = mysql_insert_id($conn);
					$row = mysqli_fetch_assoc($findResult);
					$publisherid = $row['publisherid'];
					echo "Publisher Inserted ".$publisherid . "<br>"; 
				}
				//Adding new Book block
				
				//Adding new Image block
				//if(isset($_FILES['book_image']) && $_FILES['book_image']['name'] != ""){
					$image_tmp = $_FILES['book_image']['tmp_name'];
					$image = basename($_FILES['book_image']['name']);
					$uploadDirectory = "upload/";
					$d = $uploadDirectory . $image;
					
					if(is_dir($uploadDirectory))
					{
						echo "<br>Path is available<br>";
					}
					else
					{
						echo "<br>Path is not available<br>";
					}
					//echo "<br />Upload Directory: ".$uploadDirectory;	
					
					$file = rand(1000,100000)."-". basename($_FILES['book_pdf']['name']);
					$file_loc = $_FILES['book_pdf']['tmp_name'];
					 $file_size = $_FILES['book_pdf']['size'];
					 $file_type = $_FILES['book_pdf']['type'];
					 $folder="upload/";
					 
					 /* new file size in KB */
					 $new_size = $file_size/1024;  
					 /* new file size in KB */
					 
					 /* make file name in lower case */
					 $new_file_name = strtolower($file);
					 /* make file name in lower case */
					 
					 $final_file=str_replace(' ','-',$new_file_name);
					 $pdf_url = $folder.$final_file;
					 //echo "<br />". $pdf_url;
					
					
				
					if(move_uploaded_file($_FILES['book_pdf']['tmp_name'],$pdf_url))
					{
						//(move_uploaded_file($image, $d)) && );
						$sql="INSERT INTO image(file,type,size) VALUES('$final_file','$file_type','$new_size')";
						
						$res = mysqli_query($conn,$sql);
						
						  if($res > 0)
						  {
							  echo "<br />Books details uploaded successfully";
						  }
						  else
						  {
							  echo "<br />Error while uploading details.Please try again!!";
						  }
					}
					else
					{
						echo "<br />Failed to upload book details";
					}
				//}	
				//Adding new Image block					
				}		
			else{
			// find publisher and return pubid
			// if publisher is not in db, create new
				// insert into publisher table and return id
			echo "Book already exists";
			} 
	}
	else
	{
		//echo "Please enter details";
		if($isImageFileValid == "0" || $isPdfFileValid == "0")
		{
			echo "Please enter proper file details";
		}
		else
		{
			echo "Please enter details";
		}
	}
	}
?>
	<form method="post" action="admin_add.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>ISBN</th>
				<td><input type="text" name="isbn" required></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" required></td>
			</tr>
			<tr>
				<th>Author</th>
				<td><input type="text" name="author" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" name="book_image" required></td>
			</tr>
			<tr>
				<th>E-Book</th>
				<td><input type="file" name="book_pdf" required />
				</td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Price</th>
				<td><input type="text" name="price" required></td>
			</tr>
			<tr>
				<th>Publisher</th>
				<td><input type="text" name="publisher" required></td>
			</tr>
		</table>
		<input type="submit" name="add" value="Add new book" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>