function validation() {
    var patientName = document.forms["appointment"]["patient_name"].value;
    var appointmentDate = document.forms["appointment"]["appointment_date"].value;
    var appointmentTime = document.forms["appointment"]["appointment_time"].value;
    var appointmentStatus = document.forms["appointment"]["appointment_status"].value;
    var appointmentType = document.forms["appointment"]["appointment_type"].value;
    var appointmentReason = document.forms["appointment"]["appointment_reason"].value;
    var appointmentNotes = document.forms["appointment"]["appointment_notes"].value;

    if (patientName == "") {
        document.getElementById("error-name").innerHTML = "Please enter a patient name";
        return false;
    }
    if (appointmentDate == "") {
        document.getElementById("error-date").innerHTML = "Please enter an appointment date";
        return false;
    }
    if (appointmentTime == "") {
        document.getElementById("error-time").innerHTML = "Please enter an appointment time";
        return false;
    }
    if (appointmentStatus == "") {
        document.getElementById("error-status").innerHTML = "Please enter an appointment status";
        return false;
    }
    if (appointmentType == "") {
        document.getElementById("error-type").innerHTML = "Please enter an appointment type";
        return false;
    }
    if (appointmentReason == "") {
        document.getElementById("error-reason").innerHTML = "Please enter an appointment reason";
        return false;
    }
    if (appointmentNotes == "") {
        document.getElementById("error-notes").innerHTML = "Please enter appointment notes";
        return false;
    }
    return true;
}
