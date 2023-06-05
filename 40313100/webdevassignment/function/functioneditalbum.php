<?php
//session_start();
$albid=$_GET['ad'];
$albumnameid=$_GET['an'];
$artistnameid=$_GET['and'];
$albumname=$_POST['albumname'];
$artistname=$_POST['artistname'];
$ranking=$_POST['rank'];





function editalbumname($albumnameid){
    include ("../dbConnect.php");
    
$updatealbumname="UPDATE album_name SET album_name = '{$albumname}' WHERE album_name.album_name_id = '$albumnameid'";

 $conn -> query($updatealbumname);
            
            header("Location: \webdevassignment/showeditalbum.php");
           exit();

}
function editartistname($artistnameid){
    include ("../dbConnect.php");
   
$updateartistname="UPDATE artist SET artist_name = '{$artistname}' WHERE artist.Artist_id = '$albumnameid'";

 $conn -> query($updateartistname);
            
            header("Location: \webdevassignment/showeditalbum.php");
           exit();

}


function editrank($albid){
    include ("../dbConnect.php");
    
$updaterank="UPDATE album SET number = '{$rank}' WHERE album.album_id  = '$albid'";

 $conn -> query($updaterank);
            
            header("Location: \webdevassignment/showeditalbum.php");
           exit();

}
?>