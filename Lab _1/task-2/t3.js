function validateGender() {
    const radioButtons = document.getElementsByName('gender');
    let msg = document.getElementById('msg');
    let selected = false;

    for (let i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
            selected = true;
            break;
        }
    }

    if (selected) {
        msg.textContent = 'Gender selected successfully..!';
        msg.style.color = 'green';
        return true;
    } 
    else {
        msg.textContent = 'Please select a gender..!';
        msg.style.color = 'red';
        return false;
    }
}