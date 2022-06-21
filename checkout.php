<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <title>Pockebuy e-commerce website</title>
    <link rel="stylesheet" href="./dist/app.css">
</head>

<body>
    <?php include 'header.php' ?>
    <!-- PAYMENT SUCCESSFUL MESSAGE -->
    <div id="order-success-alert" class="hidden bg-black bg-opacity-40 fixed inset-0 z-30">
        <div class="container">
            <div class="max-w-[540px] mx-auto mt-[132px] rounded-lg bg-white p-8 md:p-12 animate-pop-in">
                <img src="./assets/shared/desktop/success-icon.svg" alt="success-icon">
                <h3 class="uppercase mt-8 font-bold text-3xl leading-9 tracking-1.15">thank you <br> for your order</h3>
                <p class="text-sm text-black text-opacity-50 leading-25 mt-6">You will recieve an email confimation
                    shortly.
                </p>

                <div class="rounded-lg flex hidden flex-col md:flex-row mt-8">
                    <div class="bg-light-grey p-6 md:max-w-[246px] flex-grow rounded-t md:rounded-r-none md:rounded-l">
                        <div class="grid grid-cols-3 gap-x-4">
                            <img height="50px" width="50px"
                                class="rounded-lg col-start-1 col-end-2 row-start-1 row-end-3"
                                src="./assets/cart/image-xx99-mark-two-headphones.jpg" alt="headphone">
                            <span
                                class="uppercase text-sm leading-25 font-bold text-black self-end col-start-2 col-end-3 min-w-[75px]">xx
                                mk
                                ii</span>
                            <span
                                class="uppercase text-xs leading-25 font-bold text-black self-start  col-start-2 col-end-3 text-opacity-50">$
                                2,999</span>
                            <span class="col-start-3 col-end-4 row-start-1 row-end-3 justify-self-end">x1</span>

                        </div>
                        <div class="h-[1px] bg-black bg-opacity-[0.08] my-2"></div>
                        <p class="text-center text-xtiny text-black text-opacity-50 tracking-[-0.21px] font-medium">and
                            2 other
                            item(s)
                        </p>
                    </div>
                    <div class="bg-black py-[41.5px] px-8 flex-grow rounded-b md:rounded-l-none md:rounded-r">
                        <p class="text-white uppercase text-sm leading-25 text-opacity-50">grand total</p>
                        <span class="text-white text-lg mt-2 font-bold">$5,446</span>
                    </div>
                </div>

                <a class="btn-type-1 btn-type-1--brand w-full mt-[23px] md:mt-[46px]" href="/pockebuy">back to home</a>
            </div>
        </div>
    </div>

    <!-- Main page content -->
    <main class="relative bg-light-grey-2 lg:bg-light-grey pt-4 pb-24 md:pt-12 md:pb-[116px] lg:pt-20 lg:pb-[141px]">
        <div class="container">
            <a href="headphones.html" class="capitalize text-sm text-black text-opacity-50 leading-25">go back</a>
            <div class="mt-6 md:mt-[54px] lg:mt-[38px] flex flex-col xl:flex-row gap-y-8 lg:gap-x-7.5 items-start">
                <form id="order-form"
                    class="custom-form bg-white w-full lg:max-w-[730px] p-6 md:px-[27.5px] md:py-7.5 lg:px-12 lg:py-[54px] flex-grow rounded-lg"
                    action="#">
                    <h3
                        class="uppercase text-2xl md:text-3xl md:leading-9 tracking-1 md:tracking-1.15 font-bold text-black">
                        checkout</h3>

                    <div class="mt-8 md:mt-[41px]">
                        <span class="uppercase text-brand font-bold text-tiny leading-25 tracking-0.93">billing
                            details</span>
                        <div class="grid md:grid-cols-2 gap-y-6 gap-x-4 mt-4 items-start">
                            <div class="grid gap-y-[9px]">
                                <label class="text-black text-xtiny capitalize font-bold tracking-[-0.21px]"
                                    for="fullName">name</label>
                                <input
                                    class="custom-form__input focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[18px] font-bold placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                    type="text" name="fullName" id="fullName" placeholder="Alexei Ward" required>
                                <div style="display: none;"
                                    class="invalid-message text-xs font-normal text-orange mt-1 ">
                                    Please type a correct input!
                                </div>
                            </div>
                            <div class="grid gap-y-[9px]">
                                <label class="text-black text-xtiny capitalize font-bold tracking-[-0.21px]"
                                    for="email">email
                                    address</label>
                                <input
                                    class="custom-form__input focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[18px] font-bold placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                    type="email" name="email" id="email" placeholder="alexie@mail.com" required>
                                <div style="display: none;"
                                    class="invalid-message text-xs font-normal text-orange mt-1 ">
                                    Please type a correct input!
                                </div>
                            </div>
                            <div class="grid gap-y-[9px]">
                                <label class="text-black text-xtiny capitalize font-bold tracking-[-0.21px]"
                                    for="phone">phone
                                    number</label>
                                <input
                                    class="custom-form__input focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[18px] font-bold placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                    type="text" name="phone" id="phone" placeholder="+1 (202) 555-0136" required>
                                <div style="display: none;"
                                    class="invalid-message text-xs font-normal text-orange mt-1 ">
                                    Please type a correct input!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 md:mt-[41px]">
                        <span class="uppercase text-brand font-bold text-tiny leading-25 tracking-0.93">Shipping
                            info</span>
                        <div class="grid md:grid-cols-2 gap-y-6 gap-x-4 mt-4 items-start">
                            <div class="grid gap-y-[9px] md:col-start-1 md:col-end-3">
                                <label class="text-black text-xtiny capitalize font-bold tracking-[-0.21px]"
                                    for="address">address</label>
                                <input
                                    class="custom-form__input focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[18px] font-bold placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                    type="text" name="address" id="address" placeholder="1137 Williams Avenue" required>
                                <div style="display: none;"
                                    class="invalid-message text-xs font-normal text-orange mt-1 ">
                                    Please type a correct input!
                                </div>
                            </div>
                            <div class="grid gap-y-[9px]">
                                <label class="text-black text-xtiny capitalize font-bold tracking-[-0.21px]"
                                    for="pin-code">
                                    Pin code
                                </label>
                                <input
                                    class="custom-form__input focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[18px] font-bold placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                    type="text" name="pin-code" id="pin-code" placeholder="10001" required>
                                <div style="display: none;"
                                    class="invalid-message text-xs font-normal text-orange mt-1 ">
                                    Please type a correct input!
                                </div>
                            </div>
                            <div class="grid gap-y-[9px]">
                                <label class="text-black text-xtiny capitalize font-bold tracking-[-0.21px]"
                                    for="country">Country</label>
                                <input
                                    class="custom-form__input focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[18px] font-bold placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                    type="text" name="country" id="country" placeholder="United States" required>
                                <div style="display: none;"
                                    class="invalid-message text-xs font-normal text-orange mt-1 ">
                                    Please type a correct input!
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 md:mt-[41px]">
                        <span class="uppercase text-brand font-bold text-tiny leading-25 tracking-0.93">payment
                            details</span>
                        <div class="grid md:grid-cols-2 gap-y-6 gap-x-4 mt-4">
                            <p
                                class="text-black text-xtiny capitalize font-bold tracking-[-0.21px] row-start-1 row-end-3">
                                payment
                                method</p>

                            <label
                                class="focus:border-brand caret-brand flex items-center gap-4 outline-none rounded-lg border font-bold text-black text-xs tracking-[-0.25px] border-light-grey-3 px-6 py-[18px]"
                                for="e-money-input">
                                <input data-hide-target="#cash-delivery-msg" data-show="#online-pay-form" type="radio"
                                    class="hidden peer" name="payment-method" value="online" id="e-money-input">
                                <div
                                    class="h-2.5 w-2.5 rounded-[50%] peer-checked:bg-brand outline outline-[#CFCFCF] outline-1 outline-offset-[5px]">
                                </div>
                                Online
                            </label>

                            <label
                                class="focus:border-brand caret-brand  flex items-center gap-4 outline-none rounded-lg border font-bold text-black text-xs tracking-[-0.25px] border-light-grey-3 px-6 py-[18px]"
                                for="cash">
                                <input data-hide-target="#online-pay-form" data-show="#cash-delivery-msg" type="radio"
                                    checked class="hidden peer" name="payment-method" value="COD" id="cash">
                                <div
                                    class="h-2.5 w-2.5 rounded-[50%] peer-checked:bg-brand outline outline-[#CFCFCF] outline-1 outline-offset-[5px]">
                                </div>
                                Cash on Delivery
                            </label>
                        </div>

                        <div class="mt-7.5">
                            <div id="online-pay-form" class="hidden mt-6">
                                <div class="grid md:grid-cols-2 gap-y-6 gap-x-4">
                                    <div class="grid gap-y-[9px]">
                                        <label class="text-black text-xtiny font-bold tracking-[-0.21px]"
                                            for="e-money-number">e-Money
                                            Number</label>
                                        <input
                                            class="focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[18px] font-bold placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                            type="text" name="e-money-number" id="e-money-number"
                                            placeholder="238521993">
                                    </div>
                                    <div class="grid gap-y-[9px]">
                                        <label class="text-black text-xtiny font-bold tracking-[-0.21px]"
                                            for="e-money-pin">e-Mony
                                            Pin</label>
                                        <input
                                            class="focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[18px] font-bold placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                                            type="email" name="e-money-pin" id="e-money-pin" placeholder="6891">
                                    </div>
                                </div>

                            </div>

                            <div id="cash-delivery-msg" class="flex flex-col md:flex-row gap-8 items-center mt-7.5">
                                <div>
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M42.2812 8.4375H46.5938C47.3704 8.4375 48 9.06713 48 9.84375C48 10.6204 47.3704 11.25 46.5938 11.25H45.0938V23.9062C45.0938 24.6829 44.4641 25.3125 43.6875 25.3125H33.8438V40.9688C33.8438 41.7454 33.2141 42.375 32.4375 42.375H25.0773C24.4239 45.5805 21.5831 48 18.1875 48H1.40625C0.629625 48 0 47.3704 0 46.5938C0 45.8171 0.629625 45.1875 1.40625 45.1875H18.1875C20.021 45.1875 21.585 44.012 22.1653 42.375H8.4375C7.66087 42.375 7.03125 41.7454 7.03125 40.9688C7.03125 40.1921 7.66087 39.5625 8.4375 39.5625H12.5625C13.3379 39.5625 13.9688 38.9317 13.9688 38.1562C13.9688 37.3808 13.3379 36.75 12.5625 36.75H9.43444C6.87619 36.75 4.37297 37.6373 2.38575 39.2485C1.78247 39.7376 0.896906 39.6454 0.407719 39.0419C-0.0814688 38.4385 0.0110625 37.553 0.614344 37.0639C2.84203 35.2578 5.58806 34.1792 8.4375 33.9741V18.375C8.4375 17.5984 9.06713 16.9688 9.84375 16.9688H18.375V7.03125C18.375 6.25462 19.0046 5.625 19.7812 5.625H28.1223C31.9334 2.02078 36.9875 0 42.2641 0H46.5938C47.3704 0 48 0.629625 48 1.40625C48 2.18287 47.3704 2.8125 46.5938 2.8125H42.2642C38.805 2.8125 35.4975 3.79453 32.658 5.625H38.0625C38.8326 5.625 39.4688 6.25228 39.4688 7.03125C39.4688 7.52423 39.3372 7.69561 38.4891 8.80021C38.0648 9.3528 37.4613 10.1389 36.6052 11.3157C36.2039 11.8513 36.3433 12.6075 36.8974 12.9688C37.4088 13.3025 38.0923 13.1781 38.4534 12.6856L41.1473 9.01219C41.4121 8.65088 41.8333 8.4375 42.2812 8.4375ZM32.4375 16.9688C32.9273 16.9688 33.3582 17.2195 33.6099 17.5993C35.4415 15.9118 34.2652 12.7969 31.7344 12.7969C29.5943 12.7969 28.2687 15.1348 29.3533 16.9688H32.4375ZM21.1875 8.4375H35.2472C35.0152 8.75898 34.8251 9.00687 34.6644 9.21646C34.3106 9.67792 34.0992 9.95371 33.896 10.4204C29.6796 8.64131 25.1696 12.4771 26.337 16.9688H21.1875V8.4375ZM22.5938 25.4062V19.7812H19.7812V25.4062H22.5938ZM31.0312 39.5625H16.5403C17.5098 36.8283 15.4711 33.9375 12.5625 33.9375H11.25V19.7812H16.9688V26.8125C16.9688 27.5891 17.5984 28.2188 18.375 28.2188H24C24.7766 28.2188 25.4062 27.5891 25.4062 26.8125V19.7812H31.0312V39.5625ZM33.8438 20.7288V22.5H42.2812V12.2217L40.7213 14.3488C39.9301 15.4278 38.6519 16.0371 37.2972 15.9602C37.1467 18.1043 35.7894 19.9393 33.8438 20.7288Z"
                                            fill="#D87D4A"></path>
                                    </svg>
                                </div>
                                <p class="font-medium text-center md:text-left text-sm text-black text-opacity-50">
                                    The ‘Cash on Delivery’ option enables you to pay in cash when our delivery courier
                                    arrives at your
                                    residence. Just make sure your address is correct so that your order will not be
                                    cancelled.
                                </p>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- order Summary -->
                <div class="w-full lg:max-w-[350px] bg-white px-6 md:px-[33px] py-8 flex-grow rounded-lg">
                    <!-- Loader -->
                    <div class="loader hidden"></div>
                    <!-- calculation -->
                    <div id="order-summary-wrapper">
                        <h6 class="text-lg tracking-1.3 uppercase text-black font-bold">summary</h6>
                        <ul id="order-summary-list" class="mt-8 grid gap-y-6">

                        </ul>

                        <ul class="mt-8">
                            <li class="flex justify-between mt-2">
                                <span
                                    class="uppercase text-sm leading-25 font-medium text-black self-start text-opacity-50">total</span>
                                <span id="order-summary-total" class="text-lg text-black font-bold">0</span>
                            </li>
                            <li class="flex justify-between mt-2">
                                <span
                                    class="uppercase text-sm leading-25 font-medium text-black self-start text-opacity-50">shipping</span>
                                <span class="text-lg text-black font-bold">₹ 50</span>
                            </li>
                            <li class="flex justify-between mt-2">
                                <span
                                    class="uppercase text-sm leading-25 font-medium text-black self-start text-opacity-50">grand
                                    total</span>
                                <span id="order-summary-grand-total" class="text-lg text-brand font-bold"></span>
                            </li>
                        </ul>
                        <button data-loggedIn="<?php
                                                if (isset($_SESSION['email'])) {
                                                    echo "true";
                                                } else {
                                                    echo "false";
                                                }

                                                ?>" data-email="
                                                <?php
                                                if (isset($_SESSION['email'])) {
                                                    echo $_SESSION['email'];
                                                } else {
                                                    echo "";
                                                }
                                                ?>" id="order-submit-btn"
                            class="btn-type-1 btn-type-1--brand w-full text-center mt-8">continue
                            & pay</button>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>

    <script src="./dist/main.js"></script>
</body>

</html>