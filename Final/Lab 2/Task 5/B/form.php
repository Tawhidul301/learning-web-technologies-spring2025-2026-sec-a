<?php
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

<html>
<head>
    <title>Task B</title>
</head>
<body>

<form method="post">
    DEGREE:<br><br>
    <input type="checkbox" name="degree[]" value="SSC"/> SSC
    <input type="checkbox" name="degree[]" value="HSC"/> HSC
    <input type="checkbox" name="degree[]" value="BSc"/> BSc
    <input type="checkbox" name="degree[]" value="MSc"/> MSc

    <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>