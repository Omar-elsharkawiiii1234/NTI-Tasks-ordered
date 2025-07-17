<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body class="bg-info">
    
    <!-- task one -->
     <!-- table  -->
     <?php
        $products=[
            ["name"=>"laptop","price"=>5000,"quantity"=>3],
            ["name"=>"phone","price"=>1200,"quantity"=>10],
            ["name"=>"tablet","price"=>8000,"quantity"=>4],
        ];
        $persons=[
            "Name"=>"Omar",
            "Job Title"=>"FRONTEND DEVOLEPER",
            "Department"=>"UI/UX",
            "Salary"=>"10,000 EGP"
        ];
    ?>
    <div class="container mt-5">
        <div class="row">
             <table class="table table-dark table-hover ">
                <thead class="table-danger text-dark">
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>   
                        <?php 
                            foreach($products as $product){
                        ?>
                            <tr>
                                <td><?php echo $product["name"]?></td>
                                <td><?php echo $product["price"]?></td>
                                <td><?php echo $product["quantity"]?></td>
                            </tr>
                        <?php }?>
                    
                </tbody>
            </table>
    
        </div>

        <!-- task two  -->
        <div class="row">
            <div class="col-12">
                <ul class="list-group">
                    <?php foreach($persons as $person =>$value){?>
                    <li class="list-group-item">
                        <h4 class="d-inline"><?= $person ?> :</h4>
                        <p class="d-inline"><?= $value?> </p>
                    </li> 
                    <?php }?>
                </ul>
             </div>
        </div>
    </div> 

    
    <script src="JS/jquery.slim.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
</body>
</html>





