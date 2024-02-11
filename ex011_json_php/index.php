<?php 
    $jsonobj = file_get_contents('dados.json');
    $obj = json_decode($jsonobj,true);
    // print_r($obj);
    foreach($obj["clientes"] as $cliente){
        echo $cliente["id"] . " - " . $cliente["nome"]."<br>";
    }
    // echo $obj["id:1"]."<br>";
    // echo $obj["id:2"];
    
?>