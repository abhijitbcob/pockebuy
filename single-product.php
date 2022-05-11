<?php
    include 'config-db.php';

    $product_id = $_GET['id'];
    $collection = $dbConnection->pockebuy->products;
    $product_id = (int)$product_id;
    $product = $collection->findOne(['id'=> $product_id]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
    <title><?php echo $product->name ?></title>
    <link rel="stylesheet" href="./dist/app.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <main class="pt-4 md:pt-[33px] lg:pt[79px] pb-[120px] lg:pb-40 relative">
        <div class="container">
            <a href="headphones.html" class="capitalize text-sm text-black text-opacity-50 leading-25">go back</a>
            <div
                class="flex flex-col md:flex-row justify-between md:items-center gap-y-8 md:gap-x-17 lg:gap-x-20 mt-16 md:mt-6 lg:mt-14">
                <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $product->image->desktop ?>">
                    <source media="(min-width: 768px)" srcset="<?php echo $product->image->tablet ?>">
                    <img class="md:max-w-[280px] lg:max-w-[540px] w-full rounded"
                        src="<?php echo $product->image->mobile ?>" alt="<?php echo $product->name ?>">
                </picture>

                <div class="md:max-w-[340px] lg:max-w-445 lg:mx-0 lg:text-left">
                    <?php 
                        if($product->new == true){
                            echo "<p class='uppercase text-xs font-normal tracking-widest text-brand mb-4'>new product</p>";
                        }
                    ?>


                    <h2
                        class="uppercase font-bold text-2xl tracking-1 lg:text-4xl lg:leading-44 lg:tracking-1.5 text-black">
                        <?php echo $product->name ?>
                    </h2>
                    <p class="mt-6 text-base font-medium leading-25 text-black text-opacity-50">
                        <?php echo $product->description ?>
                    </p>
                    <span class="block text-lg tracking-1.3 font-bold mt-6 lg:mt-8">$
                        <?php echo $product->price ?></span>

                    <div class="atc-box flex items-center gap-4 mt-[31px] lg:mt-[47px]">
                        <div
                            class="px-[15.5px] py-3.75 bg-light-grey flex items-center gap-5 w-[120px] justify-between">
                            <button
                                class="decrease-qty-btn text-lg leading-[1] p-1 text-black text-opacity-25 font-bold w-4 h-[18px] flex items-center hover:text-brand active:text-brand">-</button>
                            <span class="product-qty-elem text-tiny font-bold tracking-1">1</span>
                            <button
                                class="increase-qty-btn text-lg leading-[1] p-1 text-black text-opacity-25 font-bold w-4 h-[18px] flex items-center hover:text-brand active:text-brand">+</button>
                        </div>
                        <button data-id="<?php echo $product->id ?>" data-name="<?php echo $product->name ?>"
                            data-slug="<?php echo $product->slug ?>" data-price="<?php echo $product->price ?>"
                            data-qty="1" class="atc-btn btn-type-1 btn-type-1--brand">add to cart</button>
                    </div>
                </div>
            </div>

            <!-- PRODUCT DESCRIPTION -->
            <div
                class="mt-[88px] md:mt-[120px] lg:mt-40 flex flex-col lg:flex-row gap-y-[88px] md:gap-y-[120px] lg:gap-x-[125px]">
                <article class="lg:max-w-635">
                    <h3 class="uppercase text-xl md:text-3xl font-bold leading-9 tracking-0.86 md:tracking-1.15">
                        features</h3>
                    <p class="text-sm leading-25 text-black text-opacity-50 mt-6 md:mt-8">
                        <?php echo $product->features ?>
                    </p>
                </article>

                <article class="flex flex-shrink-0 flex-col md:flex-row lg:flex-col gap-8 md:gap-[170px] lg:gap-8">
                    <h3 class="uppercase text-xl md:text-3xl font-bold leading-9 tracking-0.86 md:tracking-1.15">in the
                        box</h3>
                    <ul>
                        <?php
                            // Checking the size
                            if(sizeof($product->includes)>0){
                                foreach($product->includes as $index => $value) { ?>
                        <li class="text-sm leading-25">
                            <span class="quantity text-brand"> <?php echo $value->quantity ?> x</span>
                            <span class="item text-black text-opacity-50 ml-6"> <?php echo $value->item ?> </span>
                        </li>
                        <?php
                                }  
                            }
                        ?>
                    </ul>
                </article>
            </div>

            <!-- PRODUCT GALLERY -->
            <div class="product-gallery-grid mt-[88px] md:mt-[120px] lg:mt-40">
                <?php  
                    if(sizeof($product->gallery)>0){
                        foreach($product->gallery as $value) { ?>
                <picture class="product-gallery-item">
                    <source media="(min-width: 1024px)" srcset="<?php echo $value->desktop ?>">
                    <source media="(min-width: 768px)" srcset="<?php echo $value->tablet ?>">
                    <img class="w-full rounded" width="445px" height="280px" src="<?php echo $value->mobile ?>"
                        alt="x99 mark two headphones">
                </picture>
                <?php        
                        }
                    }
                ?>
            </div>

            <!-- YOU MAY ALSO LIKE -->
            <div class="mt-[120px] lg:mt-40">
                <h3
                    class="uppercase text-center text-xl md:text-3xl font-bold leading-9 tracking-0.86 md:tracking-1.15">
                    you may also like
                </h3>
                <div class="grid md:grid-cols-3 gap-y-14 md:gap-x-[11px] lg:gap-x-7.5 mt-10 md:mt-14 lg:mt-16">
                    <?php  
                        if(sizeof($product->others)>0){
                            foreach($product->others as $value) { ?>
                    <div class="grid justify-items-center">
                        <picture>
                            <source media="(min-width: 1024px)" srcset="<?php echo $value->image->desktop ?>">
                            <source media="(min-width: 768px)" srcset="<?php echo $value->image->desktop ?>">
                            <img src="<?php echo $value->image->desktop ?>" alt="<?php echo $value->name ?>">
                        </picture>
                        <h5 class="uppercase text-xl font-bold tracking-1.7 mt-8 md:mt-10"><?php echo $value->name ?>
                        </h5>
                        <a class="btn-type-1 btn-type-1--brand mt-8"
                            href="./single-product.php?id=<?php echo $product->id ?>">see product</a>
                    </div>
                    <?php        
                            }
                        }
                    ?>
                </div>
            </div>

            <!-- PRODUCT CATEGORIES -->
            <?php include 'category_block.php' ?>

            <!-- Static article -->
            <?php include 'static_article.php' ?>

        </div>
    </main>

    <?php include 'footer.php'  ?>

    <script src="./dist//main.js"></script>
</body>

</html>