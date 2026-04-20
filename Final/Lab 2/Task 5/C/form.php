<?php
$degree = [];

if(isset($_POST['submit'])){
    $degree = $_REQUEST['degree'];

    if(empty($degree)){
        echo "No degree selected!<br>";
    } else {
        echo "Selected Degrees: ";
        foreach($degree as $d){
            echo $d . " ";
        }
        echo "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task C</title>
</head>

<body>
<form method="post">
    DEGREE:<br><br>

    <input type="checkbox" name="degree[]" value="SSC" <?php if(isset($degree) && in_array("SSC",$degree)){ echo "checked"; } ?>/> SSC
    <input type="checkbox" name="degree[]" value="HSC" <?php if(isset($degree) && in_array("HSC",$degree)){ echo "checked"; } ?>/> HSC
    <input type="checkbox" name="degree[]" value="BSc" <?php if(isset($degree) && in_array("BSc",$degree)){ echo "checked"; } ?>/> BSc
    <input type="checkbox" name="degree[]" value="MSc" <?php if(isset($degree) && in_array("MSc",$degree)){ echo "checked"; } ?>/> MSc
    <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>
</body>


</html>