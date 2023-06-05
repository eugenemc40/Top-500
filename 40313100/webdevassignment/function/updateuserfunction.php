<?php

if (($_SERVER['REQUEST_METHOD']==='POST')) {

    include ("../dbConnect.php");

$userid = $_GET['id'];
$username = $_POST['username'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = password_hash( $_POST['password'],
PASSWORD_DEFAULT);


    $username = $conn->real_escape_string($username);
    $fullname = $conn->real_escape_string($fullname);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);


    $updateuser = "UPDATE `user`
     SET `username` = '{$username}', `name` = '{$fullname}', `email` = '{$email}', `password` = MD5('{$password}') 
    WHERE `user`.`user_id` = '$userid'";

$result = $conn->query($updateuser);
    
    if(!$result) {
        
        echo $conn->error;}

       
    }



?>