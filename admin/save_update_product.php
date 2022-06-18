<?php
include 'config.php';
session_start();

$id = $_SESSION["id"];
$collection = $dbConnection->pockebuy->products;
$product = $collection->findOne(['id' => $id]); // Getting existing product details


$slug = $_POST['slug'];
$name = htmlspecialchars($_POST['name']);
$category = htmlspecialchars($_POST['category']);
$new = true;
$price = htmlspecialchars($_POST['price']);

$description = htmlspecialchars($_POST['description']);
$features = htmlspecialchars($_POST['features']);

$item1 = htmlspecialchars($_POST['item1Name']);
$item1_Qty = htmlspecialchars($_POST['item1Quantity']);
$item2 = htmlspecialchars($_POST['item2Name']);
$item2_Qty = htmlspecialchars($_POST['item2Quantity']);
$item3 = htmlspecialchars($_POST['item3Name']);
$item3_Qty = htmlspecialchars($_POST['item3Quantity']);


$mainImageName = '';
$productImageMobile = '';
$productImageTablet = '';
$productImageDesktop = '';


function updateGallery($target1, $target2, $target3)
{
    unlink($target1);
    unlink($target2);
    unlink($target3);

    move_uploaded_file($file_tmp, $target1);
    chmod($target1, 0777);
    copy($target1, $target2);
    copy($target1, $target3);
}

foreach ($_FILES as $key => $value) {
    if (isset($_FILES[$key]) && $_FILES[$key]['size']) {
        // print_r($_FILES[$key]);
        // continue;
        $file_name = $_FILES[$key]['name'];
        $arr = explode(" ", $file_name);
        $file_name = join("-", $arr);
        $file_ext = explode('.', $file_name)[1];
        $file_tmp = $_FILES[$key]['tmp_name'];
        $target = '';

        if ($key == "productImageMobile") {
            $target = "../assets//product-" . $slug . "/mobile/" . $file_name;
            $productImageMobile = "./assets/" . $slug . "/mobile/" . $file_name;
            $mainImageName = $file_name;
            $target2 = "../assets/cart/image-" . $slug . "." . $file_ext;

            // Updating image
            // If the user file in existing directory already exist, delete it
            $existingPath = '.' . $product->image->mobile;
            if (file_exists('.' . $product->image->mobile)) {
                unlink($existingPath);
            }
            move_uploaded_file($file_tmp, $target);
            chmod($target, 0777);
            copy($target, $target2);
        }
        if ($key == "productImageTablet") {
            $target = "../assets//product-" . $slug . "/tablet/" . $file_name;
            move_uploaded_file($file_tmp, $target);
            $productImageTablet = "./assets/" . $slug . "/tablet/" . $file_name;
            $mainImageName = $file_name;

            // Updating image
            // If the user file in existing directory already exist, delete it
            $existingPath = '.' . $product->image->tablet;
            if (file_exists('.' . $product->image->tablet)) {
                unlink($existingPath);
            }
            move_uploaded_file($file_tmp, $target);
        }
        if ($key == "productImageDesktop") {
            $target = "../assets/product-" . $slug . "/desktop/" . $file_name;
            $productImageDesktop = "./assets/" . $slug . "/desktop/" . $file_name;
            $mainImageName = $file_name;

            // Updating image
            // If the user file in existing directory already exist, delete it
            $existingPath = '.' . $product->image->desktop;
            if (file_exists($existingPath)) {
                unlink($existingPath);
            } else {
                unlink('.' . $product->image->desktop);
            }
            echo $target;
            move_uploaded_file($file_tmp, $target);
        }

        if ($key == "gallery1") {
            $target1 = "../assets/product-" . $slug . "/desktop/image-gallery-1." . $file_ext;
            $target2 = "../assets/product-" . $slug . "/tablet/image-gallery-1." . $file_ext;
            $target3 = "../assets/product-" . $slug . "/mobile/image-gallery-1." . $file_ext;

            // Updating image
            updateGallery($target1, $target2, $target3);
        }
        if ($key == "gallery2") {
            $target1 = "../assets/product-" . $slug . "/desktop/image-gallery-2." . $file_ext;
            $target2 = "../assets/product-" . $slug . "/tablet/image-gallery-2." . $file_ext;
            $target3 = "../assets/product-" . $slug . "/mobile/image-gallery-2." . $file_ext;

            // Updating image
            updateGallery($target1, $target2, $target3);
        }
        if ($key == "gallery3") {
            $target1 = "../assets/product-" . $slug . "/desktop/image-gallery-3." . $file_ext;
            $target2 = "../assets/product-" . $slug . "/tablet/image-gallery-3." . $file_ext;
            $target3 = "../assets/product-" . $slug . "/mobile/image-gallery-3." . $file_ext;

            // Updating image
            updateGallery($target1, $target2, $target3);
        }
    }
}

die();

// Saving to database
$collection = $dbConnection->pockebuy->products;

$updateResult = $collection->updateOne(
    ['id' =>  ''],
    ['$set' => ['name' => 'Brunos on Astoria']]
);

$insertOneResult = $collection->insertOne([
    'id' => $id,
    'slug' => $slug,
    'name' => $name,
    "image" => [
        "mobile" => $productImageMobile,
        "tablet" => $productImageTablet,
        "desktop" => $productImageDesktop
    ],
    'category' => $category,
    "categoryImage" => [
        "mobile" => "./assets/" . $slug . "/mobile/" . $mainImageName,
        "tablet" => "./assets/" . $slug . "/tablet/" . $mainImageName,
        "desktop" => "./assets/" . $slug . "/desktop/" . $mainImageName
    ],
    'new' => $new,
    'price' => $price,
    'description' => $description,
    'features' => $features,

    "includes" => [
        [
            "quantity" => $item1_Qty,
            "item" => $item1
        ],
        [
            "quantity" => $item2_Qty,
            "item" => $item2
        ],
        [
            "quantity" => $item3_Qty,
            "item" => $item3
        ]
    ],

    'gallery' => [
        'first' => [
            "mobile" => "./assets/" . $slug . "/mobile/image-gallery-1.jpg",
            "tablet" => "./assets/" . $slug . "/tablet/image-gallery-1.jpg",
            "desktop" => "./assets/" . $slug . "/desktop/image-gallery-1.jpg"
        ],
        'second' => [
            "mobile" => "./assets/" . $slug . "/mobile/image-gallery-2.jpg",
            "tablet" => "./assets/" . $slug . "/tablet/image-gallery-2.jpg",
            "desktop" => "./assets/" . $slug . "/desktop/image-gallery-2.jpg"
        ],
        'third'  => [
            'mobile' => "./assets/" . $slug . "/mobile/image-gallery-3.jpg",
            'tablet' => "./assets/" . $slug . "/tablet/image-gallery-3.jpg",
            'desktop' => "./assets/" . $slug . "/desktop/image-gallery-3.jpg"
        ]
    ],

]);


// header("Location: {$hostname}/admin/products_list.php");