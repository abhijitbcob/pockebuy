<!-- HEADER AND NAVIGATION BAR -->
<header class="relative child bg-black">
    <div class="container">
        <nav class="flex justify-between items-center py-8 border-b border-white border-opacity-20 relative">
            <button id="menu-toggler">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="text-[26px] font-bold text-white leading-[1]" href="/pockebuy">pockeBuy</a>
            <ul class="hidden items-center gap-8.5 lg:flex absolute left-1/2 transform -translate-x-1/2">
                <li><a class="header-nav-link" href="/pockebuy">home</a> </li>
                <li><a class="header-nav-link" href="headphones.php">headphones</a></li>
                <li><a class="header-nav-link" href="speakers.php">speakers</a></li>
                <li><a class="header-nav-link" href="earphones.php">earphones</a></li>
            </ul>

            <div class="flex items-center gap-3.5 md:gap-5">
                <button data-show-target="#search-modal" class="text-white" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-search">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                </button>
                <button data-show-target="#login-logout-modal" class="text-white" href="#" aria-label="User Info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </button>
                <button data-show-target="#cart-modal" class="relative">
                    <img src="./assets/shared/desktop/icon-cart.svg" alt="cart icon">
                    <span id="cart-qty-badge" style="display: none"
                        class="absolute -right-3 -top-2.5 w-5 h-5 rounded-full bg-brand flex items-center justify-center text-[12px] font-medium text-white">1</span>
                </button>
            </div>
        </nav>
    </div>
</header>

<div class="overlay fixed bottom-0 left-0 right-0 top-[91px] z-10  sm:hidden">
    <div class="bg-white rounded-b mobile-menu-list pt-0.5 h-full">
        <div
            class="container grid md:grid-cols-3 gap-17 md:gap-2.5 lg:gap-7.5 items-center pt-[96px] pb-[35px] h-full overflow-y-auto">
            <div class="bg-light-grey rounded relative pt-20 pb-7.5 grid justify-items-center">
                <img class="w-40 lg:w-52 absolute -top-1/3 lg:-top-1/2"
                    src="./assets/shared/desktop/image-category-thumbnail-headphones.png" alt="headphones">
                <h6 class="uppercase font-bold text-sm lg:text-lg tracking-1.07 lg:tracking-1.3">Headphones</h6>
                <a href="headphones.php" class="btn-type-2 mt-4.25 lg:mt-3.75">shop <img
                        src="./assets/shared/desktop/icon-arrow-right.svg" alt="arrow right"></a>
            </div>

            <div class="bg-light-grey rounded relative pt-20 pb-7.5 grid justify-items-center">
                <img class="w-40 lg:w-52 absolute -top-1/3 lg:-top-1/2"
                    src="./assets/shared/desktop/image-category-thumbnail-speakers.png" alt="headphones">
                <h6 class="uppercase font-bold text-sm lg:text-lg tracking-1.07 lg:tracking-1.3">speakers</h6>
                <a href="speakers.php" class="btn-type-2 mt-4.25 lg:mt-3.75">shop <img
                        src="./assets/shared/desktop/icon-arrow-right.svg" alt="arrow right"></a>
            </div>

            <div class="bg-light-grey rounded relative pt-20 pb-7.5 grid justify-items-center">
                <img class="w-40 lg:w-52 absolute -top-1/3 lg:-top-1/2"
                    src="./assets/shared/desktop/image-category-thumbnail-earphones.png" alt="headphones">
                <h6 class="uppercase font-bold text-sm lg:text-lg tracking-1.07 lg:tracking-1.3">earphones</h6>
                <a href="earphones.php" class="btn-type-2 mt-4.25 lg:mt-3.75">shop <img
                        src="./assets/shared/desktop/icon-arrow-right.svg" alt="arrow right"></a>
            </div>
        </div>
    </div>

</div>

<?php include 'search-modal.php' ?>
<?php include 'login_signup.php' ?>
<?php include 'cart.php' ?>