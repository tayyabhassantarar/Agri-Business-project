<!DOCTYPE html>
<html>

<head>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        .product-card-buttons {
            margin: 10px 0;
        }

        button {
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
        }

        img {
            width: 100%;
        }
    </style>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project0097";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT ProductName, ProductPrice, ProductCode, Availability, ProductDiscount, ProductBrands, ProductImage FROM products";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="card">
            <h1 class="title">' . $row["ProductName"] . '</h1>
            <p class="price">$' . $row["ProductPrice"] . '</p>
            <p>Code: ' . $row["ProductCode"] . '</p>
            <p>Availability: ' . $row["Availability"] . '</p>
            <p>Discount: ' . $row["ProductDiscount"] . '%</p>
            <p>Brand: ' . $row["ProductBrands"] . '</p>
            <div class="product-card-buttons">
              <button>Add to Cart</button>
              <button>Description</button>
            </div>
          </div>';
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>

</body>

</html>