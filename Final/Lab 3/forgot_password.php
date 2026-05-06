<?php
    session_start();
    
    if(isset($_SESSION['status']) && $_SESSION['status'] == true){
        header('location: dashboard.php');
        exit();
    }
    $msg = '';

    if(isset($_POST['submit'])){
        $email = trim($_REQUEST['email']);
        
        if($email == ''){
            $msg = '<p class="msg-error">Please enter your email address.</p>';
        }
        
        else{
            $found = false;
            if(isset($_SESSION['users'])){
                foreach($_SESSION['users'] as $u){
                    if($u['email'] == $email){
                        $found = true;
                        $msg = '<p class="msg-success">Your password is: <strong>'
                             . htmlspecialchars($u['password'])
                             . '</strong></p>';
                        break;
                    }
                }
            }
            if(!$found){
                $msg = '<p class="msg-error">No account found with that email.</p>';
            }
        }
    }
?>


<head>
    <title>xCompany - Forgot Password</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="wrapper">

    <?php include 'header_public.php'; ?>

    <div id="content">
        <?php echo $msg; ?>
        <fieldset>
            <legend>FORGOT PASSWORD</legend>
            <form method="post">
                <table class="form-table">
                    <tr>
                        <td>Enter Email</td>
                        <td>: <input type="email" name="email" value=""/></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit"/>
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </div>

    <div id="footer">Copyright &copy; 2017</div>
</div>
</body>
</html>
