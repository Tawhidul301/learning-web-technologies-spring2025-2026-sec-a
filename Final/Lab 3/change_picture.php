<?php

    include 'auth_guard.php';
    $idx  = $_SESSION['current_user_index'];
    $user = $_SESSION['users'][$idx];

    $defaultAvatar = 'data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="35" r="22" fill="%23555"/><ellipse cx="50" cy="90" rx="35" ry="25" fill="%23555"/></svg>';
    $pictureSrc = ($user['picture'] != '') ? $user['picture'] : $defaultAvatar;

    $msg = '';
?>


<head>
    <title>xCompany - Change Profile Picture</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
<div id="wrapper">

    <?php include 'header_auth.php'; ?>


    <div id="layout">

        <?php include 'sidebar.php'; ?>


        <div id="main">
            <?php if($msg != '') echo $msg; ?>

            <fieldset>
                <legend>PROFILE PICTURE</legend>
                
                <form method="post" action="changePictureCheck.php" enctype="multipart/form-data">
                    <img src="<?php echo $pictureSrc; ?>" class="profile-pic-large" alt="Profile Picture"/>
                    <br/>
                    <input type="file" name="picture" accept="image/*"/>
                    <hr/>
                    <input type="submit" name="submit" value="Submit"/>
                </form>

            </fieldset>

        </div>
    </div>


    <div id="footer">Copyright &copy; 2017</div>
</div>
</body>

</html>
