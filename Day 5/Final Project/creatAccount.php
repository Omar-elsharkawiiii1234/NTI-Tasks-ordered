<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creat Account</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
    <?php 
        if($_SERVER["REQUEST_METHOD"]==="POST"&&isset($_FILES["image"])){
            $name=$_FILES["image"]["name"];
            $tmp=$_FILES["image"]["tmp_name"];
            move_uploaded_file($tmp,"uploads/$name");
            $postname=$_POST["name"];
            $postemail=$_POST["email"];
                echo "      
                         <div class='container d-flex justify-content-center mt-3'>
                         <div class='card text-dark' style='width: 18rem;'>
                         <img src='uploads/$name' class='card-img-top'>
                         <div class='card-body'>
                         <h5 class='card-title'>User Information</h5>
                         <p class='card-text'> $postname</p>
                         <p class='card-text'> $postemail</p>
                         <a href='product.php' class='btn btn-primary'>Go To Product</a>
                         </div>
                         </div>
                         </div>
                         <div class='container d-flex justify-content-center mt-3'>
                            <div class='alert alert-success text-center w-50' role='alert'>
                            ✅ Your email has been created
                            </div>
                        </div>
                ";
            }
            // }else{
                // echo " <div class='alert alert-success' role='alert'>
                //         ❌ Please Choose The Right Extention!
                //         </div>";
            // } 
        // else{
        //     echo " <div class='alert alert-success' role='alert'>
        //     ❌ Please Upload An Image!
        //     </div>";
        // }
    ?>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form method="POST"  enctype="multipart/form-data" class="shadow mt-5 p-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" required name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" required name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="custom-file my-4">
                    <input type="file" class="custom-file-input" acept="image/*" name="image">
                    <label class="custom-file-label" for="validatedInputGroupCustomFile">Choose Image...</label>
                  </div>
                <button type="submit" class="btn btn-success w-100">Creat Account</button>
            </form>
            </div>
        </div>
        <?php
        if(isset($_POST["email"])){
         session_start();
         $_SESSION["email"]=$_POST["email"];
        }
        ?>
    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>