<?php
    session_start();
    if(isset($_SESSION['status']) && $_SESSION['status'] == true){
        header('location: dashboard.php');
        exit();
    }
    $error = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>xCompany - Registration</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="wrapper">

    <?php 
    include 'header_public.php'; 
    ?>

    <div id="content">

        <?php if($error!=''): ?>
            <p class="msg-error"><?php echo $error; ?></p>
        <?php endif; ?>

        <fieldset>
            <legend>REGISTRATION</legend>
            <form method="post" action="registerCheck.php" enctype="multipart/form-data">
                <table class="form-table">
                    <tr>
                        <td>Name</td>
                        <td>: <input type="text" name="name" value=""/></td>
                    </tr>


                    <tr>
                        <td>Email</td>
                        <td>: <input type="email" name="email" value=""/> <strong>i</strong></td>
                    </tr>

                    <tr>
                        <td>User Name</td>
                        <td>: <input type="text" name="username" value=""/></td>
                    </tr>
                    <tr>

                        <td>Password</td>
                        <td>: <input type="password" name="password" value=""/></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>: <input type="password" name="confirm_password" value=""/></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset class="gender-group">
                                <legend>Gender</legend>
                                <input type="radio" name="gender" value="Male"/> Male
                                <input type="radio" name="gender" value="Female"/> Female
                                <input type="radio" name="gender" value="Other"/> Other
                            </fieldset>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <fieldset class="dob-group">
                                <legend>Date of Birth</legend>
                                <input type="text" name="dob_dd" class="dob-input" maxlength="2" placeholder="DD"/> /
                                <input type="text" name="dob_mm" class="dob-input" maxlength="2" placeholder="MM"/> /
                                <input type="text" name="dob_yyyy" class="dob-year" maxlength="4" placeholder="YYYY"/>
                                <em>(dd/mm/yyyy)</em>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Submit"/>
                            <input type="reset" value="Reset"/>
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
