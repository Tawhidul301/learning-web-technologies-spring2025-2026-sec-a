<?php
    session_start();

    if(isset($_POST['submit'])){
        $name=trim($_REQUEST['name']);
        $email=trim($_REQUEST['email']);
        $username= trim($_REQUEST['username']);
        $password=$_REQUEST['password'];
        $confirm=$_REQUEST['confirm_password'];
        $gender=isset($_REQUEST['gender']) ? $_REQUEST['gender'] : '';
        $dob_dd=trim($_REQUEST['dob_dd']);
        $dob_mm=trim($_REQUEST['dob_mm']);
        $dob_yyyy=trim($_REQUEST['dob_yyyy']);
        $dob=$dob_dd . '/' . $dob_mm . '/' . $dob_yyyy;

        if($name=='' || $email=='' || $username=='' || $password==''){
            echo "<p style='color:red'>All fields are required!</p>";
            echo "<a href='register.php'>Go Back</a>";
            exit();
        }

        if($password!=$confirm){
            echo "<p style='color:red'>Passwords do not match!</p>";
            echo "<a href='register.php'>Go Back</a>";
            exit();
        }

        if(!isset($_SESSION['users'])){
            $_SESSION['users']=[];
        }

        foreach($_SESSION['users'] as $u){
            if($u['username'] == $username){
                echo "<p style='color:red'>Username already taken!</p>";
                echo "<a href='register.php'>Go Back</a>";
                exit();
            }
        }
        $newUser = [
            'name'     => $name,
            'email'    => $email,
            'username' => $username,
            'password' => $password,
            'gender'   => $gender,
            'dob'      => $dob,
            'picture'  => ''
        ];
        
        

        $_SESSION['users'][] = $newUser;
        header('location: login.php');
        exit();

    }
    
    else{
        header('location: register.php');
        exit();
    }
?>
