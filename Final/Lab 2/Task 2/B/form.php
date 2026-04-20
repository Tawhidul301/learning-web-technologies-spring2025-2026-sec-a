<?php
if(isset($_POST['submit'])){
    $email = $_REQUEST['email'];

    if($email == ""){
        echo "Email cannot be empty!<br>";
    } else {
        echo "Your email is: " . $email . "<br>";
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
    EMAIL: <input type="text" name="email" value=""/> <br>
    <input type="submit" name="submit" value="Submit"/>
</form>
</body>

</html>