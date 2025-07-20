<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log In Page</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
            <?php
                $emails=["email"=>"omar@yahoo.com","pass"=>"1234"];
                if(isset($_POST["email"])){
                    if($_POST["email"]==="omar@yahoo.com"&&$_POST["pass"]==="1234"){
                        session_start();
                        $_SESSION["email"]=$_POST["email"];
                        header("Location:home.php");
                    }else{
                        echo "<div class='alert alert-danger' role='alert'>
                                   ⚠️ Wrong Email or Password! 
                                </div>";
                    }
                  }
?>
                <form method="POST"  enctype="multipart/form-data" class="shadow mt-5 p-3 was-validated">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" aria-describedby="validatedInputGroupPrepend" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="pass" class="form-control is-valid" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button  type="submit" class="btn btn-success w-100">Log In</button>
                <?php if(!isset($_POST["email"])):?>
                    <div class="text-secondary text-center mt-3">
                    omar@yahoo.com/1234
                </div>
                <?php endif;?>

            </form>
            </div>
        </div>
    </div>






    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>