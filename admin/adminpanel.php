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
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/SBWP-Search-Bar-With-Parameters.css">
    <link rel="stylesheet" href="assets/css/social-div-1.css">
    <link rel="stylesheet" href="assets/css/social-div.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-1.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-2.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us.css">
</head>

<body>
    <div id="header"><img id="logo" src="assets/img/Header/National_Investigation_Agency_India_logo.png"><span class="text-white" id="initials">NIA</span><span class="text-light" id="fullname">NATIONAL INTELLIGENCE AGENCY</span></div>
    <section id="secback">
        <h1 class="display-3 text-white" id="tithead"><strong>Welcome To NIA</strong></h1>
    </section>
    <div class="register-photo">
        <div class="form-container">
            <div><form id="fcid" method="post">
                <h2 class="text-center text-white" id="cphead"><strong>Control Panel</strong></h2>
                <div class="form-group"><a class="btn btn-block apb" role="button" href="petitioner.php">Petitioner Information</a></div>
                <div class="form-group"><a class="btn btn-block apb" role="button" href="fir.php">Victim Information</a></div>
                <div class="form-group"><a class="btn btn-block apb" role="button" href="accussed.php">FIR Information</a></div>
                <div class="form-group"><a class="btn btn-block apb" role="button" href="case.php">Accussed Information</a></div>
                <div class="form-group"><a class="btn btn-block apb" role="button" href="case.php">Case Information</a></div>
                <div class="form-group"><a class="btn btn-block apb" role="button" href="sectionoflaw.php">Case Outcome</a></div>
                <div class="form-group"><a class="btn btn-block apb" role="button" href="officer.php">Section Of Law</a></div>
                <div class="form-group"><a class="btn btn-block apb" role="button" href="case.php">Officer's Information</a></div>
                <div class="form-group"><a class="btn btn-block apb" role="button" href="case.php">Case Inquiry</a></div>
            </form></div>
            <form name="userregister"id="fcid" method="post" onSubmit="return check();">
                <h2 class="text-center text-white" id="rshead"><strong>Register User</strong></h2>
                <div class="form-group"><input class="form-control" type="text" id="ruadmin" name="name" placeholder="Name"></div>
                <div class="form-group"><input class="form-control" type="text" id="ruadmin" name="father name" placeholder="Father Name"></div>
                <div class="form-group" style="color:white">Gender</div>
                <div class="form-group" style="color:white"><input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other</div>
                <div class="form-group"><input class="form-control" type="number" id="ruadmin" name="age" placeholder="Age"></div>
                <div class="form-group"><input class="form-control" type="tel" id="ruadmin" name="contact" placeholder="Contact No."></div>
                <div class="form-group"><input class="form-control" type="text" id="ruadmin" name="rank" placeholder="Rank"></div>
                <div class="form-group"><input class="form-control" type="date" id="ruadmin"  name="doa" placeholder="Date Of Appointment"></div>
                <div class="form-group"><input class="form-control" type="text" id="ruadmin" name="street" placeholder="Street"></div>
                <div class="form-group"><input class="form-control" type="text" id="ruadmin" name="city" placeholder="City"></div>
                <div class="form-group"><input class="form-control" type="text" id="ruadmin" name="state" placeholder="State"></div>
                <div class="form-group"><input class="form-control" type="email" id="ruadmin" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" id="ruadmin" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" id="ruadmin" name="password-repeat" placeholder="Retype Password"></div>
                <div class="form-group"><button class="btn btn-block" type="submit">Sign Up</button></div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/SBWP-Search-Bar-With-Parameters.js"></script>
    <script src="assets/js/WOWSlider-about-us.js"></script>
</body>

</html>