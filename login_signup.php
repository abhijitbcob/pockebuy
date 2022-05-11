<div id="login-logout-modal" class="hidden onclick-hide-overlay fixed bg-black bg-opacity-60 inset-0 z-50">
    <div class="container flex items-start justify-end">
        <!-- Log in -->
        <div id="login-dialog" class="avoid-click-bubble bg-white max-w-[450px] rounded-lg w-full mt-24 p-6">
            <h6 class="text-black text-lg uppercase font-bold">Login</h6>

            <form class="modal-form mt-2.5">
                <div class="input-group">
                    <label class="text-[12px] text-black font-bold">Email</label>
                    <div class="mt-1">
                        <input
                            class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="email" placeholder="Please enter email">
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
                            type="password" placeholder="Full name">
                        <p style="display: none;" class="invalid-message text-xs font-normal text-orange mt-1 ">
                            Por favor ingresa un nombre válido
                        </p>
                    </div>
                </div>

                <button class="btn-type-1 btn-type-1--brand w-full text-center mt-8">Submit</button>
            </form>

            <div class="mt-2 flex items-center gap-2">
                <p class="text-sm text-black font-normal">You don't have an account?</p>
                <button data-hide-target="#login-dialog" data-show="#signup-dialog" class="text-sm text-opacity-70 font-normal text-black hover:text-brand transition-colors">
                    Register here
                </button>
            </div>
        </div>

        <!-- Sign up -->
        <div id="signup-dialog" class="hidden avoid-click-bubble  bg-white max-w-[450px] rounded-lg w-full mt-24 p-6">
            <h6 class="text-black text-lg uppercase font-bold">Register</h6>

            <form class="modal-form mt-2.5">
                <div class="input-group">
                    <label class="text-[12px] text-black font-bold">Name</label>
                    <div class="mt-1">
                        <input
                            class="form-control w-full focus:border-brand caret-brand outline-none rounded-lg border border-light-grey-3 px-6 py-[15px] placeholder-black placeholder-opacity-40 text-xs tracking-[-0.25px]"
                            type="text" placeholder="Email">
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
                            type="email" placeholder="Email">
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
                            type="password" placeholder="Password">
                        <p style="display: none;" class="invalid-message text-xs font-normal text-orange mt-1 ">
                            Por favor ingresa un nombre válido
                        </p>
                    </div>
                </div>

                <button class="btn-type-1 btn-type-1--brand w-full text-center mt-8">Submit</button>
            </form>

            <div class="mt-2 flex items-center gap-2">
                <p class="text-sm text-black font-normal">If you already have an acoount?</p>
                <button data-hide-target="#signup-dialog" data-show="#login-dialog" class="text-sm text-opacity-70 font-normal text-black hover:text-brand transition-colors">
                   Login here
                </button>
            </div>
        </div>
    </div>
</div>