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

        form {
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type=text] {
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type=submit] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
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
    <div class="btn-container">
        <a class="btn" aria-current="page" href="homepage2.php" style="background-color:rgb(124, 202, 202)">
            Log Out</a>
    </div>
    <div class="btn-container">
        <a class="btn" aria-current="page" href="dashboard.html" style="background-color:rgb(124, 202, 202)">
            Dash Board</a>
    </div>
    <!-- DashBoard -->

    <div class="grid col-12">

        <div class="row">
            <div class="col-2"
                style=" background-color:blanchedalmond;border-radius:20px;margin-top:20px;margin-left:15px;">
                <div class="container">
                    <h3 style="text-align:center;"> Products Menu </h3>
                    <div class="btn-container">
                        <a class="btn" aria-current="page" href="addproducts2.php">Add Products</a>
                    </div>

                    <div class="btn-container">
                        <a class="btn" aria-current="page" href="deleteproducts.php">Delete Products</a>
                    </div>

                    <div class="btn-container">
                        <a class="btn" aria-current="page" href="displayproducts.php">Display Products</a>
                    </div>

                    <div class="btn-container">
                        <a class="btn" aria-current="page" href="homepage.html"
                            style="background-color:rgb(124, 202, 202)"> Log Out</a>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="container">

                    <form action="" method="post">
                        <label>Product Name:</label>
                        <input type="text" name="ProductName" required>

                        <label>Product Code:</label>
                        <input type="text" name="ProductCode" required>

                        <label>Product Discount:</label>
                        <input type="text" name="ProductDiscount" required>

                        <input type="submit" name="delete" value="Delete">
                    </form>

                    <?php
                    if (isset($_POST['delete'])) {
                        $ProductName = $_POST['ProductName'];
                        $ProductCode = $_POST['ProductCode'];
                        $ProductDiscount = $_POST['ProductDiscount'];

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "project0097";

                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        $sql = "DELETE FROM products WHERE ProductName='$ProductName' AND ProductCode='$ProductCode' AND ProductDiscount='$ProductDiscount'";

                        if (mysqli_query($conn, $sql)) {
                            echo "Record deleted successfully";
                        } else {
                            echo "Error deleting record: " . mysqli_error($conn);
                        }

                        mysqli_close($conn);
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright Section -->
    <p class="Copyright-Section" style="background-color:bisque;">
        Copyright &#169 2022 <span style="font-style:italic"> Tayyab Hassan Tarar </span>
    </p>

</body>

</html>