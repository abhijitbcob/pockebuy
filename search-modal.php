<div id="search-modal" class="hidden fixed bg-black bg-opacity-60 inset-0 z-50">
    <!-- Modal close button -->
    <button data-hide-target="#search-modal" class="p-6 fixed top-8 right-4 block group">
        <svg class="feather feather-x text-white group-hover:text-brand" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
        <span class="sr-only">Close the modal</span>
    </button>

    <div class="max-w-3xl mx-auto mt-10 md:mt-17 lg:mt-24">
        <h2 class="text-xl md:text-2xl lg:text-4xl font-bold text-white uppercase text-center">What are you looking
            for?</h2>
        <div class="modal-search-wrapper bg-white rounded-lg overflow-hidden mt-2">
            <form class="search-form px-6 py-2">
                <!-- For mobile -->
                <button class="modal-back hidden" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-arrow-left feather-30">
                        <line x1="19" y1="12" x2="5" y2="12"></line>
                        <polyline points="12 19 5 12 12 5"></polyline>
                    </svg>
                    <span class="sr-only">Close the modal</span>
                </button>

                <!-- Search bar -->
                <div class="relative flex items-center">
                    <button class="search-submit absolute h-full w-12 flex justify-center items-center">
                        <svg class="feather feather-search" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>

                    <input id="search-input" autocomplete="off"
                        class="h-10 py-6 pl-14 pr-12 w-full  border-none focus:outline-dotted outline-[3px] outline-brand"
                        type="text" placeholder="Type here">

                    <button
                        class="clear-input-btn absolute right-4 bg-[#aaa] hover:bg-[#858585] transition-colors rounded-full text-white h-5 w-5 grid place-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-x feather-18">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        <span class="sr-only">Clear input</span>
                    </button>
                </div>
            </form>

            <!-- Search results -->
            <div class="search-results-wrapper px-6 py-2">
                <h6 id="result-status-heading" class="text-lg font-bold text-black uppercase">Search results</h6>
                <ul id="search-result-list">
                    <!-- <li class="py-1">
                        <a class="text-base font-medium text-black hover:text-brand transition-colors"
                            href="./product.html?p=xx59-headphones">XX59
                            HEADPHONES</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>