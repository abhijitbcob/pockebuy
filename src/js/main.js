import {
  initSearchBar
} from "./search";

import {
  productAddToCartBox
} from "./cart";

import {
  renderSummary
} from "./checkout";

const header = document.querySelector("header");
const menuToggler = document.querySelector("#menu-toggler");
const body = document.querySelector("body");
const overlay = document.querySelector(".overlay");

if (menuToggler) {
  menuToggler.addEventListener("click", function () {
    if (header.classList.contains("open")) {
      header.classList.remove("open");
      body.classList.add("overflow-y-auto");
      // overlay.classList.add("z-[-1]");
    } else {
      header.classList.add("open");
      body.classList.add("overflow-y-hidden");
      // overlay.classList.remove("z-[-1]");
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