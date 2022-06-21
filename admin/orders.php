<?php

include 'config.php';
$collection = $dbConnection->pockebuy->orders;
$orders = $collection->find();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products list</title>
    <link rel="stylesheet" href="../dist/app.css">
    <link rel="shortcut icon" href="#" type="image/x-icon">
</head>

<body>
    <?php include 'header.php'; ?>
    <main class="py-10">
        <div class="container">
            <section>
                <div class="flex items-center justify-between">
                    <h1 class="text-3xl font-bold text-black uppercase">all orders</h1>

                </div>
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
                        foreach ($orders as $order) {
                            foreach ($order->orders as $item) {


                                $collection2 = $dbConnection->pockebuy->products;
                                $product = $collection2->findOne(['id' => $item->product_id]);

                                $index++ ?>
                        <tr class="bg-[#F1F1F1] text-center border-b border-[#C9C9C9] last:border-none">
                            <td class="py-3 text-base font-bold text-black"><?php echo $index ?></td>
                            <td class="py-3 text-base font-bold text-black"><?php echo $product->name ?></td>
                            <td class="py-3 text-base font-bold text-black">$ <span><?php echo $product->price ?></span>
                            <td class="py-3 text-base font-bold text-black">
                                <span><?php echo $item->quantity ?></span>
                            </td>

                        </tr>
                        <?php
                            }
                        }
                        ?>



                    </tbody>
                </table>

            </section>
        </div>
    </main>
</body>

</html>