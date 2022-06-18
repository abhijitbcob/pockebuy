<?php

include 'config.php';
$collection = $dbConnection->pockebuy->products;
$allProducts = $collection->find();

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
    <main class="py-10">
        <div class="container">
            <section>
                <div class="flex items-center justify-between">
                    <h1 class="text-3xl font-bold text-black uppercase">all products</h1>
                    <a class="text-base font-bold text-white uppercase py-3 px-6 bg-black hover:bg-[#979797] hover:text-black transition-colors"
                        href="add_product.php">add product</a>
                </div>
                <table class="w-full mt-7">
                    <thead class="bg-black">
                        <tr>
                            <th class="py-3 uppercase text-base font-bold text-white">s.no</th>
                            <th class="py-3 uppercase text-base font-bold text-white">tittle</th>
                            <th class="py-3 uppercase text-base font-bold text-white">price</th>
                            <th class="py-3 uppercase text-base font-bold text-white">edit</th>
                            <th class="py-3 uppercase text-base font-bold text-white">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $index = 0;
                        foreach ($allProducts as $product) {
                            $index++ ?>
                        <tr class="bg-[#F1F1F1] text-center border-b border-[#C9C9C9] last:border-none">
                            <td class="py-3 text-base font-bold text-black"><?php echo $index ?></td>
                            <td class="py-3 text-base font-bold text-black"><?php echo $product->name ?></td>
                            <td class="py-3 text-base font-bold text-black">$ <span><?php echo $product->price ?></span>
                            </td>
                            <td class="py-3">
                                <a class="inline-block" href="update_product.php?id=<?php echo $product->id ?>">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11 4.40015H4C3.46957 4.40015 2.96086 4.61349 2.58579 4.99326C2.21071 5.37302 2 5.88808 2 6.42515V20.6001C2 21.1372 2.21071 21.6523 2.58579 22.032C2.96086 22.4118 3.46957 22.6251 4 22.6251H18C18.5304 22.6251 19.0391 22.4118 19.4142 22.032C19.7893 21.6523 20 21.1372 20 20.6001V13.5126"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M18.5 2.88128C18.8978 2.47849 19.4374 2.2522 20 2.2522C20.5626 2.2522 21.1022 2.47849 21.5 2.88128C21.8978 3.28408 22.1213 3.83039 22.1213 4.40003C22.1213 4.96968 21.8978 5.51599 21.5 5.91878L12 15.5375L8 16.55L9 12.5L18.5 2.88128Z"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </td>
                            <td class="py-3">
                                <a class="inline-block" href="delete_product.php?id=<?php echo $product->id ?>">
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 6.42505H5H21" stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M8 6.425V4.4C8 3.86294 8.21071 3.34787 8.58579 2.96811C8.96086 2.58835 9.46957 2.375 10 2.375H14C14.5304 2.375 15.0391 2.58835 15.4142 2.96811C15.7893 3.34787 16 3.86294 16 4.4V6.425M19 6.425V20.6C19 21.1371 18.7893 21.6521 18.4142 22.0319C18.0391 22.4117 17.5304 22.625 17 22.625H7C6.46957 22.625 5.96086 22.4117 5.58579 22.0319C5.21071 21.6521 5 21.1371 5 20.6V6.425H19Z"
                                            stroke="black" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M10 11.4875V17.5625" stroke="black" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M14 11.4875V17.5625" stroke="black" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>



                    </tbody>
                </table>

            </section>
        </div>
    </main>
</body>

</html>