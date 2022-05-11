import {
    AJAX
} from "./helpers";

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

export default initSearchBar();