<?php
$conn = mysqli_connect('localhost','root','','nia') or die('could not connect to database');
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE petitioner set petitioner_id='" . $_POST['petitioner_id'] . "', name='" . $_POST['name'] . "', father_name='" . $_POST['father_name'] . "', gender='" . $_POST['gender'] . "' ,age='" . $_POST['age'] . "', contact='" . $_POST['contact'] . "',street='" . $_POST['street'] . "',city='" . $_POST['city'] . "',state='" . $_POST['state'] . "' WHERE petitioner_id='" . $_POST['petitioner_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM petitioner WHERE petitioner_id='" . $_GET['petitioner_id'] . "'");
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
            <a href="petitioner.php">Petitioner</a>
            </div>
                <h1 id="record_vis">Update Petitioner Details</h1>
                <h2 class="text-center" id="record_vis"><br></h2>
                <div class="form-group"><input class="form-control" name="petitioner_id" placeholder="ID" type="text" value="<?php echo $row['petitioner_id']; ?>"></div>
                <div class="form-group"><input class="form-control" name="name" placeholder="Name" type="text" value="<?php echo $row['name']; ?>"></div>
                <div class="form-group"><input class="form-control" name="father_name" placeholder="Father Name" type="text" value="<?php echo $row['father_name']; ?>"></div>
                <div class="form-group"><input class="form-control" name="gender" placeholder="Gender" type="text" value="<?php echo $row['gender']; ?>"></div>
                <div class="form-group"><input class="form-control" name="age" placeholder="Age" type="number" value="<?php echo $row['age']; ?>"></div>
                <div class="form-group"><input class="form-control" name="contact" placeholder="Contact" type="tel" value="<?php echo $row['contact']; ?>"></div>
                <div class="form-group"><input class="form-control" name="street" placeholder="Street" type="text" value="<?php echo $row['street']; ?>"></div>
                <div class="form-group"><input class="form-control" name="city" placeholder="City" type="text" value="<?php echo $row['city']; ?>"></div>
                <div class="form-group"><input class="form-control" name="state"placeholder="State"  type="text" value="<?php echo $row['state']; ?>"></div>
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