<?php
function total($x,$y,$z){
    return $x+$y+$z;
}
function tax($price,$tax){
    return $price+$tax;
}
echo "<div class='alert alert-primary w-75 mt-5 mx-auto' role='alert'>
  the total price is:". total(5,14,16)."
</div>";
echo "<div class='alert alert-danger w-75 mt-5 mx-auto' role='alert'>
  the total  price after tax is:".tax(total(5,14,16),20)."
  </div>" ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T1</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
<script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>