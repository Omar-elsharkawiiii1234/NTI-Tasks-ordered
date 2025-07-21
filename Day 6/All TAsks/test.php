<?php
$alloedtype=["image/png","image/jpeg","image/jpg"];
if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(!empty($_FILES["image"])){
        $dayfolder="uploads/".date(Y-m-d);
        if(!is_dir($dayfolder)){
            mkdir($dayfolder,0777,true);
        }
        $originname=basename($_FILES["image"]["name"]);
        $ext=pathinfo($originname,PATHINFO_EXTENTION);
        $newname=uniqid('img_',true).'.'.$ext;
        $destination="$dayfolder/$newname";
        $tmp=$_FILES["image"]["tmp_name"];
        move_uploaded_file($tmp,$destination);
        ?>
    <div class="container mt-5">
        <div class="row mx-auto">
            <div class="col-md-3">
                <img src="<?= $destination?>" alt="">
            </div>
        </div>
    </div>

        <?php
     }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark text-light">

    <form action="" enctype="multipart/form-data">
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name="image"  class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
<button type="submit">save</button>
    </form>

<script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>