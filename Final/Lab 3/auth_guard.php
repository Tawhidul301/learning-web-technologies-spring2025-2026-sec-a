<?php
session_start();
if(!isset($_SESSION['status']) || $_SESSION['status'] != true){
    header('location: login.php');
    exit();
}
?>
