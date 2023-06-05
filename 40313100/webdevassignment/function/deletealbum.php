<?php
include ("../dbConnect.php");
$albid=$_POST['id'];

    $deletealbum="DELETE FROM `album` WHERE `album`.`album_id`= '$albid'";
    
                
    if ($conn->query($deletealbum) === TRUE) {
      echo "Record deleted successfully";
     } else {
       echo "Error deleting record: " . $conn->error;
    }
     
     $conn->close();
    
    header("Location: ../index.php");
    
    ?>