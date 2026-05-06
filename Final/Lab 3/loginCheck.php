<?php
    session_start();

    if(isset($_POST['submit'])){
        $username = trim($_REQUEST['username']);

        $password = $_REQUEST['password'];

        $remember = isset($_REQUEST['remember']) ? true : false;

        if($username==''||$password==''){
            echo "<p style='color:red'>Username and Password cannot be empty!</p>";
            
            echo "<a href='login.php'>Go Back</a>";
            exit();
        }


        $found = false;
        if(isset($_SESSION['users'])){
            foreach($_SESSION['users'] as $index => $u){
                if($u['username'] == $username && $u['password'] == $password){
                    $found = true;
                    
                    $_SESSION['status']=true;
                    $_SESSION['username']=$u['username'];
                    $_SESSION['current_user_index']=$index;

                    if($remember){
                        setcookie('remember_username', $username, time() + (7 * 24 * 60 * 60), '/');
                    }
                    
                    else{
                        setcookie('remember_username', '', time() - 3600, '/');
                    }

                    header('location: dashboard.php');
                    exit();
                }
            }
        }

        if(!$found){
            echo "<p style='color:red'>Invalid username or password!</p>";
            
            echo "<a href='login.php'>Go Back</a>";
            exit();
        }

    }
    
    else{
        header('location: login.php');
        exit();
    }
?>
