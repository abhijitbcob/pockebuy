<?php

include "../config-db.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Methods,Content-Type,Access-Control-Allow-Headers,Authorization, X-Requested-With');

$data=json_decode(file_get_contents("php://input"),true);

// MongoDB collection
$collection = $dbConnection->pockebuy->orders;

$formData = [
    "name" => $data["name"],
    "email" => $data["email"],
    "phone" => $data["phone"],
    "address" => $data["address"],
    "pin" => $data["pin"],
    "country" => $data["country"],
    "paymentMethod" => $data["paymentMethod"],
];


if($collection->insertOne($formData)){
    echo json_encode(array('message'=>'Record Inserted!','status'=>true));

}else{
    echo json_encode(array('message'=>'Unsuccessful to insert Record!','status'=>false));
}