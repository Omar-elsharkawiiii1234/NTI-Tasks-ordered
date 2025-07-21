<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T2</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
<?php
    $sentence="this is a bad word";
    echo "Original: ".$sentence;
    echo "<br>";
    echo "Lenght: ".strlen($sentence);
    echo "<br>";
    echo "Replace: ".str_replace("bad","****",strtolower($sentence));
    echo "<br>";
    echo "Sub: ".substr($sentence,0,10);
    echo "<br>";
    echo "Capital First: ".ucfirst($sentence);
    echo "<br>";
    echo "Capital All: ".strtoupper($sentence);
?>




    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>