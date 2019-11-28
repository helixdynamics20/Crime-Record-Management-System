<?php
$conn = mysqli_connect('localhost','root','','nia') or die('could not connect to database');
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE caseoutcome set case_outcome_id='" . $_POST['case_outcome_id'] . "', case_id='" . $_POST['case_id'] . "', section_of_law='" . $_POST['section_of_law'] . "', status='" . $_POST['status'] . "', status='" . $_POST['status'] . "' ,details='" . $_POST['details'] . "' WHERE case_outcome_id='" . $_POST['case_outcome_id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM caseoutcome WHERE case_outcome_id='" . $_GET['case_outcome_id'] . "'");
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
            <a href="caseoutcome.php">Case Outcome</a>
            </div>
                <h1 id="record_vis">Update Case Outcome Details</h1>
                <h2 class="text-center" id="record_vis"><br></h2>
                <div class="form-group"><input class="form-control" name="case_outcome_id" placeholder="ID" type="text" value="<?php echo $row['case_outcome_id']; ?>"></div>
                <div class="form-group"><input class="form-control" name="case_id" placeholder="Case ID" type="number" value="<?php echo $row['case_id']; ?>"></div>
                <div class="form-group"><input class="form-control" name="section_of_law" placeholder="Section Of Law" type="text" value="<?php echo $row['section_of_law']; ?>"></div>
                <div class="form-group"><input class="form-control" name="status" placeholder="Status" type="text" value="<?php echo $row['status']; ?>"></div>
                <div class="form-group"><input class="form-control" name="details" placeholder="Detail" type="text" value="<?php echo $row['details']; ?>"></div>
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