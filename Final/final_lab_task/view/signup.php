<?php
session_start();
if(isset($_SESSION['status']) && $_SESSION['status'] === true){
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Signup</title>
</head>
<body>
    <form method="post" action="../controller/action.php?action=admin_signup" enctype="">
        <fieldset>
            <legend>Admin Signup</legend>
            Name: <input type="text" name="name" value="" /> <br>
            Email: <input type="email" name="email" value="" /> <br>
            Username: <input type="text" name="username" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
    <a href="login.php">login</a>
</body>
</html>
