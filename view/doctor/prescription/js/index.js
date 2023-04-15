function validation() {
    // Get form inputs
    const patientName = document.getElementById('patient_name').value.trim();
    const patientId = document.getElementById('patient_id').value.trim();
    const doctorName = document.getElementById('doctor_name').value.trim();
    const doctorId = document.getElementById('doctor_id').value.trim();
    const prescription = document.getElementById('prescription').value.trim();

    // Define error messages
    const errorName = 'Please enter a valid name.';
    const errorDoctorName = 'Please enter a valid name.';
    const errorId = 'Please enter a valid ID.';
    const errorDoctorId = 'Please enter a valid ID.';
    const errorPrescription = 'Please enter a prescription.';

    // Flag to track if any validation errors occurred
    let validationFailed = false;

    // Validate patient name
    if (patientName.length < 2) {
        document.getElementById('error-name').innerHTML = errorName;
        validationFailed = true;
    } else {
        document.getElementById('error-name').innerHTML = '';
    }

    // Validate patient ID
    if (patientId.length === 0) {
        document.getElementById('error-id').innerHTML = errorId;
        validationFailed = true;
    } else {
        document.getElementById('error-id').innerHTML = '';
    }

    // Validate doctor name
    if (doctorName.length < 2) {
        document.getElementById('error-doctor-name').innerHTML = errorDoctorName;
        validationFailed = true;
    } else {
        document.getElementById('error-doctor-name').innerHTML = '';
    }

    // Validate doctor ID
    if (doctorId.length === 0) {
        document.getElementById('error-doctor-id').innerHTML = errorDoctorId;
        validationFailed = true;
    } else {
        document.getElementById('error-doctor-id').innerHTML = '';
    }

    // Validate prescription
    if (prescription.length === 0) {
        document.getElementById('error-prescription').innerHTML = errorPrescription;
        validationFailed = true;
    } else {
        document.getElementById('error-prescription').innerHTML = '';
    }

    // If any validation errors occurred, prevent form submission
    if (validationFailed) {
        return false;
    }

    return true;
}
