<?php


    function findartistname ($finddata) {

        $endpoint ="http://localhost/webdevassignment/api/findapi.php";

        $resourse= file_get_contents($endpoint);
    
        $data=json_decode($resourse,true);



   foreach($data as $row){
            if($finddata==$row["artist_name"]){
            $albumName = $row["album_name"];
            $year = $row["year"];
            $rank = $row["number"];
            $albumCover=$row["album_cover"];
            $artist_name=$row["artist_name"];
            $track=$row["track"];
            $albumid = $row["album_id"];
    
    

                                    echo
                                            '<a href="album.php?id='.$albumid.'&track='.$track.'">
                                            <div class="card-group">
                                                <div class="card float mb-3" style="max-width: 18rem;" >
                                                <img class="card-img-top" src="'.$albumCover.'" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Album Name: '.$albumName.'</h5>
                                                        <h6 class="card-text"> Artist Name: '.$artist_name.'</h6>
                                                        <h6 class="card-text"> Year:'.$year.', Ranking:'.$rank.'</h6>
                                                        </a>
                                                

                                                    </div>

                                                </div>
                                            </div>';
                                             }
                                            }
}
?>

<?php

    function findyear ($finddata) {

        $endpoint ="http://localhost/webdevassignment/api/findapi.php";

        $resourse= file_get_contents($endpoint);
    
        $data=json_decode($resourse,true);



   foreach($data as $row){
            if($finddata==$row["year"]){
            $albumName = $row["album_name"];
            $year = $row["year"];
            $rank = $row["number"];
            $albumCover=$row["album_cover"];
            $artist_name=$row["artist_name"];
            $track=$row["track"];
            $albumid = $row["album_id"];
    
    

                                    echo
                                            '<a href="album.php?id='.$albumid.'&track='.$track.'">
                                            <div class="card-group">
                                                <div class="card float mb-3" style="max-width: 18rem;" >
                                                <img class="card-img-top" src="'.$albumCover.'" alt="Card image cap">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Album Name: '.$albumName.'</h5>
                                                        <h6 class="card-text"> Artist Name: '.$artist_name.'</h6>
                                                        <h6 class="card-text"> Year:'.$year.', Ranking:'.$rank.'</h6>
                                                        </a>
                                                

                                                    </div>

                                                </div>
                                            </div>';
                                             }
                                            }
}
?>


<?php

    function findalbumname ($finddata) {

        $endpoint ="http://localhost/webdevassignment/api/findapi.php";

        $resourse= file_get_contents($endpoint);
    
        $data=json_decode($resourse,true);



   foreach($data as $row){
            if($finddata==$row["album_name"]){
            $albumName = $row["album_name"];
            $year = $row["year"];
            $rank = $row["number"];
            $albumCover=$row["album_cover"];
            $track=$row["track"];
            $albumid = $row["album_id"];
    
    
    

                                    echo
                                            '<a href="album.php?id='.$albumid.'&track='.$track.'">
                                            <div class="card-group">
                                                <div class="card float mb-3" style="max-width: 18rem;" >
                                                <img class="card-img-top" src="'.$albumCover.'" alt="Card image of album">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Album Name: '.$albumName.'</h5>
                                                        <h6 class="card-text"> Artist Name: '.$artist_name.'</h6>
                                                        <h6 class="card-text"> Year:'.$year.', Ranking:'.$rank.'</h6>
                                                        </a>
                                                

                                                    </div>

                                                </div>
                                            </div>';
                                             }
                                            }
}
?>

<?php


function findsubgenre ($finddata) {


$endpoint ="http://localhost/webdevassignment/api/findapi.php";

$resourse= file_get_contents($endpoint);

$data=json_decode($resourse,true);



foreach($data as $row){
    if($finddata==$row["subgenre"]){
    $albumname = $row["album_name"];
    $albumid = $row["album_id"];
    $year = $row["year"];
    $rank = $row["number"];
    $albumcover=$row["album_cover"];
    $artistname=$row["artist_name"];
    $subgenre=$row["subgenre"];
    $track=$row["track"];
  
                            
                            echo
                            '<a href="album.php?id='.$albumid.'&track='.$track.'">
                            <div class="card-group">						 
                            <div class="card float mb-3" style="max-width: 18rem;" >
                            <img class="card-img-top" src="'.$albumcover.'" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">Album Name: '.$albumname.'</h5>
                            <h6 class="card-text"> Artist Name: '.$artistname.'</h6>
                            <h6 class="card-text"> Year:'.$year.', Ranking:'.$rank.'</h6>
                            <h6 class="card-text"> Subgenre:'.$subgenre.'</h6> 
                            
                            </a> </div>

                            </div>
                        </div>';
                                                                 
                                     }
                                    }
}
?>


<?php
function findnumber ($finddata) {

    $endpoint ="http://localhost/webdevassignment/api/findapi.php";

    $resourse= file_get_contents($endpoint);

    $data=json_decode($resourse,true);



foreach($data as $row){
    if($finddata==$row["number"]){
    $albumName = $row["album_name"];
    $year = $row["year"];
    $rank = $row["number"];
    $albumCover=$row["album_cover"];
    $artist_name=$row["artist_name"];
    $track=$row["track"];
    $albumid = $row["album_id"];




                            echo
                                    '<a href="album.php?id='.$albumid.'&track='.$track.'">
                                    <div class="card-group">
                                        <div class="card float mb-3" style="max-width: 18rem;" >
                                        <img class="card-img-top" src="'.$albumCover.'" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Album Name: '.$albumName.'</h5>
                                                <h6 class="card-text"> Artist Name: '.$artist_name.'</h6>
                                                <h6 class="card-text"> Year:'.$year.', Ranking:'.$rank.'</h6>
                                                </a>
                                        

                                            </div>

                                        </div>
                                    </div>';
                                     }
                                    }
}
?>