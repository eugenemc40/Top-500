<?php
//session_start();
include ("functionlogin.php");

$username = $_POST['uname'];
$password = $_POST['pword'];

       $loginuser= userlogin($username,$password);
       echo $loginuser;
       
     




?>