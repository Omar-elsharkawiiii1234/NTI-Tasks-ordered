<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T2</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body>
    <?php
        if($_SERVER["SERVER_NAME"]=="localhost"){
    ?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-success" role="alert">
                        Access goog:good host.
                    </div>
                </div>
            </div>
        </div>
        
    <?php }
        else if($_SERVER["REMOTE_ADDR"]=="127.0.0.1"){
            header("Location:denied.php");
        }
    ?>          




    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>