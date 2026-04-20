<?php
if(isset($_POST['submit'])){
    $email = $_REQUEST['email'];

    if($email == ""){
        echo "Email cannot be empty!";
    } else {
        echo "Your email is: " . $email;
    }
} else {
    echo "Invalid request!";
}
?>