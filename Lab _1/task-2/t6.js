function validateBlood() {
    let bloodGroup = document.getElementById("bloodGroup");
    let msg = document.getElementById("msg");
    let checked = false;
    
    if (bloodGroup.value === "") {
        msg.innerHTML = "Please select at least one blood group..!";
        msg.style.color = "red";
        return false;
    }
    else {
        msg.innerHTML = "Blood group selected successfully..!";
        msg.style.color = "green";
        return true;
    }
}