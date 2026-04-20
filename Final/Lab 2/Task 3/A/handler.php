<?php
if(isset($_POST['submit'])){
    
    $dd = $_REQUEST['dd'];
    $mm = $_REQUEST['mm'];
    $yyyy = $_REQUEST['yyyy'];



    if($dd == "" || $mm == "" || $yyyy == ""){
        echo "Null date of birth!";
    } 
    else {
        echo "Your DOB is: " . $dd . "/" . $mm . "/" . $yyyy;
    }
}

else {
    echo "Invalid request!";
}
?>