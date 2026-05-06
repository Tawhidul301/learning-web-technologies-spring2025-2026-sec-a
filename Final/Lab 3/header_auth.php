<?php
?>
<div id="header">
    <div id="logo">

        <span class="x-icon">X</span> Company

    </div>
    <div id="nav">
        Logged in as <a href="profile.php">
            <?php echo htmlspecialchars($_SESSION['username']); ?>
        </a> |
        <a href="logout.php">Logout</a>

        
    </div>
</div>
