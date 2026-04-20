<?php
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
    <title>Task B</title>
</head>
<body>

<form method="post" enctype="">
    NAME: <input type="text" name="name" value=""/> <br><br>
    <input type="submit" name="submit" value="Submit"/>
</form>

</body>
</html>