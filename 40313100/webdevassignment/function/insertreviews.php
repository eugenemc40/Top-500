<?php
function insertreview($userid,$albid){
if (($_SERVER['REQUEST_METHOD']==='POST')) {
   $comment=$_POST['comment'];
    $rate=$_POST['rating'];
   $userid=$_GET['ud'];
   $albid=$_GET['ad'];
  

   
include("../dbConnect.php");


    $rate = $conn->real_escape_string($rate);
    $comment = $conn->real_escape_string($comment);
    $albid = $conn->real_escape_string($albid);
    $userid = $conn->real_escape_string($userid);

    $insertquery="INSERT INTO `reviews` ( `ratings`, `comments`, `approved`, `album_id`, `user_id`) 
    VALUES ( '$rate', '$comment', '0', '$albid', '$userid');";


$result = $conn->query($insertquery);
        
if(!$result) {
    
    echo $conn->error;

} 
}  
}
?>