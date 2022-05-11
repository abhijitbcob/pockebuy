import {
    cartState
} from "./cart";

import {
    AJAX
} from "./helpers";

// Rendering order summary on page loading time
export function renderSummary() {
    const orderList = document.getElementById("order-summary-list")
    if (!orderList) return;

    let html = ``;

    for (const item of cartState.items) {
        html += `
            <li class="flex justify-between items-center">
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
    let formData = new FormData(document.getElementById("order-form"));

    let data = {
        name: formData.get("fullName"),
        email: formData.get("email"),
        phone: formData.get("phone"),
        address: formData.get("address"),
        pin: formData.get("pin-code"),
        country: formData.get("country"),
        paymentMethod: formData.get("payment-method"),
    }

    const URL = "/pockebuy/apis/checkout-api.php";

    AJAX(URL, data).then(res => {
        console.log(res);
        document.getElementById("order-success-alert").classList.remove("hidden");

    }).catch(err => {
        console.log("Something went wrong!", err);
    })
}