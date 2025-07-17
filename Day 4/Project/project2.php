<?php
    $students=[
        ["name"=>"Mohamed","course"=>"PHP","grade"=>90,"status"=>"passed"],
        ["name"=>"Ahmed","course"=>"CSS","grade"=>79,"status"=>"passed"],
        ["name"=>"Nada","course"=>"MYSQL","grade"=>50,"status"=>"failed"],
        ["name"=>"Sara","course"=>"HTML","grade"=>65,"status"=>"passed"],
    ];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Project</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
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
                    <?php foreach ($students as $key){ ?>
                        <?php if ($key["grade"] >60){?>
                        <tr class="table-success">
                            <td><?= $key["name"] ?></td>
                            <td><?= $key["course"] ?></td>
                            <td><span class="badge bg-success text-light rounded-pill p-1"><?= $key["grade"] ?>%</span></td>
                            <td><?= $key["status"] ?></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                   View
                                </button>
                            </td>
                        </tr>
                    <?php }
                        else{
                    ?>
                    <tr class="table-danger">
                            <td><?= $key["name"] ?></td>
                            <td><?= $key["course"] ?></td>
                            <td><span class="badge bg-danger text-light rounded-pill p-1"><?= $key["grade"] ?>%</span></td>
                            <td><span class="table-warning rounded px-3 py-2"><?= $key["status"] ?></span></td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                   View
                                </button>
                            </td>
                        </tr>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
            <!-- modal of -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Student Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group text-center">
                        <?php foreach($students as $student){?>
                        <li class="list-group-item"><strong>Name: </strong><?php echo $student["name"]?></li>
                        <li class="list-group-item"><strong>Course: </strong><?php echo $student["course"]?></li>
                        <li class="list-group-item"><strong>Grade: </strong><?php echo $student["grade"]?> <span>%</span></li>
                        <li class="list-group-item"><strong>Status: </strong><?php echo $student["status"]?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<script src="JS/jquery.slim.min.js"></script>
<script src="JS/popper.min.js"></script>
<script src="JS/bootstrap.min.js"></script>
</body>
</html>