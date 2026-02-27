function validateName() {
    let name = document.getElementById("name").value.trim();
    let msg = document.getElementById("msg");

    if (name === "") {
        msg.innerHTML = "Please enter your name!";
        msg.style.color = "red";
        return false;
    }

    let firstCode = name.charCodeAt(0);
    let startsWithLetter = 
        (firstCode >= 65 && firstCode <= 90) || 
        (firstCode >= 97 && firstCode <= 122);

    if (!startsWithLetter) {
        msg.innerHTML = "Name must start with a letter!";
        msg.style.color = "red";
        return false;
    }

    let wordCount = 0;
    let inWord = false;

    for (let i = 0; i < name.length; i++) {
        let code = name.charCodeAt(i);

        let isLetter = (code >= 65 && code <= 90) || (code >= 97 && code <= 122);
        let isSpace = (code === 32);
        let isDot = (code === 46);
        let isHyphen = (code === 45);

        if (!isLetter && !isSpace && !isDot && !isHyphen) {
            msg.innerHTML = "Only letters, spaces, dots, and hyphens allowed!";
            msg.style.color = "red";
            return false;
        }

        if (isLetter) {
            if (!inWord) {
                wordCount++;
                inWord = true;
            }
        } else {
            inWord = false;
        }
    }

    if (wordCount < 2) {
        msg.innerHTML = "Name must contain at least two words!";
        msg.style.color = "red";
        return false;
    }

    msg.innerHTML = "Welcome, " + name + "!";
    msg.style.color = "green";
    return true;
}