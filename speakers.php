<?php

  include 'config-db.php';
  $collection = $dbConnection->pockebuy->products;
  $cursor = $collection->find( [ 'category' => "speakers" ] );

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="#">
    <title>Pockebuy e-commerce</title>
    <link rel="stylesheet" href="./dist/app.css">
</head>

<body>
    <?php include 'header.php' ?>

    <main class="pb-[120px] lg:pb-40 relative">
        <div class="container">
            <?php
                
                  foreach($cursor as $index => $product){
                    $index = $index+1;
                    $isEven = $index % 2 === 0 ? true : false;
                  ?>
            <div
                class="flex flex-col lg:flex-row justify-between items-center gap-y-8 md:gap-y-[52px] lg:gap-x-20 mt-16 md:mt-[120px] lg:mt-40">
                <picture class="<?php 
                        if($isEven === true) {
                          echo "lg:order-2";
                        }
                      ?>">
                    <source media="(min-width: 1024px)" srcset="<?php echo $product->categoryImage->desktop ?>">
                    <source media="(min-width: 768px)" srcset="<?php echo $product->categoryImage->tablet ?>">
                    <img class="lg:max-w-[540px] w-full rounded" src="<?php echo $product->categoryImage->mobile ?>"
                        alt="xx99 headphone">
                </picture>
                <div class="
                      <?php 
                        if($isEven === true) {
                          echo "lg:order-1";
                        }
                      ?>
                      max-w-327 md:max-w-573 lg:max-w-445 text-center lg:mx-0 lg:text-left">
                    <h1 class="uppercase text-36 md:text-5xl text-black tracking-wide"><?php echo $product->name ?>
                    </h1>
                    <p class="mt-6 text-base font-medium leading-25 text-black text-opacity-50">
                        <?php echo $product->description ?>
                    </p>
                    <a href="./single-product.php?id=<?php echo $product->id ?>"
                        class="btn-type-1 btn-type-1--brand mt-10">see product</a>
                </div>
            </div>
            <?php 
                  }
              ?>

            <?php include 'category_block.php' ?>
            <?php include 'static_article.php' ?>
        </div>
    </main>

    <?php include 'footer.php' ?>

    <script src="./dist//main.js"></script>
</body>

</html>