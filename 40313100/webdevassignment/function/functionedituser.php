<?php

$userid=$_GET['user_id'];
$username = $_POST['username'];
$name = $_POST['fullname'];
$email = $_POST['email'];
$password = password_hash( $_POST['password'],
PASSWORD_DEFAULT);




$endpoint ="http://localhost/webdevassignment/api/edituserapi.php";


$postdata = http_build_query(
    array(
        $userid => $userid,
        'username' => $username,
        'fullname' => $name,
        'email' => $email,
        'password' => $password
    )
);

$opts = array(

    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content'=> $postdata
    )
);

$context = stream_context_create($opts);
$resource = file_get_contents($endpoint, false, $context);

echo $resource;

if($resource !== FALSE) {
    
    header("Location: \webdevassignment/login.php");
   exit();

} else {
    echo "Problem with INSERT!";
}

?>