<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HomePage styling sheet attached -->
    <link rel="stylesheet" href="homepage.css">
    <title>Home Page</title>

    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            width: 300px;
            margin: 20px;
            background-color: #ddd;
            border-radius: 10px;
            box-shadow: 2px 2px 10px #ccc;
            text-align: center;
        }

        .card-title {
            margin: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        .card-content {
            margin: 20px;
            font-size: 16px;
        }

        .product-card-buttons {
            margin: 10px 0;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            margin-top:3px;
            margin-bottom:3px;
        }

        .button1 {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: blueviolet;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
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

                    <a class="nav-link" href="login3.php"
                        style="margin-left:25px;text-align:center;color:rgb(202, 158, 101);background-color:antiquewhite; border-radius:12px;">
                        Log In </a>

                </div>
            </div>
        </div>
    </nav>


    <!-- Banner Slider -->

    <div id=" carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pics/a3.jpg" class="d-block w-100 ">
            </div>
            <div class="carousel-item">
                <img src="pics/a2.jpg" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="pics/a3.jpg" class="d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Website Intro -->
    <div class="Website-Intro alert alert-secondary" role="alert">
        Step forward to the digitalization and modernization in Agriculture, by discussing all
        kind of Agriculture mind of thoughts with Farmers and Agriculturists, and exchanging quality products on door
        steps to .
    </div>

    <!-- Latest Products -->
    <div class=" Latest-Products card" style="background-color:pink;">
        <div>
            <h5 class="card-title">Latest Products </h5>
        </div>
    </div>

    <!-- Products Display -->

    <?php
    // Connect to the database
    $conn = mysqli_connect('localhost', 'root', '', 'project0097');

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get the data from the products table
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='card-container'>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card">
            <h1 class="title">' . $row["ProductName"] . '</h1>
            <p class="price">$' . $row["ProductPrice"] . '</p>
            <p>Code: ' . $row["ProductCode"] . '</p>
            <p>Availability: ' . $row["Availability"] . '</p>
            <p>Discount: ' . $row["ProductDiscount"] . '%</p>
            <p>Brand: ' . $row["ProductBrands"] . '</p>
            <div class="product-card-buttons">
              
              <a class="button1" aria-current="page" href="cart.php"> Add to Cart </a>

            </div>
          </div>';
        }
        echo "</div>";
    } else {
        echo "No data found in the products table";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>

    <!-- Footer -->

    <nav class="footer navbar navbar-dark bg-dark">
        <div class="grid col-12">
            <div class="row">
                <div class=" col-4">
                    <div class="footer-pages btn-group" role="group" aria-label="Basic outlined example">
                        <a href="homepage2.php"> <button type="button" class="btn btn-outline-primary">Home</button>
                        </a>

                        <a href="AboutUs.html"> <button type="button" class="btn btn-outline-primary">About
                                Us</button>
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
    <p class="Copyright-Section" style="background-color:bisque;">
        Copyright &#169 2022 <span style="font-style:italic"> Tayyab Hassan Tarar </span>
    </p>



</body>

</html>