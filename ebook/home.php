<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>books</title>
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?> 
	<header>
<body>
	<header>
		<div class="container-fluid p-0">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<a class="navbar-brand" href="" >BOOKTIQUE</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				  	<div class="topnav">
					  	<div class="search-container">
						    <form action="/action_page.php">
						      <input type="text" placeholder="Search.." name="search">
						      <button type="submit"><i class="fa fa-search"></i></button>
						    </form>
						</div>
						</div>
				 	</div>
					 <ul class="nav navbar-nav navbar-right">
				      <li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				      </li>
				   <li class="nav-item dropdown">
				    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
				    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="servicesDropdown">
				     <a class="dropdown-item" href="#"><center>BOOKS</center></a>
				     <div class="dropdown-divider"></div>
			     <div class="d-md-flex align-items-start justify-content-start">
			      <div>   
			       <div class="dropdown-header">Genre</div>
			       <a class="dropdown-item" href="categorybook.php?category=Another action">Action and Adventure</a>
			       <a class="dropdown-item" href="#">Classics</a>
			       <a class="dropdown-item" href="#">Comic Book or Graphic Novel</a>
			       <a class="dropdown-item" href="#">Detective and Mystery</a>
			       <a class="dropdown-item" href="#">Fantasy</a>
			       <a class="dropdown-item" href="#"> Fiction</a>
			       <a class="dropdown-item" href="categorybook.php?category=Horror">Horror</a>
			       <a class="dropdown-item" href="#">Romance</a>
			       <a class="dropdown-item" href="#">Science Fiction (Sci-Fi)</a>
			       <a class="dropdown-item" href="#">Suspense and Thrillers</a>
			       <a class="dropdown-item" href="#">Biographies and Autobiographies</a>
			       <a class="dropdown-item" href="#">Cookbooks</a>
			       <a class="dropdown-item" href="#">Poetry</a>
			       <a class="dropdown-item" href="#">True Crime</a>

			      </div>
			      <div>
			       <div class="dropdown-header">Educational</div>
			       <a class="dropdown-item" href="#">Rhymes</a>
			       <a class="dropdown-item" href="#">student</a>
			       <a class="dropdown-item" href="#">other</a>
			      </div>
			      <div>
			       <div class="dropdown-header">Local Author</div>
			       <a class="dropdown-item" href="#">Short Stories</a>
			      </div>
			     </div>
			    </div>
			</li>
				<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Explore
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Read</a>
				          <a class="dropdown-item" href="create.php">Create</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				      </li>
				       <li class="nav-item">
				        <a class="nav-link" href="#">Donate</a>
				      </li>
				       <li class="nav-item">
				        <a class="nav-link" href="contactus.php">Contact us</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				         Account
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="loginfinal.php">LOGIN</a>
				          <a class="dropdown-item" href="signupcopy4.php">SIGN UP</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">LOGOUT</a>
				        </div>
				      </li>
				     </ul>
				 </div>
				</nav>
			</div>
			<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/book7.jpg" alt="book" width="1000" height="600">
			      <div class="carousel-caption">
			      <h3 style="color: ghostwhite;">"There are many little ways to enlarge your world.<br><br><strong>Love of books is the best of all"</strong></h3>
			      <a href="#" class="btn btn-primary">lets go</a>
			  </div>
		    </div>
		    <div class="carousel-item">
		      <img src="img/book10.jpg" alt="book" width="1000" height="600">
		      <div class="carousel-caption">
			      <h3 style="color: white;" >"If there's a story that you want to read, but it hasn't been written yet than<br><strong>You must WRITE IT"</strong></h3>

			      <a href="create.php" class="btn btn-primary">Start Writing</a>
		    </div>
		    </div>
		    <div class="carousel-item">
		      <img src="img/book3.jpg" alt="book" width="1000" height="600">
			      <div class="carousel-caption">
				      <h3></h3>
				      <p></p>
				      <a href="#" class="btn btn-primary">More Bootstrap Snippets</a>
			      </div>
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
	</header>
	<main>
		<h3><center><u><b> ABOUT US </b></u></center></h3>
		<p>BOOKITIQUE is a free service that helps millions of readers discover books they'll love while providing publishers and authors with a way to drive sales and find new fans.<br>The website provides the user,author and administrator an easy and efficient way to buy and manage books online.<br>The website provides facilities like purchasing books,to view books,and to create short stories.<br>The website provides a contact us page where users to provide feedback and give some suggestions.
		</p>
		<center>
		<div class="container1">
  		<h2>Circle</h2>
  		<p>The .rounded-circle class shapes the image to a circle:</p>            
  		<img src="img/login3.jpeg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
		</div>
		<div class="container3">
  		<h2>Circle</h2>
  		<p>The .rounded-circle class shapes the image to a circle:</p>            
  		<img src="img/login3.jpeg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
		</div>
		<div class="container3">
  		<h2>Circle</h2>
  		<p>The .rounded-circle class shapes the image to a circle:</p>            
  		<img src="img/login3.jpeg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
		</div>
		</center> 
 
	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<footer class="footer">
	<div class="container1">
		<div class="row">
			<div class="footer-col">
				<ul>
					<img src="img/logo.jpeg" alt="logo" width="250px">
				</ul>
			</div>
			<div class="footer-col">
				<h4> links</h4>
				<ul>
					<li><a href="home.php">home</a></li>
					<li><a href="">catagory</a></li>
					<li><a href="">Explore</a></li>
					<li><a href="">Donate</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>get in touch</h4>
				<ul>
					<li><a href="contactus.php"> contact us</a></li>
				</ul>
			</div>
			<div class="footer-col">
				<h4>follow us</h4>
				<ul>
					<li><a href=""></a></li>
				</ul>
			</div>
		</div>
	</div>
		
</footer>		
</html>