function signup() {
    location.href = '../register.php';
}
function login() {
    location.href = '../view/login.php';
}
function home() {
    location.href = '../view/index.html';
}

function validation() {
    // get the values of the form inputs
    var email = document.forms["login"]["email"].value;
    var password = document.forms["login"]["password"].value;
    var rememberMe = document.forms["login"]["rememberMe"].checked;

    // check if the email is empty
    if (email == "") {
        document.getElementById('error').innerHTML = "Please enter your email address .";
        return false;
    }

    // check if the email format is valid
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        document.getElementById('error').innerHTML = "Invalid email format.";
        return false;
    }

    // check if the password is empty
    if (password == "") {
        document.getElementById('errorPass').innerHTML = "Please enter your password .";
        return false;
    }

    // check if the password is at least 6 characters long
    if (password.length < 6) {
        document.getElementById('errorPass').innerHTML = "Password must be at least 6 characters long .";
        return false;
    }
    if (rememberMe) {
        document.cookie = "email=" + email + ";expires=30;path=/";
    }
    return true;
}

window.onload = function () {
    var email = getCookie('email');
    if (email != "") {
        location.href = "./doctor/account/";
    }
}

function getCookie(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();
    return "";
}

function validateForm() {
    var username = document.forms["signup"]["username"].value;
    var email = document.forms["signup"]["email"].value;
    var password = document.forms["signup"]["password"].value;
    var repassword = document.forms["signup"]["repassword"].value;
    var phone = document.forms["signup"]["phone"].value;
    var address = document.forms["signup"]["address"].value;

    var error = false;

    // Check if username is empty
    if (username == "") {
        document.getElementById("error-username").innerHTML = "Please enter your username.";
        return error;
    }

    // Check if email is empty
    if (email == "") {
        document.getElementById("error-email").innerHTML = "Please enter your email.";
        return error;
    }

    // Check if email format is valid
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        document.getElementById("error-email").innerHTML = "Invalid email format.";
        return error;
    }

    // Check if password is empty
    if (password == "") {
        document.getElementById("error-password").innerHTML = "Please enter your password.";
        return error;
    }

    // Check if password is at least 6 characters long
    if (password.length < 6) {
        document.getElementById("error-password").innerHTML = "Password must be at least 6 characters long.";
        return error;
    }

    // Check if re-entered password is empty
    if (repassword == "") {
        document.getElementById("error-repassword").innerHTML = "Please re-enter your password.";
        return error;
    }

    // Check if passwords match
    if (password != repassword) {
        document.getElementById("error-repassword").innerHTML = "Passwords do not match.";
        return error;
    }

    // Check if phone number is empty
    if (phone == "") {
        document.getElementById("error-phone").innerHTML = "Please enter your phone number.";
        return error;
    }

    // Check if address is empty
    if (address == "") {
        document.getElementById("error-address").innerHTML = "Please enter your address.";
        return error;
    }

    // Return false if there was an error, true otherwise
    return !error;
}
