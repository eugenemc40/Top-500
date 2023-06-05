<?php
 
function albumsowned($userid,$albid){


if (($_SERVER['REQUEST_METHOD']==='POST')) {  

    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "web_dev_assignment";
    
    
    
    
    
    $conn = new mysqli($host, $user, $pw, $db);
    
    if ($conn ->connect_error) {
        
        $check="not connected".$conn->connect_error;
        
    }             
    
    $userid = $conn->real_escape_string($userid);
    $albid = $conn->real_escape_string($albid);
    
    $insertquery="INSERT INTO albums_owned (albums_owned_id, user_id, album_id) VALUES (NULL, '{$userid}', '{$albid}')";
    
    $result = $conn->query($insertquery);
        
    if(!$result) {
        
        echo $conn->error;
    
    } 


}
}

function albumsfav($userid,$albid){


    if (($_SERVER['REQUEST_METHOD']==='POST')) {  
    
        $host = "emcatasney02.webhosting6.eeecs.qub.ac.uk";
        $user = "emcatasney02";
        $pw = "	lf9BnhTxPH1rrrQV";
        $db = "emcatasney02";
        
        
        
        
        $conn = new mysqli($host, $user, $pw, $db);
        
        if ($conn ->connect_error) {
            
            $check="not connected".$conn->connect_error;
            
        }             
        
        $userid = $conn->real_escape_string($userid);
        $albid = $conn->real_escape_string($albid);
        
        $insertfav="INSERT INTO `fav_album` (`fav_album_id`, `album_id`, `user_id`) VALUES (NULL, '$albid', '$userid');";
        
        $result = $conn->query($insertfav);
            
        if(!$result) {
            
            echo $conn->error;
        
        } 
    
    
    }
    }
?>