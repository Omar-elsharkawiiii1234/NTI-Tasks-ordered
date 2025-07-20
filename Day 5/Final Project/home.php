<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
        <div class='alert col-md-6 alert-success' role='alert'>
                    ✅ Welcome:<?php 
                        session_start();
                        echo $_SESSION["email"];
                    ?>!
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6  shadow mt-5 p-3 d-flex justify-content-center">
                <a href="login.php"  class="btn btn-primary">Log Out</a>
                <a href="product.php" class="btn btn-primary mx-3">Creat Product</a>
                <a href="creatAccount.php" class="btn btn-primary">Creat Account</a>
            </div>
        </div>
    </div>






    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>