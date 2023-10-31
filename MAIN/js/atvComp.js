// TROCANDO O CÓDIGO PARA A PÁGINA 'AVISOS'



// TROCANDO O CÓDIGO PARA A PÁGINA 'CALENDÁRIO'

var aCal = getElementById("aCalendar");
aCal.addEventListener("click", function(event) {
    event.preventDefault();
    switchCalendar();
});

function switchCalendar() {

    let avisoCorpo = document.getElementById("codAviso")

    avisoCorpo.innerHTML = "oi pau no cu"
};

// TROCANDO O CÓDIGO PARA A PÁGINA 'PROTOCOLOS'