<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T1</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
             <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Key</th>
                    <th scope="col">value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">PHP_SELF</th>
                    <td><?php echo $_SERVER["PHP_SELF"] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">SERVER_NAME</th>
                    <td><?php echo $_SERVER["SERVER_NAME"] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">HTTP_HOST</th>
                    <td><?php echo $_SERVER["HTTP_HOST"] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">USER_AGENT</th>
                    <td><?php echo $_SERVER["HTTP_USER_AGENT"] ?></td>
                    </tr>
                    <tr>
                    <th scope="row">REQUEST_METHOD</th>
                    <td><?php echo $_SERVER["REQUEST_METHOD"] ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>






    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>