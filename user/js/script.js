function classTestMarks() {
    var classTestMarks = document.querySelector('.Class').value;
    if(classTestMarks >= 0 && classTestMarks <= 30) {
        document.querySelector('.submit-check1').removeAttribute('disabled');
    } else {
        document.querySelector('.submit-check1').setAttribute('disabled', '');
    }
}