function validateEmail() {
    let email = document.getElementById("email").value.trim();
    let msg = document.getElementById("msg");
    let atPosition = email.indexOf("@");
    let dotPosition = email.lastIndexOf(".");

    if (email === "") {
        msg.innerHTML = "Email cannot be empty..!";
        msg.style.color = "red";
        return false;
    }
    else if (atPosition < 1 || dotPosition < atPosition + 2 || dotPosition === email.length-1) {
        msg.innerHTML = "Please enter a valid email address..!";
        msg.style.color = "red";
        return false;
    }
    else {
        msg.innerHTML = "Email is valid..!";
        msg.style.color = "green";
        return true;
    }
}