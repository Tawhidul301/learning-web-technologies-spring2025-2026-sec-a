<?php
    include 'auth_guard.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>xCompany - Dashboard</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="wrapper">

    <?php include 'header_auth.php'; ?>

    <div id="layout">
        <?php include 'sidebar.php'; ?>
        <div id="main">
            <h2>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?></h2>
        </div>
    </div>

    <div id="footer">Copyright &copy; 2017</div>
</div>
</body>
</html>
