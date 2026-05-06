<?php
require_once('db.php');

function clean($value){
    $con = getConnection();
    return mysqli_real_escape_string($con, trim($value));
}


function loginAdmin($admin){
    $con = getConnection();
    $username = clean($admin['username']);
    $password = clean($admin['password']);
    $sql = "SELECT * FROM admins WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);
    return ($result && mysqli_num_rows($result) == 1);
}



function addAdmin($admin){
    $con = getConnection();
    $name = clean($admin['name']);
    $email = clean($admin['email']);
    $username = clean($admin['username']);
    $password = clean($admin['password']);
    $sql = "INSERT INTO admins VALUES(NULL, '{$name}', '{$email}', '{$username}', '{$password}')";
    return mysqli_query($con, $sql);
}

function addEmployer($emp){
    $con = getConnection();
    $employer_name = clean($emp['employer_name']);
    $company_name = clean($emp['company_name']);
    $contact_no = clean($emp['contact_no']);
    $username = clean($emp['username']);
    $password = clean($emp['password']);
    $sql = "INSERT INTO employers VALUES(NULL, '{$employer_name}', '{$company_name}', '{$contact_no}', '{$username}', '{$password}')";
    return mysqli_query($con, $sql);
}



function getAllEmployers(){
    $con = getConnection();
    $sql = "SELECT * FROM employers ORDER BY id DESC";
    $result = mysqli_query($con, $sql);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}



function getEmployerById($id){
    $con = getConnection();
    $id = (int)$id;
    $sql = "SELECT * FROM employers WHERE id={$id}";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($result);
}



function updateEmployer($emp){
    $con = getConnection();
    $id = (int)$emp['id'];
    $employer_name = clean($emp['employer_name']);
    $company_name = clean($emp['company_name']);
    $contact_no = clean($emp['contact_no']);
    $username = clean($emp['username']);
    $password = clean($emp['password']);
    $sql = "UPDATE employers SET employer_name='{$employer_name}', company_name='{$company_name}', contact_no='{$contact_no}', username='{$username}', password='{$password}' WHERE id={$id}";
    return mysqli_query($con, $sql);
}


function deleteEmployer($id){
    $con = getConnection();
    $id = (int)$id;
    $sql = "DELETE FROM employers WHERE id={$id}";
    return mysqli_query($con, $sql);
}




function searchEmployers($key){
    $con = getConnection();
    $key = clean($key);
    if($key === ''){
        return getAllEmployers();
    }
    $sql = "SELECT * FROM employers WHERE employer_name LIKE '%{$key}%' OR company_name LIKE '%{$key}%' OR contact_no LIKE '%{$key}%' OR username LIKE '%{$key}%' ORDER BY id DESC";
    $result = mysqli_query($con, $sql);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


?>