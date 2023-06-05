<?php


if (($_SERVER['REQUEST_METHOD']==='POST')) {

    include ("../dbConnect.php");
    
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

  
    $username = $conn->real_escape_string($username);
    $fullname = $conn->real_escape_string($fullname);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    $insertquery="INSERT INTO `user` (`username`, `name`, `email`, `password`) 
    VALUES ( '{$username}', '{$fullname}', '{$email}',MD5('{$password}'))";

       
    $result = $conn->query($insertquery);
    
    if(!$result) {
        
        echo $conn->error;
    
    } 
}

?>