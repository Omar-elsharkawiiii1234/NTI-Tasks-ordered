<?php
    $arr=[
        "name"=>"omar",
        "age"=>20,
        "job"=>"engineer"
    ];
    echo count($arr)."<br>";
    if(in_array("engineer",$arr)){
        echo "exist";
    }else{
        echo "not exist";
    }
    echo "<br>";
    print_r(array_keys($arr));
    echo "<br>";
    print_r( array_values($arr))."<br>";
    ?>


















