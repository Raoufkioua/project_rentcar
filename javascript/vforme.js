var email = document.forms["vforme"]["email"];
var password = document.forms["vforme"]["pass"];


var email_error = document.getElementById("email_error");
var password_error = document.getElementById("password_error");


email.addEventListener("blur", emailVerify, True);
password.addEventListener("blur", passwordVerify, True);


function Validate() {
    if (email.value == '') {
        email.style.border = '1px solid red';
        email_error.textContent = 'Email is required';
        email.focus();
        return false;
    }
    if (password.value == '') {
        password.style.border = '1px solid red';
        password_error.textContent = 'Cin is required';
        password.focus();
        return false;
    }
}

function emailVerify() {
    if (email.value != "") {
        email.style.border = "1px solid #5E6E66";
        email_error.innerHTML = "";
        return true;

    }
}
function passwordVerify() {
    if (password.value != "") {
        password.style.border = "1px solid #5E6E66";
        password_error.innerHTML = "";
        return true;

    }
}