<?php
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
    <title>Task B</title>
</head>


<body>
<form method="post">
    DATE OF BIRTH:<br><br>
    dd: <input type="text" name="dd" size="2"/> /
    mm: <input type="text" name="mm" size="2"/> /
    yyyy: <input type="text" name="yyyy" size="4"/>
    <br><br>
    <input type="submit" name="submit" value="Submit"/>


</form>
</body>

</html>