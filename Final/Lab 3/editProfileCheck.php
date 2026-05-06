<?php
    include 'auth_guard.php';

    if(isset($_POST['submit'])){
        $name=trim($_REQUEST['name']);
        $email=trim($_REQUEST['email']);
        $gender=isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';

        $dob=trim($_REQUEST['dob']);

        if($name==''||$email ==''){
            echo "<p style='color:red'>Name and Email cannot be empty!</p>";
            
            echo "<a href='edit_profile.php'>Go Back</a>";
            exit();
        }

        $idx = $_SESSION['current_user_index'];

        $_SESSION['users'][$idx]['name']   = $name;
        $_SESSION['users'][$idx]['email']  = $email;
        $_SESSION['users'][$idx]['gender'] = $gender;
        $_SESSION['users'][$idx]['dob']    = $dob;

        header('location: profile.php');
        exit();

    }
    
    else{
        header('location: edit_profile.php');
        exit();
    }
?>