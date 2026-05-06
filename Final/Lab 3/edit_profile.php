<?php
    include 'auth_guard.php';
    $idx  = $_SESSION['current_user_index'];
    $user = $_SESSION['users'][$idx];
    $msg  = '';
?>

<head>
    <title>xCompany - Edit Profile</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="wrapper">


    <?php include 'header_auth.php'; ?>

    <div id="layout">
        <?php include 'sidebar.php'; ?>
        <div id="main">
            <?php
            if($msg != '') echo $msg;
            ?>

            <fieldset>
                <legend>EDIT PROFILE</legend>
                <form method="post" action="editProfileCheck.php">
                    <table class="form-table">
                        <tr>
                            <td>Name</td>
                            <td>: <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>"/></td>
                        </tr>


                        <tr>
                            <td>Email</td>
                            <td>: <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"/> <strong>i</strong></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>:
                                <input type="radio" name="gender" value="Male" <?php if($user['gender'] == 'Male') echo 'checked'; ?>/>Male
                                <input type="radio" name="gender" value="Female" <?php if($user['gender'] == 'Female') echo 'checked'; ?>/>Female
                                <input type="radio" name="gender" value="Other" <?php if($user['gender'] == 'Other') echo 'checked'; ?>/>Other
                            </td>
                        </tr>


                        <tr>
                            <td>Date of Birth</td>
                            <td>:
                                <input type="text" name="dob" value="<?php echo htmlspecialchars($user['dob']); ?>" style="width:120px;"/>
                                <br/><em style="font-size:11px;">(dd/mm/yyyy)</em>
                            </td>
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
    </div>


    <div id="footer">Copyright &copy; 2017</div>
</div>


</body>
</html>
