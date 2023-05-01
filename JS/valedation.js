var nameError = document.getElementById('name-error');
var emailError = document.getElementById('Email-error');
var passwordError = document.getElementById('password-error');
var CopasswordError = document.getElementById('Copassword-error');

function validateName() {
    var name = document.getElementById('contac-name').value;
    if (name.length == 0) {
        nameError.innerHTML = 'Name is required';
        return false;

    }
    if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {
        nameError.innerHTML = 'Write full name';
        return false;
    }

    nameError.innerHTML = "";
    return true;
}




function ValidateEmail() {

    var email = document.getElementById('contac-email').value;

    if (email.length == 0) {
        emailError.innerHTML = 'Email is required';
        return false;
    } else if (email.length > 0) {
        if (!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {
            emailError.innerHTML = 'Email Invalid';
            return false;
        }
        emailError.innerHTML = "";
        return true;
    }

}


function ValidatePassword() {

    var password = document.getElementById('contac-password').value;

    if (password.length == 0) {
        passwordError.innerHTML = 'password is required';
        return false;

    } else if (password.length < 7) {
        passwordError.innerHTML = "password length at least 7";
        return false;
    }
    passwordError.innerHTML = "";
    return true;
}




function ValidateConfirmPassword() {

    var Copassword = document.getElementById('contac-Copassword').value;
    var password = document.getElementById('contac-password').value;
    if (Copassword.length == 0) {
        CopasswordError.innerHTML = 'required';
        return false;

    } else if (Copassword != password) {
        CopasswordError.innerHTML = "must match";
        return false;
    } else {
        CopasswordError.innerHTML = "";
        return true;
    }

}



function validateForm(e) {
    if (validateName() === false || ValidateEmail() === false
        || ValidatePassword() === false || ValidateConfirmPassword() === false) {
        e.preventDefault();
        return false;
    }
}


function validateFeedBackForm(e) {
    if (validateName() === false || ValidateEmail() === false) {
        e.preventDefault();
        return false;
    }
}


function validateLogin(e) {
    if (ValidatePassword() === false || ValidateEmail() === false) {
        e.preventDefault();
        return false;
    }
}