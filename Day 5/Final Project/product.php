<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
        <?php  
            session_start(); 
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
        ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form method="POST"  enctype="multipart/form-data" class="shadow mt-5 p-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="productname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="custom-file my-4">
                    <input type="file" multiple accept="image/*" class="custom-file-input" name="image[]">
                    <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose Images...</label>
                  </div>
                <button type="submit" class="btn btn-success w-100">Add Product</button>
            </form>
            </div>
        </div>
    </div>
<script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>
