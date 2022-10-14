
let missingMessage = document.querySelector("#missing");

let btnSend = document.querySelector("#btnSend");

let userName = document.querySelector("#name");
let firstName = document.querySelector("#firstName");
let address = document.querySelector("#address");
let city = document.querySelector("#city");
let postcode = document.querySelector("#postcode");

let controls = document.querySelectorAll(".control");

btnSend.addEventListener("click", controlForm);
function controlForm() {
    let controlBis = true;
    controls.forEach(kontrole  => {
    if(kontrole.value === "" && controlBis){
        window.alert("merci de remplir le champ manquant");
        controlBis = false;
    }
   
})
}


// btnSend.addEventListener("click", function () {
//     if (userName.value === "") {
//         missingMessage.innerHTML="merci de remplir le champ ci-dessus"
        
//     }
// })



