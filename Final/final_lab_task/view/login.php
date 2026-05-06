<?php
session_start();
if(isset($_SESSION['status']) && $_SESSION['status'] === true){
    header('location: home.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
</head>
<body>


    <form method="post" action="../controller/action.php?action=admin_login" enctype="">
        <fieldset>
            <legend>Admin Login</legend>
            Username: <input type="text" name="username" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>

    
    <a href="signup.php">signup</a>
</body>
</html>
