<?php
session_start(); 
if(!isset($_SESSION["loginstate"])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">
        <?php  
        if ($_SERVER['REQUEST_METHOD'] == 'POST' &&isset($_POST["productname"])&&isset($_POST["description"])) :
            $count = count($_FILES['image']['name']);
            $allowed = ['image/jpeg', 'image/png'];
            for($i=0;$i<$count;$i++):
                $type=$_FILES["image"]["type"][$i];
                $name=$_FILES["image"]["name"][$i];
                $tmp=$_FILES["image"]["tmp_name"][$i];
                if(in_array($type,$allowed)):
                    move_uploaded_file($tmp,"uploads/$name");
                    $proname=$_POST["productname"];
                    $prodes=$_POST["description"];
                    $useremail=$_SESSION["email"];
                    echo "      
                            <div class='d-inline-flex mt-5'>
                                <div class='card text-dark' style='width: 18rem;'>
                                    <img src='uploads/$name' class='card-img-top'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$proname<h5>
                                        <p class='card-text'>$prodes</p>
                                        <p class='card-text'>Added By:$useremail</p>
                                    </div>
                                    </div>
                        </div>";
                        endif;
                        endfor;
                        endif;
                    if(isset($_SESSION["upload"])){
                    if($_SESSION["upload"]==1){
        ?>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                        Your Image Uploaded To DataBase Succecfully!!
                    </div>
                </div>
            </div>
        </div>
        <?php }} ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form method="POST"  enctype="multipart/form-data" action="add_product.php" class="shadow mt-5 p-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="productname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="custom-file my-4">
                    <input type="file"  accept="image/*" class="custom-file-input" name="image">
                  </div>
                <button class="btn btn-success w-100">Add Product</button>
                <a href="logout.php" class="btn btn-warning w-100 mt-3">Logout</a>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
