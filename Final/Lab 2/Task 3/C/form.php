<?php

$dd = "";
$mm = "";
$yyyy = "";

if(isset($_POST['submit'])){

    $dd = $_REQUEST['dd'];
    $mm = $_REQUEST['mm'];
    $yyyy = $_REQUEST['yyyy'];

    if($dd == "" || $mm == "" || $yyyy == ""){
        echo "Null date of birth!<br>";
    }
    
    else {
        echo "Your DOB is: " . $dd . "/" . $mm . "/" . $yyyy . "<br>";
    }
}
?>

<html>
<head>
    <title>Task C</title>
</head>


<body>
<form method="post">
    DATE OF BIRTH:<br><br>
    dd: <input type="text" name="dd" size="2" value="<?php if(isset($dd)){ echo $dd; } ?>"/> /
    mm: <input type="text" name="mm" size="2" value="<?php if(isset($mm)){ echo $mm; } ?>"/> /
    yyyy: <input type="text" name="yyyy" size="4" value="<?php if(isset($yyyy)){ echo $yyyy; } ?>"/>
    <br><br>


    <input type="submit" name="submit" value="Submit"/>
</form>
</body>

</html>