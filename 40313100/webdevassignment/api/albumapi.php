<?php
//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

include ("../dbConnect.php");

$album="SELECT `album`.*, `year`.`year`, `album_genre`.*, `album_name_album`.*, `album_name`.*, `album_subgenre`.*, `artist_album`.*, `artist`.`artist_name`,concat( `subgenre`.`subgenre`), `year`.`year`
 FROM `album` 
 LEFT JOIN `year` ON `album`.`year_id` = `year`.`year_id` 
 LEFT JOIN `album_genre` ON `album_genre`.`album_id` = `album`.`album_id` 
 LEFT JOIN `album_name_album` ON `album_name_album`.`album_id` = `album`.`album_id` 
 LEFT JOIN `album_name` ON `album_name_album`.`album_name_id` = `album_name`.`album_name_id` 
 LEFT JOIN `album_subgenre` ON `album_subgenre`.`album_id` = `album`.`album_id`
  LEFT JOIN `subgenre` ON `album_subgenre`.`subgenre_id` = `subgenre`.`subgenre_id`
   LEFT JOIN `artist_album` ON `artist_album`.`album_id` = `album`.`album_id` 
   LEFT JOIN `artist` ON `artist_album`.`Artist_id` = `artist`.`Artist_id`
	";

    $result = $conn -> query($album);

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