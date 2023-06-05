<?php
//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

    include ("../dbConnect.php"); 

    $finduser= "SELECT album.*, year.*, album_name_album.*, album_name.*, artist_album.*, artist.*
    FROM album 
        LEFT JOIN year ON album.year_id = year.year_id 
        LEFT JOIN album_name_album ON album_name_album.album_id = album.album_id
        LEFT JOIN album_name ON album_name_album.album_name_id = album_name.album_name_id
        LEFT JOIN artist_album ON artist_album.album_id = album.album_id 
        LEFT JOIN artist ON artist_album.Artist_id = artist.Artist_id";
        


$result = $conn -> query($finduser);

if(!$result) {
    echo $conn->error;
    }

    $api_response= array();

  
    while ($row = $result->fetch_assoc()){
        array_push($api_response, $row);

    }
        $response = json_encode($api_response);


        echo $response;

}
?>