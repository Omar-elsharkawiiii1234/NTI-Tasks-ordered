<?php
    $front=["HTML","CSS","JS","PHP"];
    array_push($front,"MYSQL");
    array_unshift($front,"Git");
    array_shift($front);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T5</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-success">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-light">Courses</h2>
                <ul class="list-group  text-light">
                    <?php foreach($front as $element){?>
                    <li class="list-group-item bg-dark"><?php echo $element ?> </li>
                    <?php }?>
                </ul>
            </div> 
        </div>
    </div>



<script src="JS/jquery.slim.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>   
</body>
</html>