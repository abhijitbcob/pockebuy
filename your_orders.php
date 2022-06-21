<?php
session_start();

include 'config-db.php';
$collection = $dbConnection->pockebuy->users;
$user = $collection->findOne(['email' => $_SESSION['email']]);

$orders = $user->orders;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products list</title>
    <link rel="stylesheet" href="./dist/app.css">
    <link rel="shortcut icon" href="#" type="image/x-icon">
</head>

<body>
    <?php include 'header.php' ?>
    <div class="container">
        <table class="w-full mt-7">
            <thead class="bg-black">
                <tr>
                    <th class="py-3 uppercase text-base font-bold text-white">s.no</th>
                    <th class="py-3 uppercase text-base font-bold text-white">tittle</th>
                    <th class="py-3 uppercase text-base font-bold text-white">price</th>
                    <th class="py-3 uppercase text-base font-bold text-white">Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index = 0;

                foreach ($orders as $key => $value) {
                    $product_id = $value->product_id;
                    $qty = $value->quantity;
                    $collection2 = $dbConnection->pockebuy->products;
                    $product = $collection2->findOne(['id' => $product_id]);
                    $index++ ?>

                    <tr class="bg-[#F1F1F1] text-center border-b border-[#C9C9C9] last:border-none">
                        <td class="py-3 text-base font-bold text-black"><?php echo $index ?></td>
                        <td class="py-3 text-base font-bold text-black"><?php echo $product->name ?></td>
                        <td class="py-3 text-base font-bold text-black">$ <span><?php echo $product->price ?></span></td>
                        <td class="py-3 text-base font-bold text-black"><?php echo $qty ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>


    <script src="./dist/main.js"></script>
</body>