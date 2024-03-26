var userState = document.getElementById("userState");
var userCity = document.getElementById("userCity");

const citiesStates = {
    "MS" : ["Campo Grande", "Dourados", "Três Lagoas", "Corumbá"],
    "PR" : ["Curitiba", "Londrina", "Maringá", "Ponta Grossa"],
    "RS" : ["Porto Alegre", "Caxias do Sul", "Pelotas", "Canoas"],
    "SC" : ["Florianópolis", "Joinville", "Blumenau", "São José"]
};

userState.addEventListener("change", formCities);

function formCities() {

    for(var i=(userCity.options.length-1); i>=0; i-=1) {

        if(!userCity.options[i].hasAttribute("disabled")) {
            userCity.options[i].remove();
        };
    };

    for(var i=0; i<(citiesStates[userState.value].length); i++) {

        // console.log(citiesStates[userState.value][i]);

        var option = document.createElement("option");
        option.innerHTML = option.value = citiesStates[userState.value][i];
        document.getElementById("userCity").appendChild(option);
    };

    document.getElementById("userCity").removeAttribute("disabled");
};

