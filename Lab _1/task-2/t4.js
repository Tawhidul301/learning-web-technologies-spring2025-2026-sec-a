function validateDOB() {
    const dd = document.getElementById("dd").value.trim();
    const mm = document.getElementById("mm").value.trim();
    const yyyy = document.getElementById("yyyy").value.trim();
    let msg = document.getElementById("msg");

    if (dd === "" || mm === "" || yyyy === "") {
        msg.innerHTML = "Please fill all the fields..!";
        msg.style.color = "red";
        return false;
    }
    else{
        msg.innerHTML = "Date of Birth selected successfully..!";
        msg.style.color = "green";
        return true;
    }
}