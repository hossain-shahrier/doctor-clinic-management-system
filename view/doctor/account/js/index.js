
function validation() {
    // get the values of the form inputs
    var patient_name = document.forms["search"]["patient_name"].value;

    // check if the email is empty
    if (patient_name == "") {
        document.getElementById('error').innerHTML = "Please enter patient name .";
        return false;
    }

    return true;
}
