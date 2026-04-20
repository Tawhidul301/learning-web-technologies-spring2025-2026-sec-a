<?php
if(isset($_POST['submit'])){
    $gender = $_REQUEST['gender'];
    
    if($gender == ""){
        echo "No gender selected!";
    }
    
    else {
        echo "Selected Gender: " . $gender;
    }
}

else {
    echo "Invalid request!";
}
?>