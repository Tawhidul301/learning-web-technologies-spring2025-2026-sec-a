<?php
$gender = "";

if(isset($_POST['submit'])){
    $gender = $_REQUEST['gender'];

    if($gender == ""){
        echo "No gender selected!<br>";
    }
    
    else {
        echo "Selected Gender: " . $gender . "<br>";
    }
}
?>

<html>
<head>
    <title>Task C</title>
</head>


<body>
<form method="post">
    GENDER:<br><br>
    <input type="radio" name="gender" value="Male" <?php if(isset($gender) && $gender=="Male"){ echo "checked"; } ?>/> Male
    <input type="radio" name="gender" value="Female" <?php if(isset($gender) && $gender=="Female"){ echo "checked"; } ?>/> Female
    <input type="radio" name="gender" value="Other" <?php if(isset($gender) && $gender=="Other"){ echo "checked"; } ?>/> Other
    <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>
</body>


</html>