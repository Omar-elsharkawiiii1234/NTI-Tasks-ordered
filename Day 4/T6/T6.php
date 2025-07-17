<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T6</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark">
    <?php
        $products = ["monitor" => 1200, "chair" => 1000, "headseat" => 400, "keyboard"=>300,"mouse" => 150];
        asort($products);
        ?>
        <div class="container mt-4">
            <h4 class="text-danger">Product prices</h4>
            <ul class="list-group">
                <?php foreach ($products as $product => $price): ?>
                    <li class="list-group-item d-flex justify-content-between">
                    <span><strong> <?= strtoupper($product) ?></strong></span>
                    <span class="badge bg-dark text-light rounded-pill p-1"><?=
                    $price ?> EGP</span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>





