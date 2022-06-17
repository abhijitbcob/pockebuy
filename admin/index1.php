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
        <p class="text-orange-400 invalid-message text-xs font-normal text-orange mt-1 pt-6 uppercase">Billing Details</p>

        
        
        <div class="pt-3 ">

            <form  action="#">
            <div class='flex '>
                    <div class="pt-3 w-1/3 pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">slug:</label><br>
                        <input type="text" id="fslug" name="fslug" class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                        type="text" placeholder="Slug"><br>
                    </div>
                    
                </div>

                <div class='flex '>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Name:</label><br>
                        <input type="text" id="fname" name="fname" class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                        type="text" placeholder="Name"><br>
                    </div>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Category:</label><br>
                        <input type="text" id="fcategory" name="fcategory" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         placeholder="Category"><br>
                    </div>
                    <div class="pt-3 w-full ">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Price:</label><br>
                        <input type="text" id="fprice" name="fprice" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         placeholder="Price"><br>
                    </div>
                </div>
                <!-- Start Image -->
                <div class='flex '>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">mobile image:</label><br>
                        <input type="file" id="fmobile" name="fmobile" class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">tablet image:</label><br>
                        <input type="file" id="ftablet" name="ftablet" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                    <div class="pt-3 w-full ">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">desktop image:</label><br>
                        <input type="file" id="fdesktop" name="fdesktop" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                </div>
                <!-- end Image -->

                <!-- Start  gallery -->
                <p class="text-orange-400 invalid-message text-xs font-normal text-orange mt-1 pt-11 uppercase ">gallery</p>

                <div class='flex '>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">mobile image:</label><br>
                        <input type="file" id="gmobile" name="gmobile" class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">tablet image:</label><br>
                        <input type="file" id="gtablet" name="gtablet" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                    <div class="pt-3 w-full ">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">desktop image:</label><br>
                        <input type="file" id="gdesktop" name="gdesktop" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                </div>

                <div class='flex '>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">mobile image:</label><br>
                        <input type="file" id="gmobile" name="gmobile" class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">tablet image:</label><br>
                        <input type="file" id="gtablet" name="gtablet" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                    <div class="pt-3 w-full ">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">desktop image:</label><br>
                        <input type="file" id="gdesktop" name="gdesktop" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                </div>

                <div class='flex '>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">mobile image:</label><br>
                        <input type="file" id="gmobile" name="gmobile" class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">tablet image:</label><br>
                        <input type="file" id="gtablet" name="gtablet" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                    <div class="pt-3 w-full ">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">desktop image:</label><br>
                        <input type="file" id="gdesktop" name="gdesktop" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                         ><br>
                    </div>
                </div>
                <!-- end  gallery -->

                <!-- start  description And features -->
                <p class="text-orange-400 invalid-message text-xs font-normal text-orange mt-1 pt-11 uppercase ">description And features</p>

                <div class='flex '>
                    <div class="pt-3 w-full pr-4">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">description:</label><br>
                        <textarea type="text" id="fdescription" name="fdescription" class=" form-control w-full grow  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                        type="text" placeholder="Description"></textarea><br>
                    </div>
                    <div class="pt-3 w-full ">
                        <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">features:</label><br>
                        <textarea type="text" id="ffeatures" name="ffeatures" class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                        type="text" placeholder="Features"></textarea><br>
                    </div>
                </div>


                 <!-- end  description And features -->



                 <!-- start  includes -->
                <p class="text-orange-400 invalid-message text-xs font-normal text-orange mt-1 pt-11 uppercase ">includes</p>
                <div class='flex '>
                
                    <div class="flex mr-10 mt-6 p-8 border-2 rounded-lg">
                        <div class="pt-3 w-full pr-4">
                            <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Item Name:</label><br>
                            <input type="text" id="fitem" name="fname" class=" form-control w-full   focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="text" placeholder="Item Name"><br>
                        </div>
                        <div class="pt-3  pr-4">
                            <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Quantity:</label><br>
                            <input type="text" id="fquantity" name="fquantity" class="form-control w-1/2  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-3  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            ><br>
                        </div>
                    </div>

                    <div class="flex mr-10 mt-6 p-8 border-2 rounded-lg">
                        <div class="pt-3 w-full pr-4">
                            <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Item Name:</label><br>
                            <input type="text" id="fitem" name="fname" class=" form-control w-full   focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="text" placeholder="Item Name"><br>
                        </div>
                        <div class="pt-3  pr-4">
                            <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Quantity:</label><br>
                            <input type="text" id="fquantity" name="fquantity" class="form-control w-1/2  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-3  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            ><br>
                        </div>
                    </div>

                    <div class="flex mr-10 mt-6 p-8 border-2 rounded-lg">
                        <div class="pt-3 w-full pr-4">
                            <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Item Name:</label><br>
                            <input type="text" id="fitem" name="fname" class=" form-control w-full   focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-6  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="text" placeholder="Item Name"><br>
                        </div>
                        <div class="pt-3  pr-4">
                            <label for="fname" class="invalid-message text-xs font-normal text-orange mt-1 pt-3 capitalize">Quantity:</label><br>
                            <input type="text" id="fquantity" name="fquantity" class="form-control w-1/2  focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 mt-3 px-3  py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            ><br>
                        </div>
                    </div>

                     <!-- end  includes -->
                  
                    
                    
                </div>
                <div class="text-center">
                    <button class="btn-type-1 btn-type-1--brand w-1/2 text-center mt-8">Submit</button>
                </div>
            </form> 

        </div>

        
    </div>
</main>
    
</body>
</html>