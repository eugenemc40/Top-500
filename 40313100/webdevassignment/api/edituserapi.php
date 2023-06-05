<?php

header("Content-Type: application/json");

if (($_SERVER['REQUEST_METHOD']==='POST')) {

    include ("../dbConnect.php");

    $userid=$_GET['user_id'];
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

  
    $userid = $conn->real_escape_string($userid);
    $username = $conn->real_escape_string($username);
    $fullname = $conn->real_escape_string($fullname);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    $insertquery= "UPDATE user SET username = '{$username}', name = '{$fullname}', email = '{$email}', password = MD5('{$password}'))
     WHERE user.user_id = $userid";
    
    

       
    $result = $conn->query($insertquery);
    
    if(!$result) {
        
        echo $conn->error;
    
    } 
}

?>