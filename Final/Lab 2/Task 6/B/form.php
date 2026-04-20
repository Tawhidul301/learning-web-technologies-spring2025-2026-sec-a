<?php
if(isset($_POST['submit'])){
    $blood = $_REQUEST['blood'];

    if($blood == ""){
        echo "No blood group selected!<br>";
    }
    
    else {
        echo "Selected Blood Group: " . $blood . "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task B</title>
</head>

<body>
<form method="post">
    BLOOD GROUP:<br><br>

    <select name="blood">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>
</body>
</html>