<?php
    session_start();
    if(isset($_SESSION['status']) && $_SESSION['status']==true){
        header('location: dashboard.php');
        exit();
    }
?>
<head>
    <title>xCompany - Home</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="wrapper">
    <?php include 'header_public.php'; ?>
    <div id="content">
        <h2>Welcome to xCompany</h2>
    </div>
    <div id="footer">Copyright &copy; 2017</div>
</div>


</body>
</html>
