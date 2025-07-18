<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T1</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-success p-5 text-light">
    <?php 
        $allowed=["image/jpeg","image/png"];
        if($_SERVER["REQUEST_METHOD"]=="POST"&&isset($_FILES["image"])){
           for($i=0;$i<count($_FILES["image"]["name"]);$i++){
            if(in_array($_FILES["image"]["type"][$i],$allowed)){
                $name=$_FILES["image"]["name"][$i];
                $tmp=$_FILES["image"]["tmp_name"][$i];
                move_uploaded_file($tmp,"uploads/$name");
                echo "
                            <img src='uploads/$name' class='rounded w-25 h-25 mt-3'>
                ";
        }
        else{
            echo "<div class='alert alert-danger' role='alert'>This is not the right extention</div>";
        }
    }
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Your Image:</label>
                        <input type="file" multiple name="image[]" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>





    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>