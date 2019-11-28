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
    <section class="enterprise">
        <!-- <h1 class="text-center"><select class="form-control-sm"><option value="undefined" selected="">Search By</option><option value="12" selected="">Victim ID</option><option value="13">Name</option><option value="14">Father Name</option></select><input type="search" class="form-control-sm" />
            <button
                class="btn btn-primary cbtn" type="button">Search</button>
        </h1> -->
        <div class="table-responsive">
            <table class="table table-striped table-hover table-dark">
                <thead>
                    <tr>
                        <th>Victim ID</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Conatact No.</th>
                        <th>Situation</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Accident Time</th>
                        <th>Delete</th>
                        <th>Update</th>
                        <th>ADD</th>
                    </tr>
                </thead>
                <?php
                $conn = mysqli_connect("localhost", "root", "", "nia");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM victim";
                $result = $conn->query($sql);
                    $i=0;
	                while($row = mysqli_fetch_array($result)) {
                     
	                ?>
	                <tr class="<?php if(isset($classname)) echo $classname;?>">
	                    <td><?php echo $row["victim_id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
	                    <td><?php echo $row["father_name"]; ?></td>
	                    <td><?php echo $row["gender"]; ?></td>
	                    <td><?php echo $row["age"]; ?></td>
                        <td><?php echo $row["contact"]; ?></td>
                        <td><?php echo $row["situation"]; ?></td>
                        <td><?php echo $row["street"]; ?></td>
                        <td><?php echo $row["city"]; ?></td>
                        <td><?php echo $row["state"]; ?></td>
                        <td><?php echo $row["accident at"]; ?></td>
	                    <td><a href="vicdelete.php?victim_id=<?php echo $row["victim_id"]; ?>">Delete</a></td>
                        <td><a href="vicupdate.php?victim_id=<?php echo $row["victim_id"]; ?>">Update</a></td>
                        <td><a href="victimrec.php">ADD</a></td>
	                </tr>
	            <?php
	            $i++;
	            }
	            ?>
            </table>
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