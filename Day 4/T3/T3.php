<?php
        $products=[
            ["name"=>"Mohamed","department"=>"finance","salary"=>4000],
            ["name"=>"Ahmed","department"=>"HR","salary"=>8000],
            ["name"=>"Omar","department"=>"IT","salary"=>16000],
            ["name"=>"Ali","department"=>"PR","salary"=>5000],
        ];
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3-v2</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-info">
        <div class="container mt-5">
            <h2 class="text-danger mb-4">Salary of Emploees</h2>
            <table class="table table-hover table-light">
                <thead class="table-success">
                    <tr>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product){ ?>
                        <?php if ($product["salary"] > 5000){?>
                        <tr>
                        <td><?= $product["name"] ?></td>
                        <td><?= $product["department"] ?></td>
                        <td><?= $product["salary"] ?></td>
                        </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
        <script src="JS/jquery.slim.min.js"></script>
        <script src="JS/popper.min.js"></script>
        <script src="JS/bootstrap.min.js"></script>
    </body>
</html>