<?php
if(isset($_POST['submit'])){
    $name = $_REQUEST['name'];

    if($name == ""){
        echo "Name cannot be empty!";
    } else {
        echo "Your name is: " . $name;
    }
} else {
    echo "Invalid request!";
}
?>