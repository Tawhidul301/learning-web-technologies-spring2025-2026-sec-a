<?php
    session_start();


    if(isset($_SESSION['status']) && $_SESSION['status'] == true){
        header('location: dashboard.php');
        
        exit();
    }

    $remembered_username = '';
    if(isset($_COOKIE['remember_username'])){
        $remembered_username=$_COOKIE['remember_username'];

    }
?>

<head>
    <title>xCompany - Login</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
<div id="wrapper">

    <?php 
    include 'header_public.php'; 
    ?>

    <div id="content">
        <fieldset>
            <legend>LOGIN</legend>
            <form method="post" action="loginCheck.php">
                <table class="form-table">
                    <tr>
                        <td>User Name</td>
                        <td>: <input type="text" name="username" value="<?php echo htmlspecialchars($remembered_username); ?>"/></td>
                    </tr>


                    <tr>
                        <td>Password</td>
                        <td>: <input type="password" name="password" value=""/></td>
                    </tr>
                    <tr class="remember-row">
                        <td colspan="2">
                            <input type="checkbox" name="remember" value="1"
                                <?php 
                                if($remembered_username != '') echo 'checked'; 
                                ?>/> Remember Me
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit"/>
                            <a href="forgot_password.php">Forgot Password?</a>
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
