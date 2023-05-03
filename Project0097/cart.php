<html>

<head>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
        }

        .title {
            color: grey;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1>Product Info</h1>
        <p class="title">Product Name:
            <?php echo $ProductName; ?>
        </p>
        <p>Product Price:
            <?php echo $ProductPrice; ?>
        </p>
        <p>Product Code:
            <?php echo $ProductCode; ?>
        </p>
        <p>Availability:
            <?php echo $Availability; ?>
        </p>
        <p>Product Discount:
            <?php echo $ProductDiscount; ?>
        </p>
        <p>Product Brands:
            <?php echo $ProductBrands; ?>
        </p>
        <form action="" method="post">
            <input type="text" name="Email" placeholder="Enter Email">
            <input type="hidden" name="ProductName" value="<?php echo $ProductName; ?>">
            <input type="hidden" name="ProductPrice" value="<?php echo $ProductPrice; ?>">
            <input type="hidden" name="ProductCode" value="<?php echo $ProductCode; ?>">
            <input type="hidden" name="Availability" value="<?php echo $Availability; ?>">
            <input type="hidden" name="ProductDiscount" value="<?php echo $ProductDiscount; ?>">
            <input type="hidden" name="ProductBrands" value="<?php echo $roductBrands; ?>">
            <input type="submit" name="submit" value="Add to Cart">
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $Email = $_POST['Email'];
        $ProductName = $_POST['ProductName'];
        $ProductPrice = $_POST['ProductPrice'];
        $ProductCode = $_POST['ProductCode'];
        $Availability = $_POST['Availability'];
        $ProductDiscount = $_POST['ProductDiscount'];
        $ProductBrands = $_POST['ProductBrands'];

        $conn = mysqli_connect("localhost", "root", "", "project0097");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO cart (Email, ProductName, ProductPrice, ProductCode, Availability, ProductDiscount, ProductBrands)
              VALUES ('$Email', '$ProductName', '$ProductPrice', '$ProductCode', '$Availability', '$ProductDiscount', '$ProductBrands')";

        if (mysqli_query($conn, $sql)) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
    ?>
</body>