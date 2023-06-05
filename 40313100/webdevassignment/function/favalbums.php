<?php
//session_start();
function getfavalbums($user) {

    $endpoint= "http://localhost/webdevassignment/api/getfavalbumsapi.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 $check=false;
 
 
 foreach($data as $row){
     if($user==$row["user_id"]){
     $albumpic = $row["thumbnail"];
     $owned=$row['fav_album_id'];
     
     echo
     '
     <div class="row">
     <div style= "width: 120px; height: 100px;" >
     <form action ="function/deletefavalbum.php?fd='.$owned.'"method="POST" name="approve">
     <img src="'.$albumpic.'" class="img-thumbnail"  alt="...">
     <div class="d-grid gap-2 d-md-flex justify-content-md-end">
     <div class="col-12">
     <button class="btn btn-primary" type="submit">Delete</button>
    </div> 
      </form>
      </div></div>';
     }
    }
}
?>