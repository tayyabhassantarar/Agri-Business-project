<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <style>
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
    </style>
</head>

<body>
    <div class="btn-container">
        <a class="btn" aria-current="page" href="homepage2.php" style="background-color:rgb(124, 202, 202)">
            Home</a>
    </div>


    <div class="center">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h2>Login</h2>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Submit">

            <a class="nav-link" href="signup3.php"
                style="margin-left:25px;text-align:center;color:gray;background-color:antiquewhite; border-radius:7px;">
                Sign Up </a>

        </form>
    </div>
</body>

</html>

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
        header("Location: signup3.php");
    }
}
?>