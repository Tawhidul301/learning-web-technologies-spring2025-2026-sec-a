<?php
    include 'auth_guard.php';
?>
<head>
    <title>xCompany - Change Password</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="wrapper">
    <?php include 'header_auth.php'; ?>


    <div id="layout">
        <?php 
        include 'sidebar.php';
        ?>


        <div id="main">
            <fieldset>
                <legend>CHANGE PASSWORD</legend>
                <form method="post" action="changePasswordCheck.php">
                    <table class="form-table">
                        <tr>
                            <td>Current Password</td>
                            <td>: <input type="password" name="current_password" value=""/></td>
                        </tr>
                        <tr>
                            <td class="label-new-pass">New Password</td>
                            <td>: <input type="password" name="new_password" value=""/></td>
                        </tr>


                        <tr>
                            <td class="label-retype-pass">Retype New Password</td>
                            <td>: <input type="password" name="retype_password" value=""/></td>
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
