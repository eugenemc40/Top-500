<?php
//function to filter genre
function genrefilter($filterdata) {

   $endpoint= "http://localhost/webdevassignment/api/api.php";
   $resourse= file_get_contents($endpoint);
    
   $data=json_decode($resourse,true);



foreach($data as $row){
    if($filterdata==$row["genre"]){
    $albumName = $row["album_name"];
    $year = $row["year"];
    $rank = $row["number"];
    $albumCover=$row["album_cover"];
    $artist_name=$row["artist_name"];
    $genre=$row["genre"];
    

echo
    '<div class="card-group">
        <div class="card float mb-3" style="max-width: 18rem;" >
        <img class="card-img-top" src="'.$albumCover.'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Album Name: '.$albumName.'</h5>
                <h6 class="card-text"> Artist Name: '.$artist_name.'</h6>
                <h6 class="card-text"> Year:'.$year.', Ranking:'.$rank.'</h6>
               

            </div>

        </div>
    </div>';}
}
}

?>


<?php
//function to filter year
function yearfilter($yeardata) {

    $endpoint= "http://localhost/webdevassignment/api/api.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 
 
 
 foreach($data as $row){
     if($yeardata==$row["year"]){
    $albumName = $row["album_name"];
    $year = $row["year"];
    $rank = $row["number"];
    $albumCover=$row["album_cover"];
    $artist_name=$row["artist_name"];
    
    

echo
    '<div class="card-group">
        <div class="card float mb-3" style="max-width: 18rem;" >
        <img class="card-img-top" src="'.$albumCover.'" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Album Name: '.$albumName.'</h5>
                <h6 class="card-text"> Artist Name: '.$artist_name.'</h6>
                <h6 class="card-text"> Year:'.$year.', Ranking:'.$rank.'</h6>
           

            </div>

        </div>
    </div>';}
     }
}

?>
