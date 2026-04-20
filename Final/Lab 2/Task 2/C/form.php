<?php
$email = "";

if(isset($_POST['submit'])){
    $email = $_REQUEST['email'];

    if($email == ""){
        echo "Email cannot be empty!<br>";
    } else {
        echo "Your email is: " . $email . "<br>";
    }
}
?>

<html>
<head>
    <title>Task C</title>
</head>

<body>
<form method="post">
    EMAIL: <input type="text" name="email" value="<?php if(isset($email)){ echo $email; } ?>"/><br>
    <input type="submit" name="submit" value="Submit"/>
</form>
</body>

</html>