<?php

if (($_SERVER['REQUEST_METHOD']==='POST')) {

include ("../dbConnect.php");

$userid=" ";               
$albumid=" ";

$userid = $conn->real_escape_string($userid);
$albumid = $conn->real_escape_string($albumid);

$insertquery="INSERT INTO `albums_owned` (`albums_owned_id`, `user_id`, `album_id`) VALUES (NULL, '{$userid}', '{$albumid}');";

$result = $conn->query($insertquery);
    
if(!$result) {
    
    echo $conn->error;

} 

}
?>