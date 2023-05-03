<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HomePage styling sheet attached -->
    <link rel="stylesheet" href="homepage.css">

    <title>DashBoard</title>

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            flex-direction: column;
        }

        h1 {
            margin-bottom: 15px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .center {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: lightgray;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px black;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border-radius: 5px;
            border: none;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: darkgray;
            color: white;
            border-radius: 5px;
            border: none;
            cursor: pointer;
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
                    <a class="nav-link active" aria-current="page" href="homepage.html">Home</a>

                </div>
            </div>
        </div>
    </nav>

    <!-- DashBoard -->

    <div class="grid col-12">

        <div class="row">
            <div class="col-12">





                <div class="center">
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <h2>Login</h2>
                        <input type="text" name="email" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                        <input type="submit" value="Submit">

                        <a class="nav-link" href="signup.php"
                            style="margin-left:25px;text-align:center;color:gray;background-color:antiquewhite; border-radius:7px;">
                            Sign Up </a>

                    </form>
                </div>


                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "project0097";

                $conn = new mysqli($servername, $username, $password, $dbname);
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $query = "SELECT * FROM userlogin WHERE email = '$email' AND password = '$password'";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {
                        header("Location: dashboard.html");
                    } else {
                        echo "Please sign up first";
                    }
                }
                ?>




            </div>
        </div>
    </div>
    <!-- Copyright Section -->
    <p class="Copyright-Section" style="background-color:bisque;">
        Copyright &#169 2022 <span style="font-style:italic"> Tayyab Hassan Tarar </span>
    </p>

</body>

</html>