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
    <section class="enterprise">
        <h1 class="text-center"><select class="form-control-sm"><option value="undefined" selected="">Search By</option><option value="12" selected="">Accussed ID</option><option value="13">Name</option><option value="14">Father Name</option></select><input type="search" class="form-control-sm" />
            <button
                class="btn btn-primary cbtn" type="button">Search</button>
        </h1>
        <div class="table-responsive">
        <table class="table table-striped table-hover table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Status</th>
                        <th>Contact No.</th>
                        <th>Street</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Locked at</th>
                    </tr>
                </thead>

                <?php
                $conn = mysqli_connect("localhost", "root", "", "nia");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT * FROM accused";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["accussed_id"]. "</td><td>" . $row["name"] . "</td><td>"
                    . $row["father_name"]. "</td><td>" . $row["gender"] . "</td>  <td>" . $row["age"] . "</td>
                    <td>" . $row["status"] . "</td> <td>" . $row["contact"] . "</td> <td>" . $row["street"] . "</td>
                    <td>" . $row["city"] . "</td> <td>" . $row["state"] . "</td> <td>" . $row["locked_at"] . "</td></tr>";
                }
                echo "</table>";
                }
                $conn->close();
                ?>
            </table>
        </div>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/SBWP-Search-Bar-With-Parameters.js"></script>
    <script src="assets/js/WOWSlider-about-us.js"></script>
</body>

</html>