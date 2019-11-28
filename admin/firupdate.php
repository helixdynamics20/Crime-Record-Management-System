<?php
$conn = mysqli_connect('localhost','root','','nia') or die('could not connect to database');
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE fir set fir_num='" . $_POST['fir_num'] . "', petitioner_name='" . $_POST['petitioner_name'] . "', victim_name='" . $_POST['victim_name'] . "', date_filled='" . $_POST['date_filled'] . "' ,date_incident='" . $_POST['date_incident'] . "', time_incident='" . $_POST['time_incident'] . "' ,place_incident='" . $_POST['place_incident'] . "',accused_name='" . $_POST['accused_name'] . "' WHERE fir_num='" . $_POST['fir_num'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM fir WHERE fir_num='" . $_GET['fir_num'] . "'");
$row= mysqli_fetch_array($result);
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
</head>

<body>
    <div id="header"><img id="logo" src="assets/img/Header/National_Investigation_Agency_India_logo.png"><span class="text-white" id="initials">NIA</span><span class="text-light" id="fullname">NATIONAL INTELLIGENCE AGENCY</span></div>
    <section >
        <div class="register-photo">
        <div class="form-container">
            <form name="frmUser" method="post" action="">
            <div><?php if(isset($message)) { echo $message; } ?></div>
            <div style="padding-bottom:5px;">
            <a href="fir.php">fir</a>
            </div>
                <h1 id="record_vis">Update fir Details</h1>
                <h2 class="text-center" id="record_vis"><br></h2>
                <div class="form-group"><input class="form-control" name="fir_num" placeholder="ID" type="text" value="<?php echo $row['fir_num']; ?>"></div>
                <div class="form-group"><input class="form-control" name="petitioner_name" placeholder="Petitioner Name" type="text" value="<?php echo $row['petitioner_name']; ?>"></div>
                <div class="form-group"><input class="form-control" name="victim_name" placeholder="Victim Name" type="text" value="<?php echo $row['victim_name']; ?>"></div>
                <div class="form-group"><input class="form-control" name="date_filled" placeholder="Date Filled" type="date" value="<?php echo $row['date_filled']; ?>"></div>
                <div class="form-group"><input class="form-control" name="date_incident" placeholder="Date Incident" type="date" value="<?php echo $row['date_incident']; ?>"></div>
                <div class="form-group"><input class="form-control" name="time_incident" placeholder="Time Incident" type="time" value="<?php echo $row['time_incident']; ?>"></div>
                <div class="form-group"><input class="form-control" name="place_incident" placeholder="Place Incident" type="text" value="<?php echo $row['place_incident']; ?>"></div>
                <div class="form-group"><input class="form-control" name="accused_name" placeholder="Accused Name" type="text" value="<?php echo $row['accused_name']; ?>"></div>
                <div class="form-group"><input type="submit" name="submit" value="Submit" class="buttom"></div>
            </form>
        </div>
        </div>
    </section>
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