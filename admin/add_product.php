<?php

include "config.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pockebuy e-commerce</title>
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body>

    <main>

        <div class="container mx-auto pt-11 pb-12">
            <h2 class="text-xl font-bold uppercase">Details</h2>
            <p class="text-orange-400 invalid-message text-xs font-normal text-orange mt-1 pt-6 uppercase">General
                Details</p>

            <div class="pt-3 ">
                <form action="./save_product.php" method="POST" enctype="multipart/form-data">
                    <div class='flex '>
                        <div class="pt-3 w-1/3 pr-4">
                            <label for="slug"
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">slug:</label><br>
                            <input type="text" id="slug" name="slug" value=""
                                class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                type="text" placeholder="Slug"><br>
                        </div>
                    </div>

                    <div class='flex '>
                        <div class="pt-3 w-full pr-4">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Name:</label><br>
                            <input type="text" id="" name="name" value=""
                                class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                type="text" placeholder="Name"><br>
                        </div>
                        <div class="pt-3 w-full pr-4">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Category:</label><br>
                            <input type="text" id="fcategory" name="category" value=""
                                class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                placeholder="Category"><br>
                        </div>
                        <div class="pt-3 w-full ">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Price:</label><br>
                            <input type="text" id="fprice" name="price" value=""
                                class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                placeholder="Price"><br>
                        </div>
                    </div>
                    <!-- Start Image -->
                    <div class='flex '>
                        <div class="pt-3 w-full pr-4">
                            <label for="productImageMobile"
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">mobile
                                image:</label><br>
                            <input type="file" id="productImageMobile" name="productImageMobile" value=""
                                class="form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"><br>
                        </div>
                        <div class="pt-3 w-full pr-4">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">tablet
                                image:</label><br>
                            <input type="file" id="ftablet" name="productImageTablet" value=""
                                class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"><br>
                        </div>
                        <div class="pt-3 w-full ">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">desktop
                                image:</label><br>
                            <input type="file" id="fdesktop" name="productImageDesktop" value=""
                                class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"><br>
                        </div>
                    </div>
                    <!-- end Image -->

                    <!-- Start  gallery -->
                    <p class="text-orange-400 invalid-message text-xs font-normal text-orange mt-1 pt-11 uppercase ">
                        gallery</p>

                    <div class='flex '>
                        <div class="pt-3 w-full pr-4">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">First
                                image:</label><br>
                            <input type="file" id="gmobile" name="gallery1" value=""
                                class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"><br>
                        </div>
                        <div class="pt-3 w-full pr-4">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Second
                                image:</label><br>
                            <input type="file" id="gtablet" name="gallery2" value=""
                                class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"><br>
                        </div>
                        <div class="pt-3 w-full ">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Third
                                image:</label><br>
                            <input type="file" id="gdesktop" name="gallery3" value=""
                                class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"><br>
                        </div>
                    </div>


                    <!-- start  description And features -->
                    <p class="text-orange-400 invalid-message text-xs font-normal text-orange mt-1 pt-11 uppercase ">
                        description And features</p>

                    <div class='flex '>
                        <div class="pt-3 w-full pr-4">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">description:</label><br>
                            <textarea type="text" id="fdescription" name="description" value=""
                                class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                type="text" placeholder="Description"></textarea><br>
                        </div>
                        <div class="pt-3 w-full ">
                            <label for=""
                                class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">features:</label><br>
                            <textarea type="text" id="ffeatures" name="features" value=""
                                class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                type="text" placeholder="Features"></textarea><br>
                        </div>
                    </div>

                    <!-- start  includes -->
                    <p class="text-orange-400 invalid-message text-xs font-normal text-orange mt-1 pt-11 uppercase ">
                        includes</p>
                    <div class='flex '>
                        <div class="flex mr-10 mt-6 p-8 border-2 rounded-lg">
                            <div class="pt-3 w-full pr-4">
                                <label for=""
                                    class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Item
                                    Name:</label><br>
                                <input type="text" id="fitem" name="item1Name" value=""
                                    class=" form-control w-full   focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                    type="text" placeholder="Item Name"><br>
                            </div>
                            <div class="pt-3  pr-4">
                                <label for=""
                                    class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Quantity:</label><br>
                                <input type="text" id="fquantity" name="item1Quantity" value=""
                                    class="form-control w-1/2  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-3  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"><br>
                            </div>
                        </div>
                        <div class="flex mr-10 mt-6 p-8 border-2 rounded-lg">
                            <div class="pt-3 w-full pr-4">
                                <label for=""
                                    class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Item
                                    Name:</label><br>
                                <input type="text" id="fitem" name="item2Name" value=""
                                    class=" form-control w-full   focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                    type="text" placeholder="Item Name"><br>
                            </div>
                            <div class="pt-3  pr-4">
                                <label for=""
                                    class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Quantity:</label><br>
                                <input type="text" id="fquantity" name="item2Quantity" value=""
                                    class="form-control w-1/2  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-3  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"><br>
                            </div>
                        </div>

                        <div class="flex mr-10 mt-6 p-8 border-2 rounded-lg">
                            <div class="pt-3 w-full pr-4">
                                <label for=""
                                    class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Item
                                    Name:</label><br>
                                <input type="text" id="fitem" name="item3Name" value=""
                                    class=" form-control w-full   focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                    type="text" placeholder="Item Name"><br>
                            </div>
                            <div class="pt-3  pr-4">
                                <label for=""
                                    class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Quantity:</label><br>
                                <input type="text" id="fquantity" name="item3Quantity" value=""
                                    class="form-control w-1/2  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-3  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"><br>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="btn-type-1 btn-type-1--brand w-1/2 text-center mt-8">Submit</button>
                    </div>
                </form>

            </div>

        </div>
    </main>

</body>

</html>