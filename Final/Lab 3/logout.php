<?php
    session_start();
    unset($_SESSION['status']);
    unset($_SESSION['username']);
    unset($_SESSION['current_user_index']);
    header('location: login.php');
    exit();
?>
