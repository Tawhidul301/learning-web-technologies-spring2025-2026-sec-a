function validation() {
    let msg = document.getElementById("msg");

    if (!validateName()) return false;
    if (!validateEmail()) return false;
    if (!validateGender()) return false;
    if (!validateDOB()) return false;
    if (!validateBlood()) return false;
    if (!validateDegree()) return false;
    if (!validatePhoto()) return false;

    msg.innerHTML = "Form submitted successfully!";
    msg.style.color = "green";
    return true;
}