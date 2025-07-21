<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark">
    <?php
        $getoffer=fn($price,$offer)=>"$price*$offer";
    ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4 mt-5 p-3 bg-light">
            <h3 class="text-center mb-3">Product</h3>
            <div class="card w-100">
                <div class="card-body">
                    <h5 class="card-title">User Information</h5>
                    <p class="card-text"><strong>Price Before offer:</strong>50$</p>
                    <p class="card-text"><strong>Offer:</strong> 20%</p>
                    <p class="card-text"><strong>Price After Offer:</strong> <?= $getoffer(50,.2) ?></p>
                    <a href="T3.php" type="submit" class="btn btn-primary">Back To Form</a>
                </div>
            </div>
        </div>
    </div>
</div>









    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>