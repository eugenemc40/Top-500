<?php
function averagecalc($albumid){
   $count=0;
   $total=0;
$endpoint= "http://localhost/webdevassignment/api/ratingsapi.php";
$resourse= file_get_contents($endpoint);
 
$data=json_decode($resourse,true);
$check=false;


foreach($data as $row){
 if($albumid==$row["album_id"]){
         $rate=$row["ratings"];   
        
 $total=$total+$rate;
    $count++;
    $average=$total/$count;
return $average;

}
}
}
?>