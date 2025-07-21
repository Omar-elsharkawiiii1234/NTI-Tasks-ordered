<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T5</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
    <?php
        $folder='uploads/'.date('Y-m-d').'/';
        $images=glob($folder."*.{png,jpg,jpeg}",GLOB_BRACE);
        ?>
            <div class="container mt-5">
                <div class="row d-flex justify-content-center">
                    <?php  for($i=0;$i<count($images);$i++):?>
                        <img src="<?= $images[$i] ?>" class="w-25 mx-1" alt="">
                        <?php endfor;?>
                </div>
            </div>

    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>