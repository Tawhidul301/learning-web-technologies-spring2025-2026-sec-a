<?php
if(isset($_POST['submit'])){
    $blood = $_REQUEST['blood'];

    if($blood == ""){
        echo "No blood group selected!";
    } else {
        echo "Selected Blood Group: " . $blood;
    }
} else {
    echo "Invalid request!";
}
?>