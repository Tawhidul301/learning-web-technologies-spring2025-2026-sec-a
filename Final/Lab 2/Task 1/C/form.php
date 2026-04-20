<?php
$name = "";

if(isset($_POST['submit'])){
    $name = $_REQUEST['name'];

    if($name == ""){
        echo "Name cannot be empty!<br>";
    } else {
        echo "Your name is: " . $name . "<br>";
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
    NAME: <input type="text" name="name" value="<?php if(isset($name)){echo $name;}?>"/> <br><br>

    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>