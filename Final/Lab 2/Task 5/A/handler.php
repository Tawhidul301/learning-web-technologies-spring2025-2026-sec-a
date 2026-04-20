<?php
if(isset($_POST['submit'])){
    $degree = $_REQUEST['degree'];

    if(empty($degree)){
        echo "No degree selected!";
    } else {
        echo "Selected Degrees: ";
        foreach($degree as $d){
            echo $d . " ";
        }
    }
} else {
    echo "Invalid request!";
}
?>