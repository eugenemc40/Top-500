<?php

function getalbum() {

    $endpoint= "http://localhost/webdevassignment/api/getalbumapi.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 $check=false;
  
 foreach($data as $row){
    $albid=$row["album_id"];
    $albname=$row["album_name"];
    $year=$row["year"];
    $yearid=$row["year_id"];
    $rank=$row["number"];
    $albumnameid=$row["album_name_id"];
    $artistname=$row["artist_name"];
    $artistnameid=$row["Artist_id"];
    $albumCover=$row["album_cover"];
    
echo
    '<a href="showeditalbum.php?ad='.$albid.'&yd='.$yearid.'&albnid='.$albumnameid.'&artnid='.$artistnameid.'">
    <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Album Details</li>
    <li class="list-group-item">Album Name: '.$albname.'</li>
    <li class="list-group-item">Artist name: '.$artistname.'</li>
    <li class="list-group-item">Year: '.$year.'</li>
    <li class="list-group-item">Ranking: '.$rank.'</li>
  </ul>
</div></a>';
 }
 }