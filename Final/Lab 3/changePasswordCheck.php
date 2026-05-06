<?php
    include 'auth_guard.php';

    if(isset($_POST['submit'])){
        $current = $_REQUEST['current_password'];

        $newPass = $_REQUEST['new_password'];

        $retype  = $_REQUEST['retype_password'];


        $idx  = $_SESSION['current_user_index'];
        $user = $_SESSION['users'][$idx];

        if($current== ''|| $newPass == ''||$retype==''){
            echo "<p style='color:red'>All fields are required!</p>";

            echo "<a href='change_password.php'>Go Back</a>";
            exit();
        }

        if($current!=$user['password']){
            echo "<p style='color:red'>Current password is incorrect!</p>";
            
            echo "<a href='change_password.php'>Go Back</a>";
            exit();
        }

        if($newPass!=$retype){
            echo "<p style='color:red'>New passwords do not match!</p>";
            echo "<a href='change_password.php'>Go Back</a>";
            
            exit();
        }
        $_SESSION['users'][$idx]['password'] = $newPass;
        header('location: dashboard.php');
        exit();

    }
    
    else{
        header('location: change_password.php');
        exit();
    }
?>
