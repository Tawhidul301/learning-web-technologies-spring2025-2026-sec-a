<?php
    include 'auth_guard.php';
    $idx  = $_SESSION['current_user_index'];
    $user = $_SESSION['users'][$idx];

    $defaultAvatar = 'data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="35" r="22" fill="%23555"/><ellipse cx="50" cy="90" rx="35" ry="25" fill="%23555"/></svg>';
    $pictureSrc = ($user['picture'] !='') ?$user['picture']: $defaultAvatar;
?>

<head>
    <title>xCompany - View Profile</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="wrapper">


    <?php include 'header_auth.php'; ?>



    <div id="layout">

        <?php include 'sidebar.php'; ?>


        <div id="main">

            <fieldset class="profile-box">
                <legend>PROFILE</legend>

                <div class="profile-pic-wrapper">
                    <img src="<?php echo $pictureSrc; ?>" class="profile-pic-thumb" alt="Profile Picture"/>
                    <br/>
                    <a href="change_picture.php" style="font-size:12px;">Change</a>
                </div>


                <table class="profile-table">
                    <tr>
                        <td>Name</td>
                        <td>:<?php echo htmlspecialchars($user['name']); ?></td>
                    </tr>

                    <tr>
                        <td>Email</td>
                        <td>:<?php echo htmlspecialchars($user['email']); ?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:<?php echo htmlspecialchars($user['gender']); ?></td>
                    </tr>

                    <tr>
                        <td>Date of Birth</td>
                        <td>:<?php echo htmlspecialchars($user['dob']); ?></td>
                    </tr>
                </table>


                <br/>
                <a href="edit_profile.php">Edit Profile</a>
            </fieldset>
        </div>

    </div>

    <div id="footer">Copyright &copy; 2017</div>
</div>
</body>
</html>
