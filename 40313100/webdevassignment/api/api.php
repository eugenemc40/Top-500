<?php
//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

    include ("../dbConnect.php");

           
            
            $filterquery ="SELECT `album`.`album_id`, `album`.`number`, `album`.`album_cover`, `album`.`track`, `year`.`year`, `album_name_album`.*, `album_name`.`album_name`, `artist_album`.*, `artist`.*, `album_genre`.*, `genre`.`genre`
            FROM `album` 
                LEFT JOIN `year` ON `album`.`year_id` = `year`.`year_id` 
                LEFT JOIN `album_name_album` ON `album_name_album`.`album_id` = `album`.`album_id` 
                LEFT JOIN `album_name` ON `album_name_album`.`album_name_id` = `album_name`.`album_name_id` 
                LEFT JOIN `artist_album` ON `artist_album`.`album_id` = `album`.`album_id` 
                LEFT JOIN `artist` ON `artist_album`.`Artist_id` = `artist`.`Artist_id` 
                LEFT JOIN `album_genre` ON `album_genre`.`album_id` = `album`.`album_id` 
                LEFT JOIN `genre` ON `album_genre`.`Genre_id` = `genre`.`Genre_id`;";



            $result = $conn -> query($filterquery);

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