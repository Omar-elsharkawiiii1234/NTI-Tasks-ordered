<?php
    $students=[
        ["name"=>"Mohamed","course"=>"PHP","grade"=>90],
        ["name"=>"Ahmed","course"=>"CSS","grade"=>79,],
        ["name"=>"Nada","course"=>"MYSQL","grade"=>50,],
        ["name"=>"Sara","course"=>"HTML","grade"=>65,],
    ];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">  
<div class="container mt-5">
    <table class="table text-center">
    <thead class="table-dark text-light">
            <tr>
            <th scope="col">Name</th>
            <th scope="col">Course</th>
            <th scope="col">Grade</th>
            <th scope="col">Status</th>
            <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student=> $key){ ?>
                <tr class="<?= $key["grade"]>60? 'table-success':'table-danger' ?>">
                    <td><?= $key["name"] ?></td>
                    <td><?= $key["course"] ?></td>
                    <td><span class="badge  <?= $key["grade"]>60? 'bg-success':'bg-danger' ?> text-light rounded-pill p-1"><?= $key["grade"] ?>%</span></td>
                    <td><?= $key["grade"]>60?"Passed":"Failed" ?></td>
                    <td>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal<?= $student ?>">
                    View
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="modal<?= $student ?>" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Student Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Name:</strong> <?= $key['name'] ?></p>
                            <p><strong>Course:</strong> <?= $key['course'] ?></p>
                            <p><strong>Grade:</strong> <?= $key['grade'] ?>%</p>
                            <p><strong>Status:</strong> <?= $key['grade'] < 60 ? 'Failed' : 'Passed' ?></p>
                        </div>
                        </div>
                    </div>
                    </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>