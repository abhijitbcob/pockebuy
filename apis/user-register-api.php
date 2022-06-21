<?php
include "../config-db.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Methods,Content-Type,Access-Control-Allow-Headers,Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$collection = $dbConnection->pockebuy->users;

$user_name = $data['name'];
$user_email = $data['email'];
$user_password = md5($data['password']);

$users = $collection->find();
$user_already_exist = false;

foreach ($users as $key => $value) {
    if ($user_email == $value->email) {
        $user_already_exist = true;
        break;
    }
}

$user_data = [
    "name" => $user_name,
    "email" => $user_email,
    "password" => $user_password,
    "orders" => [
        [
            "product_id" => "",
            "quantity" => "",
            "delivered" => false,
        ]
    ]
];

if ($user_already_exist == false) {
    if ($collection->insertOne($user_data)) {
        echo json_encode(array('message' => 'Resgistration success!', 'status' => true, 'data' => $user_data));
    } else {
        echo json_encode(array('message' => 'Registration failed!', 'status' => false, 'data' => $user_data));
    }
} else {
    echo json_encode(array('message' => "The email already exist!", 'status' => false, 'data' => $user_data));
}