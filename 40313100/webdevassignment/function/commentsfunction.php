<?php

function commentsshow ($albid){

$endpoint= "http://localhost/webdevassignment/api/commentsapi.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 $check=false;
 
 
 foreach($data as $row){
    if($albid==$row["album_id"]){
        $username=$row["username"];
        $comment=$row["comments"];

        echo
        ' <div class="card" style="width: 18rem;">
         <div class="card-body">
         <h5 class="card-title">'.$username.'</h5>
         <h6 class="card-text"> Review: '.$comment.'</h6>
         
         </div>
         </div>';



    }
}
}
?>