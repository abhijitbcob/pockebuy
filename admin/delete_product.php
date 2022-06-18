<?php
include "config.php";

$product_id = $_GET['id'];

$collection = $dbConnection->pockebuy->products;
$allProducts = $collection->deleteOne(['id' => $product_id]);

header("location: {$hostname}/admin/products_list.php");