const wraper = document.querySelector(".wraper"),
selectBtn = wraper.querySelector(".select-btn"),
options = wraper.querySelector(".options"),
searchInp = wraper.querySelector("input");

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
    selectBtn.firstElementChild.innerText = selectedLi.innerText;
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

/*

const cardNumber = document.getElementById("cardNumber");
const cardNumberText = document.getElementById("box-card-number");

cardNumber.addEvenListener("Keyup", (e) => {
    if (!e.target.value) {
        cardNumber.innerText = "#### #### #### ####";
    } else {
        const valuesOfInput = e.target.value.replaceAll(" ", " ");

        if (e.target.value.length > 14) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
            cardNumeberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3 $4");
        } else if(e.target.value.length > 9) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
            cardNumeberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{4})(\d{0,4})/, "$1 $2 $3");
        } else if(e.target.value.length > 4) {
            e.target.value = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
            cardNumeberText.innerHTML = valuesOfInput.replace(/(\d{4})(\d{0,4})/, "$1 $2");
        } else {
            cardNumberText.innerHTML = valuesOfInput 
        }
    }
})*/