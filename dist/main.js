/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
var __webpack_exports__ = {};

;// CONCATENATED MODULE: ./src/js/helpers.js
const TIMOUT_SEC = 15;

const timeout = function (s) {
    return new Promise(function (_, reject) {
        setTimeout(function () {
            reject(new Error(`Request took too long! Timeout after ${s} second`));
        }, s * 1000);
    });
};

const AJAX = async function (url, uploadData = undefined) {
    try {
        const fetchPro = uploadData ?
            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(uploadData),
            }) :
            fetch(url);

        const res = await Promise.race([fetchPro, timeout(TIMOUT_SEC)]);
        const data = await res.json();

        if (!res.ok) throw new Error(`${data.message}`);
        return data;
    } catch (err) {
        throw err;
    }
};


/**
 * This function returns item from localstorage
 * @param {string} name 
 * @returns object
 */
function getLocalStorageItem(name) {
    return localStorage.getItem(name);
}
;// CONCATENATED MODULE: ./src/js/search.js


const searchInput = document.getElementById("search-input");
const searchStatusHeading = document.getElementById("result-status-heading");
const searchResultList = document.getElementById("search-result-list");
const inputClearBtn = document.querySelector(".clear-input-btn");
const API_URL = "http://127.0.0.1/pockebuy/apis/search-api.php";

// Storing search state here
let state = {
    search: {
        results: [],
        suggestions: "",
    }
};

const loadSearchResults = async function (query) {
    try {
        state.search.query = query;
        const data = await AJAX(`${API_URL}?search=${query}`);

        state.search.results = data;

        // Resetting state of page no when loading new search results
    } catch (err) {
        throw err;
    }
};


const controlSearchResults = async function (e) {
    try {
        const input = e.currentTarget;
        if (input.value == "") {
            searchStatusHeading.textContent = "Suggestions";
            searchResultList.innerHTML = state.search.suggestions;
        }
        // 1) Get search query
        const query = input.value;
        if (!query) return;

        // 2) Load search results
        await loadSearchResults(query);

        // 3) Render results
        // console.log(state);
        renderSearchResults(e);
    } catch (err) {
        console.log(err);
    }
};

function returnResultsHTML(resultLimit) {
    let html = ``,
        count = 1;

    for (const product of state.search.results) {
        html += `
        <li class="py-1">
            <a class="text-base font-medium text-black hover:text-brand transition-colors"
                href="./single-product.php?id=${product.id}">
                ${product.name}
            </a>
        </li>`;

        if (resultLimit) {
            count++;
            if (count > resultLimit) break;
        }
    }

    return html;
}


async function searchSuggestion() {
    const limit = 2;

    try {
        await loadSearchResults('a');

        searchStatusHeading.textContent = "Suggestions";
        state.search.suggestions = returnResultsHTML(limit);
        searchResultList.innerHTML = state.search.suggestions;
    } catch (error) {
        console.log(error);
    }
}
searchSuggestion();


function renderSearchResults(e) {
    const html = returnResultsHTML();
    searchResultList.innerHTML = html;

    if (state.search.results.length === 0) {
        searchStatusHeading.textContent = "No result found!";
    }

    if (state.search.results.length > 0) {
        searchStatusHeading.textContent = "Results";
    }
}

// Clear input button
if (inputClearBtn) {
    inputClearBtn.addEventListener("click", (e) => {
        e.preventDefault();
        searchInput.value = "";
    })
}

// Controlling product search
function initSearchBar() {
    if (searchInput) {
        searchInput.addEventListener("keyup", controlSearchResults);
    }
}

/* harmony default export */ const search = (initSearchBar());
;// CONCATENATED MODULE: ./src/js/cart.js


let cartState = {
    items: [],
    totalPrice: 0,
}

function productAddToCartBox() {
    const atcBtn = document.querySelector(".atc-box .atc-btn");
    const atcIncreaseBtn = document.querySelector(".atc-box .increase-qty-btn");
    const atcDecreaseBtn = document.querySelector(".atc-box .decrease-qty-btn");
    const atcQtyElem = document.querySelector(".atc-box .product-qty-elem");

    if (!atcBtn) return;

    let qty = 1;

    atcIncreaseBtn.addEventListener("click", (e) => {
        qty++;
        updateQtyView(qty);
    })

    atcDecreaseBtn.addEventListener("click", (e) => {
        if (qty > 1) {
            qty--;
            updateQtyView(qty);
        }
    })

    // Updating Quantity in UI
    function updateQtyView(qty) {
        atcQtyElem.textContent = qty;
        atcBtn.dataset.qty = qty;
    }


    // Adding eventlistner to add to cart button
    atcBtn.addEventListener("click", handleAtcBtnclick);

}

// Handling click on Add to cart button
function handleAtcBtnclick(e) {
    const {
        id,
        qty,
        price,
    } = e.currentTarget.dataset;

    let index = cartState.items.findIndex(el => el.id === parseInt(id)); // 'id' getting from DOM is string

    // If item already in card then increase its Quantity
    if (index > -1) {
        // 1. Increase qty in state
        cartState.items[index].qty += parseInt(qty);
        cartState.totalPrice += parseFloat(price) * parseInt(qty);

        // 2. Update UI
        renderFullCart();

    } else { // Else add new item in cart list
        updateCartState(e.currentTarget.dataset);
        // Update UI
        viewCartQtyBadge(cartState.items.length);
        renderFullCart();
    }
}

function updateCartState(product) {
    const {
        id,
        name,
        slug,
        price,
        qty
    } = product;

    // Updating cart state
    cartState.items.push({
        id: parseInt(id),
        name,
        slug,
        price: parseFloat(price),
        qty: parseInt(qty)
    })

    cartState.totalPrice += parseFloat(price) * parseInt(qty);
    persistCart();
}

// Getting cart items from local storage
const init = function () {
    const storage = getLocalStorageItem('cart');

    if (storage) cartState = JSON.parse(storage);
    renderFullCart();
    viewCartQtyBadge(cartState.items.length);
};

init();


function renderSingleItem(product) {
    const {
        id,
        name,
        slug,
        price,
        qty
    } = product;

    const html = `
        <li data-id="${id}" id="product-${id}" class="flex justify-between items-center">
            <div class="grid grid-cols-2 gap-x-4">
                <img height="64px" width="64px" class="rounded-lg col-start-1 col-end-2 row-start-1 row-end-3"
                    src="./assets/cart/image-${slug}.jpg" alt="headphone">
                <span class="uppercase text-sm leading-25 font-bold text-black self-end">${name.split(" ")[0]}</span>
                <span class="total-price-elem uppercase text-xs leading-25 font-bold text-black self-start text-opacity-50">₹${price*qty}</span>
            </div>
            <div
                class="px-[15.5px] py-3.75 bg-light-grey flex items-center gap-5 max-w-[120px] justify-between">
                <button class="decreaseBtn text-tiny text-black text-opacity-25 font-bold w-4 h-[18px]">-</button>
                <span class="qty-show-elem text-tiny font-bold tracking-1">${qty}</span>
                <button class="increaseBtn text-tiny text-black text-opacity-25 font-bold w-4 h-[18px]">+</button>
            </div>
        </li>`;

    // Adding html in DOM
    document.querySelector(".cart-items-list").insertAdjacentHTML("beforeend", html);

    const cartItemElem = document.getElementById(`product-${id}`);
    cartItemElem.addEventListener("click", (e) => {
        const productId = parseInt(e.currentTarget.dataset.id);
        if (e.target.closest(".increaseBtn")) {
            for (const item of cartState.items) {
                if (item.id === productId) {
                    item.qty++;
                    e.currentTarget.querySelector(".total-price-elem").textContent = '₹ ' + item.qty * item.price;
                    e.currentTarget.querySelector(".qty-show-elem").textContent = item.qty;
                    document.getElementById("total-price-elem").textContent = '₹ ' + (cartState.totalPrice + item.price);
                    cartState.totalPrice += item.price;
                    persistCart();
                    break;
                }
            }
        }

        if (e.target.closest(".decreaseBtn")) {
            for (let i = 0; i < cartState.items.length; i++) {
                if (cartState.items[i].id === productId) {
                    cartState.items[i].qty--;
                    e.currentTarget.querySelector(".total-price-elem").textContent = '₹ ' + cartState.items[i].qty * cartState.items[i].price;
                    e.currentTarget.querySelector(".qty-show-elem").textContent = cartState.items[i].qty;
                    document.getElementById("total-price-elem").textContent = '₹ ' + (cartState.totalPrice - cartState.items[i].price);
                    cartState.totalPrice -= cartState.items[i].price;
                    if (cartState.items[i].qty == 0) {
                        e.currentTarget.remove();
                        cartState.items.splice(i, 1); // Removing that item from list

                        if (cartState.items.length === 0) {
                            document.querySelector(".cart-body-wrapper").classList.add("hidden");
                            document.querySelector(".empty-cart-dialog").classList.remove("hidden");
                        }
                    }

                    viewCartQtyBadge(cartState.items.length);
                    persistCart();
                    break;
                }
            }
        }


    })
}

function renderFullCart() {
    const totalCartItemsElem = document.getElementById("total-items-elem");
    const totalPriceElem = document.getElementById("total-price-elem");
    const itemsListElem = document.querySelector(".cart-items-list");
    const cartBodyWrapper = document.querySelector(".cart-body-wrapper");
    const emptyCartElem = document.querySelector(".empty-cart-dialog");

    if (cartState.items.length > 0) {
        itemsListElem.innerHTML = "";
        cartBodyWrapper.classList.remove("hidden");
        emptyCartElem.classList.add("hidden");

        let totalPrice = 0,
            totalQty = 0;
        const totalItems = cartState.items.length;

        for (const item of cartState.items) {
            totalQty += item.qty;
            totalPrice += item.price * item.qty;
            renderSingleItem(item);
        }

        totalCartItemsElem.textContent = totalItems;
        totalPriceElem.textContent = '₹ ' + totalPrice;
        persistCart();
    } else {
        cartBodyWrapper.classList.add("hidden");
        emptyCartElem.classList.remove("hidden");
    }
}

// Remove all items from cart
function removeAllBtn() {
    document.getElementById("remove-all-btn").addEventListener("click", (e) => {
        cartState.items = [];
        cartState.totalPrice = 0;
        renderFullCart();
        viewCartQtyBadge(0);
        localStorage.removeItem('cart'); // Removing cart from localstorage.
    })
}

removeAllBtn();

// Storing cart items in browser localstorage
function persistCart() {
    localStorage.setItem('cart', JSON.stringify(cartState));
};

function viewCartQtyBadge(qty) {
    const elem = document.getElementById("cart-qty-badge");
    if (qty > 0) {
        elem.style.display = "flex";
        elem.textContent = qty;
    } else {
        elem.style.display = "none";
    }
}
;// CONCATENATED MODULE: ./src/js/checkout.js




// Rendering order summary on page loading time
function renderSummary() {
    const orderList = document.getElementById("order-summary-list")
    if (!orderList) return;

    let html = ``;

    for (const item of cartState.items) {
        html += `
            <li data-id="${item.id}" data-qty="${item.qty}" class="order-item flex justify-between items-center">
                <div class="grid grid-flow-col gap-x-4">
                    <img height="64px" width="64px"
                        class="rounded-lg col-start-1 col-end-2 row-start-1 row-end-3"
                        src="./assets/cart/image-${item.slug}.jpg" alt="headphone">
                    <span class="uppercase text-sm leading-25 font-bold text-black self-end">
                        ${item.name.split(" ")[0]}
                    </span>
                    <span class="uppercase text-xs leading-25 font-bold text-black self-start text-opacity-50">
                        ₹${item.price}
                    </span>
                </div>
                <span class="text-sm font-bold leading-25 text-black text-opacity-50">x${item.qty}</span>
            </li>`;
    }

    // Adding html in DOM
    orderList.insertAdjacentHTML("beforeend", html);

    document.getElementById("order-summary-total").textContent = '₹ ' + cartState.totalPrice;
    document.getElementById("order-summary-grand-total").textContent = '₹' + (cartState.totalPrice + 50);
}

// Order form submit
const orderSubmitBtn = document.getElementById("order-submit-btn");
if (orderSubmitBtn) orderSubmitBtn.addEventListener("click", saveOrderDetails);

// saving form data to DB
function saveOrderDetails() {
    submitForm();
    const isFormValid = document.querySelector("#order-form :invalid") ? false : true;
    let formData = new FormData(document.getElementById("order-form"));

    if (isFormValid) {
        resetForm(document.querySelector("#order-form"));
        let orders = [];
        for (const orderItem of document.querySelectorAll(".order-item")) {
            orders.push({
                product_id: orderItem.dataset.id,
                quantity: orderItem.dataset.qty
            })
        }

        let data = {
            name: formData.get("fullName"),
            email: formData.get("email"),
            phone: formData.get("phone"),
            address: formData.get("address"),
            pin: formData.get("pin-code"),
            country: formData.get("country"),
            paymentMethod: formData.get("payment-method"),
            savedEmail: document.getElementById("order-submit-btn").dataset.email,
            orders: orders,
        }

        const URL = "/pockebuy/apis/checkout-api.php";

        AJAX(URL, data).then(res => {
            console.log(res);
            document.getElementById("order-success-alert").classList.remove("hidden");

        }).catch(err => {
            console.log("Something went wrong!", err);
        })
    }
}


/**
 * -----------------------------
 * Custom form validation
 * -----------------------------
 */

// Adding validation to each form
function submitForm() {
    const formInputs = document.querySelectorAll(".custom-form__input");
    formInputs.forEach(input => {
        let isValid = input.checkValidity();
        const inputType = input.getAttribute("type");
        const required = input.hasAttribute("required");
        const invalidTooltip = input.parentElement.querySelector(".invalid-message");
        toggleInvalidTooltip(invalidTooltip, isValid);

        if (required) {
            if (["text", "tel", "email"].includes(inputType)) {
                input.addEventListener("keyup", (e) => {
                    isValid = input.checkValidity();
                    toggleInvalidTooltip(invalidTooltip, isValid);
                })
            }

            if (["checkbox", "select"].includes(inputType)) {
                input.addEventListener("change", (e) => {
                    if (inputType === "checkbox") {
                        isValid = input.checkValidity();
                        toggleInvalidTooltip(invalidTooltip, isValid)

                    } else {
                        isValid = input.checkValidity();
                        toggleInvalidTooltip(invalidTooltip, isValid)
                    }
                })
            }
        }
    });
}



// Toggle Invalid Tooltip's visibility
function toggleInvalidTooltip(elem, isValid) {
    if (elem) {
        if (!isValid) {
            elem.style.display = "block";
        } else {
            elem.style.display = "none";
        }
    }
}

// Reset the form inputs value
function resetForm(form) {
    // Clearing all inputs
    form.reset();
    // Hiding all invalid message
    form.querySelectorAll(".invalid-message").forEach(elem => {
        toggleInvalidTooltip(elem, true);
    })
}
;// CONCATENATED MODULE: ./src/js/login_signup.js


function loginSignup() {
    const userRegistrationForm = document.getElementById("user-registration-form");

    if (userRegistrationForm) {
        userRegistrationForm.addEventListener("submit", (e) => {
            e.preventDefault();
            const formData = new FormData(userRegistrationForm);

            const data = {
                "name": formData.get("name"),
                "email": formData.get("email"),
                "password": formData.get("password")
            };

            AJAX("/pockebuy/apis/user-register-api.php", data).then(res => {
                document.getElementById("registration-msg").textContent = res.message;
                setTimeout(() => {
                    document.location.reload();
                }, 2000);

            }).catch(err => {
                document.getElementById("registration-msg").textContent = err.message;
            })
        })
    }
}
;// CONCATENATED MODULE: ./src/js/main.js








const header = document.querySelector("header");
const menuToggler = document.querySelector("#menu-toggler");
const body = document.querySelector("body");

if (menuToggler) {
  menuToggler.addEventListener("click", function () {
    if (header.classList.contains("open")) {
      header.classList.remove("open");
      body.classList.add("overflow-y-auto");
    } else {
      header.classList.add("open");
      body.classList.add("overflow-y-hidden");
    }
  });
}



// Highlight Current Page navigation item
function highlightNavlink(selector) {
  const items = document.querySelectorAll(selector);
  for (const i of items) {
    if (i.href === document.URL) {
      i.style.color = "#D87D4A";
    }
  }
}
highlightNavlink(".header-nav-link");


// Show hide hide utility
const showBtns = document.querySelectorAll("[data-show-target]");
const hideBtns = document.querySelectorAll("[data-hide-target]");

for (const elem of showBtns) {
  elem.addEventListener("click", function () {
    document.querySelector(`${this.dataset.showTarget}`).classList.remove("hidden");
    if (this.dataset.hide) {
      document.querySelector(`${this.dataset.show}`).classList.add("hidden");
    }
  })
}

// Hidding win
window.addEventListener("keyup", (e) => {
  if (e.key === "Escape") {
    document.querySelectorAll("[data-show-target]").forEach(item => {
      if (!document.querySelector(item.dataset.showTarget).classList.contains("hidden")) {
        document.querySelector(item.dataset.showTarget).classList.add("hidden");
      }
    })
  }
})

for (const elem of hideBtns) {
  elem.addEventListener("click", function () {
    document.querySelector(`${this.dataset.hideTarget}`).classList.add("hidden");
    if (this.dataset.show) {
      document.querySelector(`${this.dataset.show}`).classList.remove("hidden");
    }
  });
}

// Hiding overlay on clicking on it
function hideOverlayOnclick() {
  const overlays = document.querySelectorAll(".onclick-hide-overlay");

  for (const overlay of overlays) {
    overlay.addEventListener("click", (e) => {

      if (!e.target.closest('.avoid-click-bubble')) {
        e.currentTarget.classList.add("hidden");
      }
    })
  }
}

hideOverlayOnclick();


// Initializing Add to cart
productAddToCartBox();
// Rendering summary
renderSummary();
loginSignup();
/******/ })()
;