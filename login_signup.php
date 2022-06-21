<div id="login-logout-modal" class="hidden onclick-hide-overlay fixed bg-black bg-opacity-60 inset-0 z-50">
    <div class="container flex items-start justify-end">
        <?php

        if (!isset($_SESSION["name"])) {
            echo $_SESSION["name"]; ?>
        <!-- Log in -->
        <div id="login-dialog" class="avoid-click-bubble bg-white max-w-[450px] rounded-lg w-full mt-24 p-6">
            <div class="flex items-center gap-5">
                <h6 class="text-black text-lg uppercase font-bold">Login</h6>
            </div>

            <form class="modal-form mt-2.5" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="input-group">
                    <label class="text-[12px] text-black font-bold">Email</label>
                    <div class="mt-1">
                        <input
                            class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="email" name="email" placeholder="Please enter email" required>
                    </div>
                </div>

                <div class="input-group mt-3">
                    <label class="text-[12px] text-black font-bold">Password</label>
                    <div class="mt-1">
                        <input
                            class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="password" name="password" placeholder="Password" required>

                    </div>
                </div>

                <button class="btn-type-1 btn-type-1--brand w-full text-center mt-8" name="submit">Submit</button>
            </form>

            <?php

                if (isset($_POST["submit"])) {
                    include 'config-db.php';
                    $email = htmlspecialchars($_POST["email"]);
                    $password = htmlspecialchars(md5($_POST["password"]));

                    $collection = $dbConnection->pockebuy->users;
                    $result = $collection->find(['email' => $email, 'password' => $password])->toArray();

                    if (count($result) == 1) {
                        $_SESSION["name"] = $result[0]->name;
                        $_SESSION["email"] = $email;
                    } else { ?>
            <script>
            alert("Email and password is incorrect!");
            </script>
            <?php
                    }
                }
                ?>

            <div class="mt-2 flex items-center gap-2">
                <p class="text-sm text-black font-normal">You don't have an account?</p>
                <button id="user-register-btn" data-hide-target="#login-dialog" data-show="#signup-dialog"
                    class="text-sm text-opacity-70 font-normal text-black hover:text-brand transition-colors">
                    Register here
                </button>
            </div>
        </div>

        <!-- Sign up -->
        <div id="signup-dialog" class="hidden avoid-click-bubble  bg-white max-w-[450px] rounded-lg w-full mt-24 p-6">
            <div class="flex items-center gap-6">
                <h6 class="text-black text-lg uppercase font-bold">Register</h6>
                <p id="registration-msg"></p>
            </div>

            <form id="user-registration-form" class="modal-form mt-2.5">
                <div class="input-group">
                    <label class="text-[12px] text-black font-bold">Name</label>
                    <div class="mt-1">
                        <input
                            class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="text" name="name" placeholder="Name" required>
                        <p style="display: none;" class="invalid-message text-xs font-normal text-orange mt-1 ">
                            Por favor ingresa un nombre válido
                        </p>
                    </div>
                </div>

                <div class="input-group mt-3">
                    <label class="text-[12px] text-black font-bold">Email</label>
                    <div class="mt-1">
                        <input
                            class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="email" name="email" placeholder="Email" required>
                        <p style="display: none;" class="invalid-message text-xs font-normal text-orange mt-1 ">
                            Por favor ingresa un nombre válido
                        </p>
                    </div>
                </div>

                <div class="input-group mt-3">
                    <label class="text-[12px] text-black font-bold">Password</label>
                    <div class="mt-1">
                        <input
                            class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="password" name="password" placeholder="Password" required>
                        <p style="display: none;" class="invalid-message text-xs font-normal text-orange mt-1 ">
                            Por favor ingresa un nombre válido
                        </p>
                    </div>
                </div>

                <button class="btn-type-1 btn-type-1--brand w-full text-center mt-8">Submit</button>
            </form>

            <div class="mt-2 flex items-center gap-2">
                <p class="text-sm text-black font-normal">If you already have an acoount?</p>
                <button data-hide-target="#signup-dialog" data-show="#login-dialog"
                    class="text-sm text-opacity-70 font-normal text-black hover:text-brand transition-colors">
                    Login here
                </button>
            </div>
        </div>

        <?php
        } else { ?>
        <div class="px-3 py-2 avoid-click-bubble bg-white max-w-[200px] rounded-lg w-full mt-24 p-6">
            <div class="flex flex-col">
                <h3 class="text-base font-bold text-black">Your Account</h3>
                <a class="text-sm text-black mt-2" href="your_account.php">Your Account</a>
                <a class="text-sm text-black" href="your_orders.php">Your orders</a>

                <hr class="border-b border-[#EEEEEE] mt-3">
                <a href="signout.php">Sign out</a>
            </div>

        </div>
        <?php
        }
        ?>
    </div>
</div>