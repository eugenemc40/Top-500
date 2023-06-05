<?php
session_start();
$loginsuccess=false;
function userlogin ($username,$password){
    $username="";
    $password="";
    //api for user log in
    $endpoint="http://localhost/webdevassignment/api/userloginapi.php";

    $resourse= file_get_contents($endpoint);
    
        $data=json_decode($resourse,true);

        foreach($data as $row ){
           
            if($username==$row['username'] || MD5($password)==$row ['password']){
                $_SESSION ["userid"]=$row["user_id"];
                    $_SESSION ["adminpriv"] =$row["adminpriv"];
                    $_SESSION ["name"] =$row["name"];
                    
                $loginsuccess=true;}
                if($loginsuccess==true){
                   
                header("Location: ../user_profile.php");
                exit();}
                //else{ header("location: login.php")}
            
        }


}


?>