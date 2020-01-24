//capturo todos los elementos y sus errores
var theButton = document.getElementById("submitButton");

var nameField = document.getElementById("name");
var shortNameError = document.getElementById("shortName");

var surnameField = document.getElementById("surname");
var shortSurnameError = document.getElementById("shortSurnameError");

var emailField = document.getElementById("email");
var shortEmailError = document.getElementById("shortEmail");
var emailFormatError = document.getElementById("emailFormatError");

var passwordField = document.getElementById("password");
var shortPasswordError = document.getElementById("shortPassword");

var passwordConfirmField = document.getElementById("password-confirm");
var passwordConfirmError = document.getElementById("passwordMatcherror");



//creo function que empieza con una flag en true, dentro contiene funciones creadas mas abajo, si hay un error en una de estas cambia a false, al final ese flag define el estado del boton de submit (si queda disbaled o no)
function validateForm() {
    var result = true;
    if(!validateNameField()) {
        result = false;
    }else if (!validateSurnameField()) {
        result = false;
    } else if (!validateEmailField()) {
        result = false;
    } else if (!validatePasswordField()) {
        result = false;
    } else if (!validateConfirmPasswordField()) {
        result = false;
    } 
    if(result) {
        theButton.disabled = false;
    } else {
        theButton.disabled = true;
    }
    return result;
}

//se crea funcion validateNamefield con flag true. Por cada campo se comprueban sus errores (x ejemplo: si esta vacio, si es corto lo que se ingreso, ademas dentro se arman otros if's que verifican que se haya escrito al menos un caracter antes de mandar mensaje de error. (sigue en otro renglon)
//Esto ultimo se hizo porque sino cada vez que salias de un formulario el de abajo le saltaba el cartel de error, y aun no se le habia llenado el campo. Despues de cada funcion se retorna la flag.
function validateNameField() {
    var result = true;
    if(nameField.value.length<3) {
        result = false;
        if(nameField.value.length>0) {
            shortNameError.style.display = "block";
        }   
    } else {
        shortNameError.style.display = "none";
    }
    return result;
}

function validateSurnameField() {
    var result = true;
    if(surnameField.value.length<3) {
        result = false;
        if(surnameField.value.length>0) {
            shortSurnameError.style.display = "block";
        }   
    } else {
        shortSurnameError.style.display = "none";
    }
    return result;
}

function validateEmailField() {
    var result = true;
    emailFormatError.style.display = "none";
    shortEmailError.style.display = "none";
    if(!emailField.value.includes("@")) {
        result = false;
        if(emailField.value.length>0) {
            emailFormatError.style.display = "block";
        }     
    } else if (emailField.value.length<9) {
        result = false;  
        if(emailField.value.length>0) {
            shortEmailError.style.display = "block";
        }   
    }
    return result;
}

function validatePasswordField() {
    var result = true;
    if(passwordField.value.length<6) {
        result = false;
        if(passwordField.value.length>0) {
            shortPasswordError.style.display = "block";
        }  
    } else {
        shortPasswordError.style.display = "none";
    }
    return result;
}

function validateConfirmPasswordField() {
    var result = true;
    if(passwordField.value !== passwordConfirmField.value){
        result = false;
        if(passwordConfirmField.value.length>0) {
            passwordConfirmError.style.display = "block";
        }  
    } else {
        passwordConfirmError.style.display = "none";
    }
    return result;
}

//se eligio como evento un evento de teclado llamado "keyup" que sucede cuando soltas una tecla, la dejas de apretar. Eso esta buenisimo porque el evento solo se va a disparar cuando se escriba en el 
nameField.addEventListener("keyup", validateForm);

surnameField.addEventListener("keyup", validateForm);

emailField.addEventListener("keyup", validateForm);

passwordField.addEventListener("keyup", validateForm);

passwordConfirmField.addEventListener("keyup", validateForm);

