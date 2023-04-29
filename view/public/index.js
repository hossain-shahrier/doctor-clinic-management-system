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
    // prevent the default form submission
    event.preventDefault();

    // get the values of the form inputs
    var email = document.forms["login"]["email"].value;
    var password = document.forms["login"]["password"].value;

    // create an AJAX request
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = xhr.responseText;
                var data = JSON.parse(response);
                if (data.success) {
                    window.location.href = "../view/doctor/home.php";
                } else {
                    document.getElementById("error").innerHTML = data.errors.email;
                    document.getElementById("errorPass").innerHTML = data.errors.password;
                }
            } else {
                console.log('There was a problem with the request.');
            }
        }
    };
    xhr.open('POST', '../controller/loginCheck.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('email=' + email + '&password=' + password);

    return false;
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
    // Collect form data
    var username = document.forms["signup"]["username"].value;
    var email = document.forms["signup"]["email"].value;
    var password = document.forms["signup"]["password"].value;
    var repassword = document.forms["signup"]["repassword"].value;
    var phone = document.forms["signup"]["phone"].value;
    var address = document.forms["signup"]["address"].value;

    // Validate form data
    validateRegistration(username, email, password, repassword, phone, address);

    // Always return false to prevent the  from submitting
    return false;
}

// AJAX

function validateRegistration(username, email, password, repassword, phone, address) {
    var xhr = new XMLHttpRequest();
    var url = "../controller/registrationCheck.php";
    var params = "username=" + encodeURIComponent(username) +
        "&email=" + encodeURIComponent(email) +
        "&password=" + encodeURIComponent(password) +
        "&repassword=" + encodeURIComponent(repassword) +
        "&phone=" + encodeURIComponent(phone) +
        "&address=" + encodeURIComponent(address);
    xhr.open("POST", url, true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;

            var errors = {};
            if (response) {
                errors = JSON.parse(response).errors;
            }
            // Check for successful registration response and redirect to login page
            var data = JSON.parse(response);
            if (data.success) {
                // handle successful insert, e.g. redirect to login page
                window.location.href = "login.php";
            }
            // Display errors to user
            if (errors.username) {
                document.getElementById("error-username").innerHTML = errors.username;
            } else {
                document.getElementById("error-username").innerHTML = '';
            }
            if (errors.email) {
                document.getElementById("error-email").innerHTML = errors.email;
            } else {
                document.getElementById("error-email").innerHTML = '';
            }
            if (errors.password) {
                document.getElementById("error-password").innerHTML = errors.password;
            } else {
                document.getElementById("error-password").innerHTML = '';
            }
            if (errors.repassword) {
                document.getElementById("error-repassword").innerHTML = errors.repassword;
            } else {
                document.getElementById("error-repassword").innerHTML = '';
            }
            if (errors.phone) {
                document.getElementById("error-phone").innerHTML = errors.phone;
            } else {
                document.getElementById("error-phone").innerHTML = '';
            }
            if (errors.address) {
                document.getElementById("error-address").innerHTML = errors.address;
            } else {
                document.getElementById("error-address").innerHTML = '';
            }

        }

    };
    xhr.send(params);
}
