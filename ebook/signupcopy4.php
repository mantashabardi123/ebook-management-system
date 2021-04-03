<?php 
    
$showAlert = false; 
$showError = false; 
$exists=false; 
    
if($_SERVER["REQUEST_METHOD"] == "POST") { 
    
    // Include file which makes the 
    // Database Connection. 
    include 'signdb.php'; 
    
    $username = $_POST["username"]; 
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $cpassword = $_POST["cpassword"]; 
            
    
    $sql = "Select * from signinfo where username='$username'"; 
    
    $result = mysqli_query($con, $sql); 
    
    $num = mysqli_num_rows($result); 
    
    // This sql query is use to check if 
    // the username is already present 
    // or not in our Database 
    if($num == 0) { 
        if(($password == $cpassword) && $exists==false) { 
    
            $hash = password_hash($password, PASSWORD_DEFAULT); 
                
            // Password Hashing is used here. 
            $sql = "INSERT INTO 'signinfo' ( 'username','email','password', 'date') VALUES ('$username', '$email','$hash', current_timestamp())"; 
    
            $result = mysqli_query($con, $sql); 
           
            if ($result) { 
                $showAlert = true; 
            } 
        } 
        else { 
            $showError = "Passwords do not match"; 
        }    
    }// end if 
    
if($num>0) 
{ 
    $exists="Username not available"; 
} 

}//end if
    
?> 
    
<!doctype html> 
    
<html lang="en"> 
<script type="text/javascript" src='https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="sign.css">

<title>Sign Up</title>
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content= 
        "width=device-width, initial-scale=1, shrink-to-fit=no"> 

    </head> 

<body> 
    <section>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-6 col-xl-5">
          <div class="row">
            <div class="col text-center">
              <h1>Sign up</h1>
          </div>
          <div class="row align-items-center">

<form method="post" action="signupcopy4.php" id="form1">
    <div class="form-group">
    <label>Username</label>
    <input name="username" type="text" id="username" class="form-control" pattern="[A-Za-z0-9]{3,15}"
        title="Both letters (either case) and numbers.The username must start with a letter and must be 3 to 15 characters long" autocomplete="off" required />
    </div>
    <div class="form-group">
    <label>Email</label>
    <input name="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
        required type="email"  title="Enter the valid email id e.g. john@gmail.com" autocomplete="off" required/>
    </div>
    <div class="form-group">
    <label>Password</label>
    <input name="password" type="password" id="password" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number" class="form-control" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" autocomplete="off" required/>
    </div>
    <div class="form-group">
    <label>Confirm Password</label>
    <input name="cpassword" type="password" id="cpassword" class="form-control"
         required />
    </div>
    <div class="form-group"> 
    <input type="submit" value="Sign up" id="btnSignup" class="btn btn-lg btn btn-secondary"/> 
    <center><p>Have an account already?<a href="loginfinal.php">Login</a></p></center>
</div>
</div>
</form>
</div>
</div>
</div>
</section>
</body>
<script type="text/javascript">
   var password = document.getElementById("password")
  , cpassword = document.getElementById("cpassword");

function validatePassword(){
  if(password.value != cpassword.value) {
    cpassword.setCustomValidity("Passwords Don't Match");
  } else {
    cpassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
cpassword.onkeyup = validatePassword;
</script>
</html>