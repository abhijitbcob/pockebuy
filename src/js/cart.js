import {
    getLocalStorageItem
} from "./helpers";

export let cartState = {
    items: [],
    totalPrice: 0,
}

export function productAddToCartBox() {
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