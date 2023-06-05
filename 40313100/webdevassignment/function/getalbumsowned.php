<?php
//session_start();

function getalbumsowned($user) {

    $endpoint= "http://localhost/webdevassignment/api/getalbumsownedapi.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 $check=false;
 
 
 foreach($data as $row){
     if($user==$row["user_id"]){
     $albumpic = $row["thumbnail"];
        $owned=$row['albums_owned_id'];
        
        
     echo
     '
     <div style= "width: 120px; height: 100px;" >
     <form action ="function/deleteownedalbum.php?od='.$owned.'"method="POST" name="approve">
     <img src="'.$albumpic.'" class="img-thumbnail"  alt="...">   
     <div class="d-grid gap-2 d-md-flex justify-content-md-end">
     <div class="col-12">
     <button class="btn btn-primary" type="submit">Delete</button>
    </div> 
      </form></div>
      </br></br>
      ';
     
    }
    }
}
?>