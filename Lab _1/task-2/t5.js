function validateDegree() {
    let checkboxes = document.getElementsByName("degree");
    let msg = document.getElementById("msg");
    let checked = false;

    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            checked = true;
            break;
        }
    }
    if (!checked) {
        msg.innerHTML = "Please select at least one degree..!";
        msg.style.color = "red";
        return false;
    } 
    else {
        msg.innerHTML = "Degree selected successfully..!";
        msg.style.color = "green";
        return true;
    }
}