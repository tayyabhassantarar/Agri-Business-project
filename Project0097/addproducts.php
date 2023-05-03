<html>

<head>
    <style>
        form {
            padding: 20px;
            background-color: lightgray;
            border-radius: 10px;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin: 10px;
            width: 100%;
            border-radius: 5px;
            border: none;
        }

        select {
            padding: 10px;
            margin: 10px;
            width: 100%;
            border-radius: 5px;
            border: none;
        }

        input[type="submit"] {
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>

<body style=" background-color: rgb(255, 248, 239);">


    <form action="" method="post">
        <h1> Insert New Products </h1>
        <input type="text" name="ProductName" placeholder="Product Name">
        <input type="number" name="ProductPrice" placeholder="Product Price">
        <input type="text" name="ProductCode" placeholder="Product Code">
        <select name="Availability">
            <option value="">Select Availability</option>
            <option value="In Stock">In Stock</option>
            <option value="Out of Stock">Out of Stock</option>
        </select>
        <input type="number" name="ProductDiscount" placeholder="Product Discount">
        <input type="text" name="ProductBrands" placeholder="Product Brands">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $ProductName = $_POST['ProductName'];
        $ProductPrice = $_POST['ProductPrice'];
        $ProductCode = $_POST['ProductCode'];
        $Availability = $_POST['Availability'];
        $ProductDiscount = $_POST['ProductDiscount'];
        $ProductBrands = $_POST['ProductBrands'];

        $connection = mysqli_connect("localhost", "root", "", "project0097");
        $query = "INSERT INTO products (ProductName, ProductPrice, ProductCode, Availability, ProductDiscount, ProductBrands) VALUES ('$ProductName', '$ProductPrice', '$ProductCode', '$Availability', '$ProductDiscount', '$ProductBrands')";
        $result = mysqli_query($connection, $query);

        if ($result) {
            echo "Data inserted successfully!";
        } else {
            echo "Insertion failed.";
        }
    }
    ?>
</body>

</html>
<!-- Copyright Section -->
<p class="Copyright-Section" style=" margin-top: 100px;background-color:bisque;">
    Copyright &#169 2022 <span style="font-style:italic"> Tayyab Hassan Tarar </span>
</p>