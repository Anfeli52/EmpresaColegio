const wraper = document.querySelector(".wraper"),
selectBtn = wraper.querySelector(".select-btn"),
options = wraper.querySelector(".options"),
searchInp = wraper.querySelector("#search-country");
spancountry = document.getElementById("span-country");

selectBtn.addEventListener("click", () => {
    wraper.classList.toggle("select-active");
});

let countries = ["Antigua and Barbuda", "Argentina", "Bahamas", "Barbados", "Belize", "Bolivia", "Brazil", "Canada", "Chile", "Colombia", "Costa Rica", "Cuba", "Dominica", "Dominican Republic", "Ecuador", "El Salvador", "Grenada", "Guatemala", "Guyana", "Haiti", "Honduras", "Jamaica", "Mexico", "Nicaragua", "Panama", "Paraguay", "Peru", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Suriname", "Trinidad and Tobago", "United States", "Uruguay", "Venezuela"];

function addCountry(selectedCountry){
    options.innerHTML = "";
    countries.forEach(country => {
        let isSelected = country == selectedCountry ? "selected" : "";
        let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
        options.insertAdjacentHTML("beforeend", li);
    });
}

addCountry();

function updateName(selectedLi){
    searchInp.value = "";
    addCountry(selectedLi.innerText);
    wraper.classList.remove("select-active");
    selectBtn.firstElementChild.value = selectedLi.innerText;
    spancountry.innerText = selectedLi.innerText;
}

searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchedVal = searchInp.value.toLowerCase();
    arr = countries.filter(data => {
        return data.toLowerCase().startsWith(searchedVal);
    }).map(data => `<li onclick="updateName(this)">${data}</li>`).join("");
    options.innerHTML = arr ? arr : `<p class="oops">Oops! Country not found</p>` 
});

/*-----------------------------------------------------------------------*/

const wraper2 = document.querySelector("#wraper2"),
selectBtn2 = wraper2.querySelector("#select-btn2"),
options2 = wraper2.querySelector("#options2"),
searchInp2 = wraper2.querySelector("#search-country2");
spancountry2 = document.getElementById("span-country2");

selectBtn2.addEventListener("click", () => {
    wraper2.classList.toggle("select-active");
});

let countries2 = ["Antigua and Barbuda", "Argentina", "Bahamas", "Barbados", "Belize", "Bolivia", "Brazil", "Canada", "Chile", "Colombia", "Costa Rica", "Cuba", "Dominica", "Dominican Republic", "Ecuador", "El Salvador", "Grenada", "Guatemala", "Guyana", "Haiti", "Honduras", "Jamaica", "Mexico", "Nicaragua", "Panama", "Paraguay", "Peru", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Suriname", "Trinidad and Tobago", "United States", "Uruguay", "Venezuela"];

function addCountry2(selectedCountry2){
    options2.innerHTML = "";
    countries2.forEach(country2 => {
        let isSelected2 = country2 == selectedCountry2 ? "selected" : "";
        let li2 = `<li onclick="updateName2(this)" class="${isSelected2}">${country2}</li>`;
        options2.insertAdjacentHTML("beforeend", li2);
    });
}

addCountry2();

function updateName2(selectedLi2){
    searchInp2.value = "";
    addCountry2(selectedLi2.innerText);
    wraper2.classList.remove("select-active");
    selectBtn2.firstElementChild.value = selectedLi2.innerText;
    spancountry2.innerText = selectedLi2.innerText;
}

searchInp2.addEventListener("keyup", () => {
    let arr2 = [];
    let searchedVal2 = searchInp2.value.toLowerCase();
    arr2 = countries2.filter(data2 => {
        return data2.toLowerCase().startsWith(searchedVal2);
    }).map(data2 => `<li onclick="updateName2(this)">${data2}</li>`).join("");
    options2.innerHTML = arr2 ? arr2 : `<p class="oops">Oops! Country not found</p>` 
});

/*-----------------------------------------------------------------------*/

const cleaveCC = new Cleave("#cardNumber", {
    creditCard: true,
    delimiter: "-",
    onCreditCardTypeChanged: function (type) {
        const cardBrand = document.getElementById("cardBrand"),
        visa = "fab fa-cc-visa",
        mastercard = "fab fa-cc-mastercard",
        amex = "fab fa-cc-amex",
        diners = "fab fa-cc-diners-club",
        jcb = "fab fa-cc-jcb",
        discover = "fab fa-cc-discover";

        switch (type) {
        case "visa":
            cardBrand.setAttribute("class", visa);
            break;
        case "mastercard":
            cardBrand.setAttribute("class", mastercard);
            break;
        case "amex":
            cardBrand.setAttribute("class", amex);
            break;
        case "diners":
            cardBrand.setAttribute("class", diners);
            break;
        case "jcb":
            cardBrand.setAttribute("class", jcb);
            break;
        case "discover":
            cardBrand.setAttribute("class", discover);
            break;
        default:
            cardBrand.setAttribute("class", "");
            break;
        }
    },
});

const cleaveCCV = new Cleave("#cardCvv", {
    blocks: [4],
});

/*-----------------------------------------------------------------------*/

const cleaveCC2 = new Cleave("#cardNumber2", {
    creditCard: true,
    delimiter: "-",
    onCreditCardTypeChanged: function (type) {
        const cardBrand2 = document.getElementById("cardBrand2"),
        visa = "fab fa-cc-visa",
        mastercard = "fab fa-cc-mastercard",
        amex = "fab fa-cc-amex",
        diners = "fab fa-cc-diners-club",
        jcb = "fab fa-cc-jcb",
        discover = "fab fa-cc-discover";

        switch (type) {
        case "visa":
            cardBrand2.setAttribute("class", visa);
            break;
        case "mastercard":
            cardBrand2.setAttribute("class", mastercard);
            break;
        case "amex":
            cardBrand2.setAttribute("class", amex);
            break;
        case "diners":
            cardBrand2.setAttribute("class", diners);
            break;
        case "jcb":
            cardBrand2.setAttribute("class", jcb);
            break;
        case "discover":
            cardBrand2.setAttribute("class", discover);
            break;
        default:
            cardBrand2.setAttribute("class", "");
            break;
        }
    },
});

const cleaveCCV2 = new Cleave("#cardCvv2", {
    blocks: [4],
});