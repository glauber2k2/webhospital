
function validar(){

let inputnome = document.querySelector("#nome");
let inputuser = document.querySelector("#user");
let inputemail = document.querySelector("#email");
let inputconfemail = document.querySelector("#confemail");
let inputsenha = document.querySelector("#senha");
let inputconfsenha = document.querySelector("#confsenha");
let inputpeso = document.querySelector("#peso");
let inputaltura = document.querySelector("#altura");



if(inputnome.value == false){
    alert("O campo 'nome' não pode estar vazio");
    return false;
}

if(inputuser.value == false){
    alert("O campo 'usuario' não pode estar vazio");
    return false;
}

if(inputemail.value == false){
    alert("O campo 'email' não pode estar vazio");
    return false;
}

if(inputconfemail.value == false){
    alert("O campo 'confirmar email' não pode estar vazio");
    return false;
}

if(inputsenha.value == false){
    alert("O campo 'senha' não pode estar vazio");
    return false;
}

if(inputconfsenha.value == false){
    alert("O campo 'confirmar senha' não pode estar vazio");
    return false;
}

}