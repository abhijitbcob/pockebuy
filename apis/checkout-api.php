<?php

session_start();

include "../config-db.php";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Methods,Content-Type,Access-Control-Allow-Headers,Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

// MongoDB collection
$collection = $dbConnection->pockebuy->orders;
$collection2 = $dbConnection->pockebuy->users;

$user = $collection2->findOne(['email' => $_SESSION['email']]);
$orders = $user->orders;

$ordersFromCheckout = $data["orders"];


$order_update = [
    "orders" => $ordersFromCheckout
];

$updateUser = $collection2->updateOne(
    ['email' => $_SESSION['email']],
    ['$set' => $order_update]
);

$formData = [
    "name" => $data["name"],
    "email" => $data["email"],
    "phone" => $data["phone"],
    "address" => $data["address"],
    "pin" => $data["pin"],
    "country" => $data["country"],
    "paymentMethod" => $data["paymentMethod"],
    "savedEmail" => $data["savedEmail"],
    "orders" => $ordersFromCheckout,
];


if ($collection->insertOne($formData)) {
    echo json_encode(array('message' => 'Record Inserted!', 'status' => true));
} else {
    echo json_encode(array('message' => 'Unsuccessful to insert Record!', 'status' => false));
}