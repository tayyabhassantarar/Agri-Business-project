<!DOCTYPE html>
<html lang="en">

<head>

    <title> Contact Us </title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Products styling sheet attached -->
    <link rel="stylesheet" href="ContactUs.css">

    <style>
        .form-container {
            display: flex;
          
            align-items: center;
            margin: 50px;
        }

        input,
        textarea {
            width: 50%;
            padding: 10px;
            margin: 10px 0;
            font-size: 1.2em;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 165px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1.2em;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>

<body class="fullpage">
    <!-- Main Header -->

    <div class="alert alert-danger" role="alert">
        <div class="grid col-12">
            <div class="row">
                <div class="logo-front col-3">
                    <img src="pics/mono.PNG" alt="Tarar Farm">
                </div>

                <div class="col-7">

                    <!-- Left Blank for Ad etc -->

                </div>

                <!-- Social Icons -->
                <div class="social-icons col-2">
                    <div class="grid col-12">
                        <div class="row">
                            <div class="col-3">
                                <a href="https://www.facebook.com/tayyabHtarar" class="fa fa-facebook"></a>
                            </div>
                            <div class="col-3">
                                <a href="https://twitter.com/Tayyab0815" class="fa fa-twitter"></a>
                            </div>
                            <div class="col-3">
                                <a href="https://www.linkedin.com/in/tayyab-hassan-tarar-305252211/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3B2Jp7tAHvRG6hykiUVtEUmQ%3D%3D"
                                    class="fa fa-linkedin"></a>
                            </div>
                            <div class="col-3">
                                <a href="https://github.com/tayyabhassantarar" class="fa fa-github"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Menu -->
    <nav class="Main-Menu navbar navbar-expand-lg bg-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="homepage2.php">Home</a>
                    <a class="nav-link" href="AboutUs.html">About Us</a>
                    <a class="nav-link" href="Products.html">Products</a>
                    <a class="nav-link" href="ContactUs.php">Contact Us</a>

                </div>
            </div>
        </div>
    </nav>




    <!-- Form Making -->
    <div class="grid-12">
        <div class="row">
            <div class="form1 col-8">
                <p class="ContactUs" style="text-align:center;margin-top:35px;margin-bottom:35px;font-size:32px;">
                    Contact Us </p>
                <!-- Form Sub-Division -->

                <div class="grid col-12">
                    <div class="row">
                        <div class="col-5">


                            <div class="form-container">
                               
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <input type="text" name="name" placeholder="Name" required>
                                    <input type="email" name="email" placeholder="Email" required>
                                    <input type="text" name="phone" placeholder="Phone" required>
                                    <input type="text" name="city" placeholder="City" required>
                                    <textarea name="message" placeholder="Message" rows="5" required></textarea>
                                    <input type="submit" name="submit" value="Submit">
                                </form>
                            </div>

                            <?php
                            // Define database credentials
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "project0097";

                            // Check if form is submitted
                            if (isset($_POST['submit'])) {
                                $name = $_POST['name'];
                                $email = $_POST['email'];
                                $phone = $_POST['phone'];
                                $city = $_POST['city'];
                                $message = $_POST['message'];

                                // Connect to database
                                $conn = mysqli_connect($servername, $username, $password, $dbname);

                                // Check connection
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

                                // Insert data into "contactus" table
                                $sql = "INSERT INTO contactus (Name, Email, Phone, City, Message)
                                  VALUES ('$name', '$email', '$phone', '$city', '$message')";

                                if (mysqli_query($conn, $sql)) {
                                    echo "Data inserted successfully";
                                } else {
                                    echo "Error inserting data: " . mysqli_error($conn);
                                }

                                // Close the connection
                                mysqli_close($conn);
                            }
                            ?>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4">
                <div class="grid-10">
                    <div class="row">
                        <div class="col-7"
                            style="border: 1px solid black;text-align:center; margin-left:8px; margin-top:150px;">
                            <p style="position:block;font-weight:bold;">
                            <h3> Located At </h3>
                            </p>
                            <p> Village Kolo Tarar, Tehsil and District Hafizabad, Punjab, Pakistan </p>
                        </div>

                        <div class="col-7"
                            style="border: 1px solid black;text-align:center; margin-left:8px; margin-top:40px">



                            <h3>See Us on Google Map</h3>

                            <div id="googleMap" style="width:100%;height:400px;"></div>

                            <script>
                                function myMap() {
                                    var mapProp = {
                                        center: new google.maps.LatLng(51.508742, -0.120850),
                                        zoom: 5,
                                    };
                                    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                                }
                            </script>

                            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->

    <nav class="footer navbar navbar-dark bg-dark">
        <div class="grid col-12">
            <div class="row">
                <div class=" col-4">
                    <div class="footer-pages btn-group" role="group" aria-label="Basic outlined example">
                        <a href="homepage2.php"> <button type="button" class="btn btn-outline-primary">Home</button>
                        </a>

                        <a href="AboutUs.html"> <button type="button" class="btn btn-outline-primary">About Us</button>
                        </a>

                        <a href="Products.html"> <button type="button" class="btn btn-outline-primary">Products</button>
                        </a>

                        <a href="ContactUs.php"> <button type="button" class="btn btn-outline-primary">Contact
                                Us</button> </a>

                    </div>
                </div>
                <div class=" col-4" style="text-align:center;">
                    <div class="footer-text">
                        <p> Ch. Saif Ullah Tarar Agri Farms </p>
                    </div>
                </div>


                <div class=" col-4" style="text-align:right;">
                    <div class="social-iconsFooter">
                        <div class="col-8">
                            <a href="https://www.facebook.com/tayyabHtarar" class="fa fa-facebook"></a>
                            <a href="https://twitter.com/Tayyab0815" class="fa fa-twitter"></a>
                            <a href="https://www.linkedin.com/in/tayyab-hassan-tarar-305252211/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3B2Jp7tAHvRG6hykiUVtEUmQ%3D%3D"
                                class="fa fa-linkedin"></a>
                            <a href="https://github.com/tayyabhassantarar" class="fa fa-github"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>


    </nav>
    <!-- Copyright Section -->
    <p class="Copyright-Section">
        Copyright &#169 2022 <span style="font-style:italic"> Tayyab Hassan Tarar </span>
    </p>


</body>

</html>