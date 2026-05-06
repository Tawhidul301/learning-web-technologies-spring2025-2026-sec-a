<?php
session_start();
require_once('../model/jobModel.php');
if(!isset($_COOKIE['status'])){
    header('location: login.php');
}
$employers = getAllEmployers();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employer Dashboard</title>
</head>
<body>
    <h1>Welcome Home <?php echo $_SESSION['username']; ?></h1>
    <a href="../controller/action.php?action=logout">Logout</a>
    <br><br>

    <form method="post" action="../controller/action.php?action=create_employer" enctype="">
        <fieldset>
            <legend>Register New Employer</legend>
            Employer Name: <input type="text" name="employer_name" value="" /> <br>
            Company Name: <input type="text" name="company_name" value="" /> <br>
            Contact No: <input type="text" name="contact_no" value="" /> <br>
            Username: <input type="text" name="username" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br>
            <input type="submit" name="submit" value="Register" />
        </fieldset>
    </form>

    <br>
    Search Employer: <input type="text" id="search_key" onkeyup="searchEmployers()" />
    <br><br>

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Employer Name</th>
            <th>Company Name</th>
            <th>Contact No</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <tbody id="employer_rows">
        <?php foreach($employers as $emp){ ?>
            <tr>
                <td><?php echo $emp['id']; ?></td>
                <td><?php echo $emp['employer_name']; ?></td>
                <td><?php echo $emp['company_name']; ?></td>
                <td><?php echo $emp['contact_no']; ?></td>
                <td><?php echo $emp['username']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $emp['id']; ?>">EDIT</a> |
                    <a href="../controller/action.php?action=delete_employer&id=<?php echo $emp['id']; ?>" onclick="return confirm('Are you sure?')">DELETE</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <script src="../assets/js/search.js"></script>
</body>
</html>
