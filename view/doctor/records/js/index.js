function validation() {
    let isValid = true;

    // Get form inputs
    const name = document.getElementById('patient_name').value.trim();
    const type = document.getElementById('record_type').value.trim();
    const notes = document.getElementById('record_notes').value.trim();
    const problems = document.getElementById('previous_problems').value.trim();
    const date = document.getElementById('previous_reservation_date').value.trim();

    // Validate name
    if (name === '') {
        document.getElementById('error-name').innerHTML = 'Please enter a patient name';
        isValid = false;
    } else {
        document.getElementById('error-name').innerHTML = '';
    }

    // Validate type
    if (type === '') {
        document.getElementById('error-type').innerHTML = 'Please enter a record type';
        isValid = false;
    } else {
        document.getElementById('error-type').innerHTML = '';
    }

    // Validate notes
    if (notes === '') {
        document.getElementById('error-note').innerHTML = 'Please enter record notes';
        isValid = false;
    } else {
        document.getElementById('error-note').innerHTML = '';
    }

    // Validate problems
    if (problems === '') {
        document.getElementById('error-problem').innerHTML = 'Please enter previous problems';
        isValid = false;
    } else {
        document.getElementById('error-problem').innerHTML = '';
    }

    // Validate date
    if (date === '') {
        document.getElementById('error-date').innerHTML = 'Please enter a previous reservation date';
        isValid = false;
    } else {
        document.getElementById('error-date').innerHTML = '';
    }

    return isValid;
}
