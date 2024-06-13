document.getElementById("reg").addEventListener("click", register);
document.getElementById("ini").addEventListener("click", iniciarSesion);
var formulario__login_register = document.querySelector('.formulario__login-register');
var formulario_login = document.querySelector('.formulario__login');
var formulario__register = document.querySelector('.formulario__register');
var caja_trasera_login=document.querySelector('.caja__trasera-login');
var caja_trasera_login=document.querySelector('.caja__trasera-register');

function iniciarSesion (){
    formulario__register.style.display="none";
    formulario__login_register.style.left="10px";
    formulario__login.style.display="block";
    caja_trasera_register.style.opacitity="1";
    caja_trasera_login.style.opacitity="0";
    
}


function register (){
    formulario__register.style.display="block";
    formulario__login_register.style.left="410px";
    formulario__login.style.display="none";
    caja_trasera_register.style.opacitity="0";
    caja_trasera_login.style.opacitity="1";
    
}
