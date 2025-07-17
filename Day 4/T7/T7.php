<?php
 $persons=[
    "Mona"=>6000,
    "Tarek"=>7000,
    "Ziad"=>5500,
    "Omar"=>4000,
    "Ahmed"=>3000,
];
$passed=array_filter($persons,function($sal){
    return $sal>=5000;
});
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-info">
<div class="container mt-5">
        <!-- list  -->
        <div class="row">
        <div class="col-12">
                <ul class="list-group">
                    <?php foreach($passed as $person =>$value){?>
                    <li class="list-group-item d-flex justify-content-between">
                        <h4 class="d-inline text-bold"><?= $person ?></h4>
                        <p class="d-inline badge bg-dark text-light rounded-pill p-1"><?= $value?> </p>
                    </li> 
                    <?php }?>
                </ul>
                <h4 class="text-light">Passed persons count is: <?php echo count($passed)?></h4>
             </div>
        </div>
        <!-- table  -->
        <div class="row mt-5">
             <table class="table table-dark table-hover ">
                <thead class="table-danger text-dark">
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Salary</th>
                    </tr>
                </thead>
                <tbody>   
                        <?php 
                            foreach($passed as $person =>$salary){
                        ?>
                            <tr>
                                <td><?php echo $person?></td>
                                <td><?php echo $salary?></td>
                            </tr>
                        <?php }?>
                </tbody>
            </table>
            <h4 class="text-light">Passed persons count is: <?php echo count($passed)?></h4>
        </div>
    </div>
                    







<script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>