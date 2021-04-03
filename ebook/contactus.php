<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<!-- Custom styles for this template -->
<link href="contactus.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
    <div class="jumbotron text-white jumbotron-image shadow" style="background-image: url(https://webbfontaine.com/wp-content/uploads/2019/10/contactusheader.jpg); height: 400px">
        <div class="container pt-3 pr-3 pl-3 ">
      <h1 class="mb-4" style="font: comic sans ms italic"><center><b> CONTACT US</b></center></h1>
      <p class="mb-4"><center>We are happy to help.</center></p>
      <a href="https://bootstrapious.com/snippets" class="btn btn-primary">More Bootstrap Snippets</a>
    </div>
</div>
<form action=userinfo.php method="post">
<div class="form4 top">
    <div class="container">
        <img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img,w_626/https://www.superkitz.com/wp-content/uploads/2020/09/contact-us-concept-illustration_114360-2299.jpg" class="float-right " alt="image" width="600" height="600" >
        <div class="row">
            <div class="col-md-9 col-md-offset-3">
                <div class="form-bg">
                    <form class="form">
                    	<h3> <center><b> Contact Us </b></center></h3>
                        <div class="form-group"> <label class="sr-only">Name</label> 
                        <input type="text" class="form-control" required="" placeholder="Your Name" name="name" autocomplete="off"></div>
                        <div class="form-group"> <label class="sr-only">Email</label> <input type="email" class="form-control" required=""   placeholder="Email Address" name="email" autocomplete="off"> </div>
                        <div class="form-group"> <label class="sr-only">Name</label> 
                        <textarea class="form-control" required="" rows="7"  placeholder="Write message" name= "comment" autocomplete="off"></textarea> 
                        </div> 
                        <button type="submit" class="btn text-center btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>