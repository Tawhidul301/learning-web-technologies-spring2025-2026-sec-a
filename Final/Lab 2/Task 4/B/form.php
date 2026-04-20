<?php
if(isset($_POST['submit'])){
    $gender = $_REQUEST['gender'];

    if($gender == ""){
        echo "No gender selected!<br>";
    } else {
        echo "Selected Gender: " . $gender . "<br>";
    }
}
?>

<html>
<head>
    <title>Task B</title>
</head>
<body>

<form method="post">
    GENDER:<br><br>

    <input type="radio" name="gender" value="Male"/> Male
    <input type="radio" name="gender" value="Female"/> Female
    <input type="radio" name="gender" value="Other"/> Other

    <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>