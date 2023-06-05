<?php

function getusers() {

    $endpoint= "http://localhost/webdevassignment/api/alluserapi.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 $check=false;
 
 foreach($data as $row){
    $userid=$row["user_id"];
    $username=$row["username"];
    $userfullname=$row["name"];
    $useremail=$row["email"];

    
    
echo
    '<a href="showedituser.php?id='.$userid.'">
    <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">User Details</li>
    <li class="list-group-item">Username: '.$username.'</li>
    <li class="list-group-item">Full Name: '.$userfullname.'</li>
    <li class="list-group-item">Email: '.$useremail.'</li>
  </ul>
</div></a>';
 }
 }

 function speciticuser($userid){
 $endpoint= "http://localhost/webdevassignment/api/alluserapi.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 $check=false;
 
 foreach($data as $row){
   if($userid==$row["user_id"]){
    $userid=$row["user_id"];
    $username=$row["username"];
    $userfullname=$row["name"];
    $useremail=$row["email"];

    
    
echo
    '<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">User Details</li>
    <li class="list-group-item">Username: '.$username.'</li>
    <li class="list-group-item">Full Name: '.$userfullname.'</li>
    <li class="list-group-item">Email: '.$useremail.'</li>
  </ul>
</div>';
   }
  }
 }
?>

