<?php
	session_start();
	//require_once "./functions/admin.php";
	$title = "List book";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	
	if(count($_GET) > 0)
	{
		if($_GET['c'] == 'd')
		{
			$isbn = $_GET['bookisbn'];
			
			$select_query = "select * from books where book_isbn = '$isbn'";
			$res = mysqli_query($conn,$select_query);
			$cnt = mysqli_num_rows($res);
			if($cnt > 0)
			{
				$row = mysqli_fetch_array($res);
				$image_link = $row['book_image'];
				$pdf_link = $row['book_pdf'];
				
				$delete_query = "delete from books where book_isbn = '$isbn'";
				$res = mysqli_query($conn,$delete_query);
				if($res)
				{
					echo "Book deleted successfully";
				}
				else
				{
					echo "Unable to delete book";
				}
			}
			
		}
	}
	
	
	$result = getAll($conn);
	
	
?>
	<p class="lead"><a href="admin_add.php">Add new book</a></p>
	<a href="admin_signout.php" class="btn btn-primary">Sign out!</a>
	<table class="table table-striped table-bordered" style="margin-top: 20px">
		<tr>
			<th>ISBN</th>
			<th>Title</th>
			<th>Author</th>
			<th>Image</th>
			<th>Ebook</th>
			<th>Description</th>
			<th>Price</th>
			<th>Publisher</th>
			<th>Action(s)</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $row['book_isbn']; ?></td>
			<td><?php echo $row['book_title']; ?></td>
			<td><?php echo $row['book_author']; ?></td>
			<td><img src="upload/image/<?php echo $row['book_image']; ?>" width="70" height="70" /></td>
			<td><a href="upload/pdf/<?php echo $row['book_pdf']; ?>" target="_blank"> View Book</a></td>
			<td><?php echo $row['book_descr']; ?></td>
			<td><?php echo $row['book_price']; ?></td>
			<td><?php echo $row['publisherid']; ?></td>
			<td>
				<a href="admin_edit.php?bookisbn=<?php echo $row['book_isbn']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="admin_book.php?bookisbn=<?php echo $row['book_isbn']; ?>&c=d"><span class="glyphicon glyphicon-remove"></span></a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		
	</script>

<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>