<?php 
$host = "localhost";
$user = "root";
$pw = "";
$db = "web_dev_assignment";




$conn = new mysqli($host, $user, $pw, $db);

if ($conn ->connect_error) {
    
    $check="not connected".$conn->connect_error;
    
} 
?>