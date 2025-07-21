<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T5</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <style>
        .volume{
            width:25px;
            height:25px;
        }
    </style>
</head>
<body class="bg-dark text-light">
    <?php
        $target=$_GET["delete"];
        if(file_exists($target)){
            unlink($target);
            ?>
            <div class="container mt-5">
                <div class="row mx-auto">
                    <div class="col-12">
                    <div class="alert alert-success" role="alert">
                      <?= $target?> Image deleted succesfuly
                    </div>
                    </div>
                </div>
            </div>
            <?php
        }else if(!isset($_GET["delete"])){?>
            <div class="container mt-5">
                <div class="row mx-auto">
                    <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                      <?= $target?> No Image Sent to this page
                    </div>
                    </div>
                </div>
            </div>
            <?php
        }else{?>
    <div class="container mt-5">
        <div class="row mx-auto">
            <div class="col-12">
            <div class="alert alert-warning" role="alert">
            <?= $target?> File not found
            </div>
            </div>
        </div>
    </div>

<?php
        }
        $folder='uploads/'.date('Y-m-d').'/';
        $images=glob($folder."*.{png,jpg,jpeg}",GLOB_BRACE);
        ?>
            <div class="container mt-5">
                <div class="row d-flex justify-content-center">
                <table class="table">
                    <thead class="table-light text-dark text-center">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">image path</th>
                        <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody class="table-danger text-center">
                        <?php  for($i=0;$i<count($images);$i++):?>
                        <tr>
                            <td>
                                <?= $i?>
                            </td>
                            <td>  
                                <img src="<?= $images[$i] ?>" class="volume mx-1" alt="">
                                <br>
                                <p><?= $images[$i]?></p>
                            </td>
                            <td>
                                <a href="T6.php?delete=<?=$images[$i]?>" class="btn btn-danger px-1 py-2">delete </a>
                            </td>
                        </tr>
                        <?php endfor;?>
                    </tbody>
                </table>
            </div>
        </div>
        <a href="T4.php" class="btn btn-primary">Go To Images Submitions</a>
                <script src="JS/jquery.slim.min.js"></script>
                <script src="JS/popper.min.js"></script>
                <script src="JS/bootstrap.min.js"></script>
            </body>
            </html>