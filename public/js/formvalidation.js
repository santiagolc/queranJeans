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

function validateNameField() {
    var result = true;
    if(nameField.value.length<6) {
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
    if(surnameField.value.length<6) {
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

nameField.addEventListener("keyup", validateForm);

surnameField.addEventListener("keyup", validateForm);

emailField.addEventListener("keyup", validateForm);

passwordField.addEventListener("keyup", validateForm);

passwordConfirmField.addEventListener("keyup", validateForm);

/* 
nameField.addEventListener("blur", function(e){
    if(e.target.value.length<6) {
        shortNameError.style.display = "block";
    } else {
        shortNameError.style.display = "none";
    }
})
 */