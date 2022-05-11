<!-- CART MODAL -->
<div id="cart-modal" class="hidden onclick-hide-overlay bg-black bg-opacity-40 fixed inset-0 z-30">
    <div class="container">
        <div
            class="cart-dialog avoid-click-bubble max-w-[377px] relative mx-auto md:ml-auto md:mr-0 md:top-28 bg-white rounded-lg px-7 md:px-8 py-8 md:py-[31px]">
            <div class="cart-body-wrapper">
                <div class="flex justify-between">
                    <h6 class="text-lg tracking-1.3 text-black uppercase font-bold">cart (<span
                            id="total-items-elem">3</span>)</h6>
                    <button id="remove-all-btn" class="text-sm leading-25 text-black text-opacity-50">Remove
                        all</button>
                </div>
                <ul class="cart-items-list mt-8 grid gap-y-6">
                    <!-- Cart items will be printed here -->
                </ul>

                <div class="flex justify-between mt-8">
                    <span
                        class="uppercase text-xs leading-25 font-bold text-black self-start text-opacity-50">total</span>
                    <span id="total-price-elem" class="text-lg text-black font-bold">₹0</span>
                </div>
                <a class="btn-type-1 btn-type-1--brand w-full text-center mt-6" href="./checkout.php">checkout</a>
            </div>

            <!-- Default show empty cart -->
            <div class="empty-cart-dialog grid justify-items-center gap-8">
                <div class="flex items-center gap-2.5">
                    <h6 class="text-black text-opacity-50 text-lg font-bold text-center uppercase">Your cart is empty
                    </h6>
                    😐
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-shopping-cart feather-100 cart-icon">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                </svg>
            </div>
        </div>
    </div>
</div>