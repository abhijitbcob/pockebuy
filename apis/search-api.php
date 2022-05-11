<?php
    include "../config-db.php";

    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');

    $data=json_decode(file_get_contents("php://input"),true);

    //$search_value=$data['search'];
    //or alternative method is pass value in url bar
    $search_value= isset($_GET['search'])? $_GET['search'] : die();


    // MongoDB collection
    $collection = $dbConnection->pockebuy->products;

    $mongoRegex = new MongoDB\BSON\Regex("$search_value", "i");

    // This matches with any fieldName that STARTS with the string:
    // $mongoRegex = new MongoDB\BSON\Regex("^$string", "i");
    
    $cursor = $collection->find( [ 'name' => $mongoRegex ] );
    
    $docs = [];
    
    foreach($cursor as $doc){
         $docs[] = $doc;
    }

    // Sending JSON output as response
    echo json_encode($docs);

?>