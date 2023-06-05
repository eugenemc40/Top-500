<?php



//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

include ("../dbConnect.php");
       
$username="";
$password="";

 $userlog= "SELECT `user`.`user_id`, `user`.`name`, `user`.`adminpriv`, `user`.`password`
 FROM `user`";

$result = $conn -> query($userlog);



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




include ("../dbConnect.php");
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

$ratequery="SELECT `reviews`.`album_id`, `reviews`.`ratings`
FROM `reviews`";


    $result = $conn -> query($ratequery);



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




if (($_SERVER['REQUEST_METHOD']==='POST')) {

    include ("../dbConnect.php");
    
    $username=$_POST['username'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

  
    $username = $conn->real_escape_string($username);
    $fullname = $conn->real_escape_string($fullname);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    $insertquery="INSERT INTO `user` (`username`, `name`, `email`, `password`) 
    VALUES ( '{$username}', '{$fullname}', '{$email}',MD5('{$password}'))";

       
    $result = $conn->query($insertquery);
    
    if(!$result) {
        
        echo $conn->error;
    
    } 
}





session_start();
include ("../dbConnect.php");

$querynav="SELECT  `user`.`user_id`, `user`.`adminpriv` FROM `user`;";

$result = $conn -> query($querynav);



    if(!$result) {
        echo $conn->error;
        }
    
        $api_response= array();
    
      
        while ($row = $result->fetch_assoc()){
            array_push($api_response, $row);
    
        }
            $response = json_encode($api_response);
    
    
            echo $response;


//make api
include ("../dbConnect.php");
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

 $userdetails="SELECT `user`.`user_id`, `user`.`username`, `user`.`name`, `user`.`email`
                FROM `user`;";

$result = $conn -> query($userdetails);



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



//make api
include ("../dbConnect.php");
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){


$user="";
$getfav ="SELECT `album`.`thumbnail`, `fav_album`.`album_id`, `fav_album`.`user_id`
 FROM `album` 
 LEFT JOIN `fav_album` ON `fav_album`.`album_id` = `album`.`album_id`;";

$result = $conn -> query($getfav);



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


//make api
include ("../dbConnect.php");
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){


$user="";
$getowned ="SELECT `album`.*, `albums_owned`.`albums_owned_id`, `albums_owned`.`user_id`, `albums_owned`.`album_id`
FROM `album` 
	LEFT JOIN `albums_owned` ON `albums_owned`.`album_id` = `album`.`album_id`;";

$result = $conn -> query($getowned);



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



if($_SERVER['REQUEST_METHOD']==='GET'){

    include ("../dbConnect.php"); 

    $findquery= "SELECT `album`.*, `album_name_album`.*, `album_name`.`album_name`, `artist_album`.*, `artist`.`artist_name`, `year`.*, `album_subgenre`.*, `subgenre`.`subgenre` 
        FROM `album`
        LEFT JOIN `album_name_album` ON `album_name_album`.`album_id` = `album`.`album_id` 
        LEFT JOIN `album_name` ON `album_name_album`.`album_name_id` = `album_name`.`album_name_id` 
        LEFT JOIN `artist_album` ON `artist_album`.`album_id` = `album`.`album_id` 
        LEFT JOIN `artist` ON `artist_album`.`Artist_id` = `artist`.`Artist_id`
        LEFT JOIN `year` ON `album`.`year_id` = `year`.`year_id` 
        LEFT JOIN `album_subgenre` ON `album_subgenre`.`album_id` = `album`.`album_id` 
        LEFT JOIN `subgenre` ON `album_subgenre`.`subgenre_id` = `subgenre`.`subgenre_id` ";
        


$result = $conn -> query($findquery);

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



//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

include ("../dbConnect.php");

$showcomments="SELECT `user`.`user_id`, `user`.`username`, `reviews`.`album_id`, `reviews`.`comments` 
FROM `user` 
LEFT JOIN `reviews` ON `reviews`.`user_id` = `user`.`user_id`;";

$result = $conn -> query($showcomments);

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


//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

    include ("../dbConnect.php");

           
            
            $filterquery ="SELECT `album`.*, `artist_album`.*, `artist`.*, `album_name_album`.*, `album_name`.*, `year`.*, `album_genre`.*, `genre`.`genre`
            FROM `album` 
            LEFT JOIN `artist_album` ON `artist_album`.`album_id` = `album`.`album_id`
            LEFT JOIN `artist` ON `artist_album`.`Artist_id` = `artist`.`Artist_id` 
            LEFT JOIN `album_name_album` ON `album_name_album`.`album_id` = `album`.`album_id` 
            LEFT JOIN `album_name` ON `album_name_album`.`album_name_id` = `album_name`.`album_name_id` 
            LEFT JOIN `year` ON `album`.`year_id` = `year`.`year_id` 
            LEFT JOIN `album_genre` ON `album_genre`.`album_id` = `album`.`album_id`
            LEFT JOIN `genre` ON `album_genre`.`Genre_id` = `genre`.`Genre_id`";



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



//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

    include ("../dbConnect.php"); 

    $finduser= "SELECT `user`.`username`, `user`.`name`, `user`.`email`
    FROM `user`";
        


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





if (($_SERVER['REQUEST_METHOD']==='POST')) {

    include ("../dbConnect.php");
    
    $userid=" ";               
    $albumid=" ";
    
    $userid = $conn->real_escape_string($userid);
    $albumid = $conn->real_escape_string($albumid);
    
    $insertquery="INSERT INTO `albums_owned` (`albums_owned_id`, `user_id`, `album_id`) VALUES (NULL, '{$userid}', '{$albumid}');";
    
    $result = $conn->query($insertquery);
        
    if(!$result) {
        
        echo $conn->error;
    
    } 
    
    }



//make api
header("Content-Type: application/json");

if($_SERVER['REQUEST_METHOD']==='GET'){

include ("../dbConnect.php");

$album="SELECT `album`.*, `year`.`year`, `album_name_album`.*, `album_name`.`album_name`, `artist_album`.*, `artist`.`artist_name`
 FROM `album`
  LEFT JOIN `year` ON `album`.`year_id` = `year`.`year_id` 
  LEFT JOIN `album_name_album` ON `album_name_album`.`album_id` = `album`.`album_id` 
  LEFT JOIN `album_name` ON `album_name_album`.`album_name_id` = `album_name`.`album_name_id` 
  LEFT JOIN `artist_album` ON `artist_album`.`album_id` = `album`.`album_id`
  LEFT JOIN `artist` ON `artist_album`.`Artist_id` = `artist`.`Artist_id`";

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