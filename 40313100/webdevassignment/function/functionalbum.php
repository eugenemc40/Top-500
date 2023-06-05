<?php
include ("function/calculateaveragefunction.php");
function showalbum ($albid){

$endpoint= "http://localhost/webdevassignment/api/albumapi.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 $check=false;
 
 
 foreach($data as $row){
    if($albid==$row["album_id"]){
    $albumName = $row["album_name"];
    $albumid = $row["album_id"];
    $year = $row["year"];
    $rank = $row["number"];
    $albumcover=$row["album_cover"];
    $artistname=$row["artist_name"];
    $track=$row["track"];
  
   $avgrate= averagecalc($albumid);

                            echo
                           ' <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="'.$albumcover.'" alt="Artist image">
                            <div class="card-body">
                            <h5 class="card-title">Album Name: '.$albumName.'</h5>
                            <h6 class="card-text"> Artist Name: '.$artistname.'</h6>
                            <h6 class="card-text"> Year:'.$year.', Ranking:'.$rank.'</h6>
                            <h6 class="card-text"> User average rating:'.$avgrate.'</h6>
                            </div>
                            </div>';
                            


    }
    }

    
}
?>