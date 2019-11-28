<?php
ob_start();
session_start();
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "nia";
$conn= mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['Submit']))
{
    
    
    $IOID=$_POST['io_id'];
    $Details=$_POST['details'];
    $Firno=$_POST['fir_number'];
    
    
                     
        $sql= "INSERT INTO case(io_id, details, fir_number) 
                        
                        VALUES($IOID,'$Details', $Firno)";
        
        if(!mysqli_query($conn,$sql))
        {
            echo 'not inserted';
        }
        else
        {
            header("location: index.html");
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
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo-1.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/social-div-1.css">
    <link rel="stylesheet" href="assets/css/social-div.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <header>
        <div id="header"><img id="logo" src="assets/img/Header/National_Investigation_Agency_India_logo.png"><span class="text-white" id="initials">NIA</span><span class="text-light" id="fullname">NATIONAL INTELLIGENCE AGENCY</span></div>
    </header>
    <div class="register-photo">
        <div class="form-container">
            <form method="post">
                <h1 id="record_vis">Enter Case Details</h1>
                <h2 class="text-center" id="record_vis"><br></h2>
                <div class="form-group"><input class="form-control" name="io_id" placeholder="IO ID" type="number"></div>
                <div class="form-group"><input class="form-control" name="details" placeholder="Detail" type="text"></div>
                <div class="form-group"><input class="form-control" name="fir_number" placeholder="FIR Number" type="number"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit"  name="Submit">ADD</button></div>
            </form>
        </div>
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