<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T3</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-dark text-light">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form method="POST" action="register.php" class="shadow mt-5 p-3">
                <h4 class="text-danger">Form Registeration:</h4>  
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" name="city" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </form>
            </div>
        </div>
    </div>






    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>