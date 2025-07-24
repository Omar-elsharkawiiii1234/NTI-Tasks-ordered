<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="bg-info">
    <div class="container mt-5">
        <form method="POST" action="check.php" class="shadow-sm card p-4">
                <?php
                session_start();
                if(isset($_SESSION["loginstate"])){
                    if($_SESSION["loginstate"]==0){?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>OOPS!</strong> Your might enter a wrong email or password.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                    }
                }
                ?>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button class="btn btn-success">login</button>
        <p class="mt-3 ">Dont't Have an account:<a href="register.php" class="btn btn-primary mt-3">Register Now!</a></p>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>