<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'nia');
if(isset($_POST['Submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    # protect from sql injection   

    $email=mysqli_escape_string($conn,$email);                           
    $password=mysqli_escape_string($conn,$password);
                                                                              
    #cross site scripting attack

    $email=htmlentities($email);                             
    $password=htmlentities($password); 

    $query = "SELECT * FROM admin WHERE email ='$email' && password ='$password'";

    $data = mysqli_query($conn, $query);
    $total = mysqli_num_rows($data);
    if($total==1)
    {
        header("location: adminpanel.php");
    }
    else{
        echo "<script type='text/javascript'>alert('Invalid Email or Password');window.location ='admin.php';</script>";
    }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NIA</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/best-carousel-slide.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/social-div-1.css">
    <link rel="stylesheet" href="assets/css/social-div.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- Validation -->
    <script type="text/javascript">
    	function validation()
    	{
      		var email=document.getElementById("email").value;
      		var password= document.getElementById("password").value;

				 if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("email").value)))
				 { document.getElementById("email_x").innerHTML = "** please fill valid email **";
      	          return false;
				  }

      	    if(password=="")
      	        {document.getElementById("password_x").innerHTML="** please fill password **";
      	         return false; }
      	    if((password.length<4)&&(password.length>19))
      	        {document.getElementById("password_x").innerHTML = "** password is btw 3 and 20 **";
      	         return false; }
    	}
   
    </script>

    <!-- Validation End Here -->
</head>

<body>
    <div id="header"><img id="logo" src="assets/img/Header/National_Investigation_Agency_India_logo.png"><span class="text-white" id="initials">NIA</span><span class="text-light" id="fullname">NATIONAL INTELLIGENCE AGENCY</span></div>
    <div class="login-dark">
        <form method="post" target="_self" >
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="fas fa-user-shield" style="color: rgb(18,63,105);"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-block" type="submit" name="Submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Criminal Justice Information</a></li>
                            <li><a href="#">Critical Incident Response Group</a></li>
                            <li><a href="#">Labouratory Services</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">NIA</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>National Investigating Agency</h3>
                        <p>Our priority&nbsp;is to help protect you, your children, your communities, <br>and your businesses from the most dangerous threats facing our <br>nation—from international and domestic terrorists to spies on Indian soil,<br> from
                            cyber villains to corrupt government officials, from mobsters to <br>violent street gangs, from child predators to serial killers. Along the <br>way, we help defend and uphold our nation’s economy, physical and <br>electronic
                            infrastructure, and democracy.&nbsp;<br></p>
                    </div>
                    <div class="col item social"><a><i class="icon ion-social-facebook"></i></a><a href="https://www.twitter.com"><i class="icon ion-social-twitter"></i></a><a href="https://www.youtube.com"><i class="icon ion-social-youtube"></i></a><a href="https://www.instagram.com"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">NIA @ 2019</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>

