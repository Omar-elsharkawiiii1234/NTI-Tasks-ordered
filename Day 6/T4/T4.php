<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T4</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $folder = 'uploads/' . date('Y-m-d') . '/';
    if (!file_exists($folder)) mkdir($folder, 0777, true);
    $fileName = basename($_FILES['image']['name']);
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $new_name = uniqid('img_' , true) . '.' . $ext;
    $target = $folder . $new_name;
    $allowed = ['image/jpeg', 'image/png'];
    if (in_array($_FILES['image']['type'], $allowed)) {
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    ?>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12">
                <div class="alert alert-success" role="alert">
                    <?= "Upload file to:$target"?>
                 </div>
            </div>
        </div>
    </div>
    <?php
    } else {
        ?>
        <div class="container mt-5">
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <div class="alert alert-danger" role="alert">
                        <?= "invalid type of image check it out"?>
                     </div>
                </div>
            </div>
        </div>
  <?php
    }
}
?>
<body class="bg-dark text-light">
    <div class="container mt-5">
        <div class="row d-flex justify-content-md-center">
            <div class="col-md-4">
                <form method="POST" enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label"  for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose image</label>
                    </div>
                 </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="../T6/T6.php" class="btn btn-primary">Go To Images Table</a>
                 </form>
            </div>
        </div>
    </div>
    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>