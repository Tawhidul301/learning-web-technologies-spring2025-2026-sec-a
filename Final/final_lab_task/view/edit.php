<?php
session_start();

require_once('../model/jobModel.php');

if(!isset($_COOKIE['status'])){
    header('location: login.php');
}
$id = $_GET['id'] ?? '';
$emp = getEmployerById($id);


if(!$emp){
    header('location: dashboard.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Employer</title>
</head>
<body>
    <a href="dashboard.php">Back</a> |
    <a href="../controller/action.php?action=logout">Logout</a>
    <br><br>

    <form method="post" action="../controller/action.php?action=edit_employer" enctype="">
        <fieldset>
            <legend>Edit Employer</legend>
            ID: <input type="text" name="id" readonly value="<?php echo $emp['id']; ?>" /> <br>
            Employer Name: <input type="text" name="employer_name" value="<?php echo $emp['employer_name']; ?>" /> <br>
            Company Name: <input type="text" name="company_name" value="<?php echo $emp['company_name']; ?>" /> <br>
            Contact No: <input type="text" name="contact_no" value="<?php echo $emp['contact_no']; ?>" /> <br>
            Username: <input type="text" name="username" value="<?php echo $emp['username']; ?>" /> <br>
            Password: <input type="password" name="password" value="<?php echo $emp['password']; ?>" /> <br>
            <input type="submit" name="submit" value="Update" />
        </fieldset>
    </form>
</body>
</html>
