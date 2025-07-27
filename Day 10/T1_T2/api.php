<?php
header("Content-Type:application/json");
header("Access-Control-Allow-Origin: *");
if($_SERVER["REMOTE_ADDR"]=="127.0.0.1"){
    $d=[
        "data"=>[
            [
                "message"=>"Can't Fetch Data From API"
            ]
            ],
         "connection"=>false,
        "message"=>"Fail Fetching Data"
        ];
        echo json_encode($d);
}else{
    $api=[
        "data" =>[
            [
                "name"=>"omar",
                "age"=>20,
                "city"=>"mitghamr"
            ],
            [
                "name"=>"ahmed",
                "age"=>50,
                "city"=>"cairo"   
            ],
            [
                "name" => "john",
                "age" => 30,
                "city" => "new york"
            ],
            [
                "name" => "maria",
                "age" => 25,
                "city" => "madrid"
            ],
            [
                "name" => "li",
                "age" => 40,
                "city" => "beijing"
            ],
            [
                "name" => "fatima",
                "age" => 35,
                "city" => "dubai"
            ]
            ],
            "connection"=>true,
            "message"=>"Fetching Data Successfully"
        ];
        echo json_encode($api);
}