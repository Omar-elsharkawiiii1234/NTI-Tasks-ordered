<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<?php
    if($_SERVER["REQUEST_METHOD"]=="GET"):
        session_start();
        if(isset($_GET["del"])){
            if($_GET["del"]=="all"){
                session_unset();
                session_destroy();
            }else if($_GET["del"]=="last"){
                array_pop($_SESSION["user"]);
            }
        }else{
          if(isset($_GET["name"])&&isset($_GET["email"])){
            $_SESSION["user"][]=[
                "name"=>$_GET["name"],
                "email"=>$_GET["email"],
            ];
          } 
        }
    endif;
?>
<body class="bg-dark text-light">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form method="GET" class="shadow mt-5 p-3">
                <h4 class="text-danger">Form Registeration:</h4>  
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name:</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-success w-100">Save</button>
            </form>
        </div>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <a href="T3.php?del=all"  class="btn btn-danger w-100">Clear Session</a>
                </div>
                <div class="col-md-4">
                    <a href="T3.php?del=last" class="btn btn-warning w-100">Remove Last</a>
                </div>
                 </div>
            </div>
        </div>
    </div>
    <?php 
        if(!empty($_SESSION["user"])):
    ?>
   <div class="container mt-5">
    <div class="row mx-auto">
        <div class="col-12">
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">User Name</th>
                <th scope="col">User Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION["user"] as $index):?>
                <tr>
                    <td><?= $index["name"]?></td>
                    <td><?= $index["email"]?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
         </table>
        </div>
    </div>
   </div>
<?php
else:?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                    NO USERS YET!
                    </div>
                </div>
            </div>
        </div>
<?php endif;?>

    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>