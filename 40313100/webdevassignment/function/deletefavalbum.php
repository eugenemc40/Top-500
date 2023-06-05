<?php

 
  include ("../dbConnect.php");

  
$owned=$_GET['fd'];
        $deletequery= "DELETE FROM fav_album WHERE fav_album.fav_album_id = '$owned'";
        

        

       if ($conn->query($deletequery) === TRUE) {
         echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . $conn->error;
       }
        
        $conn->close();

      header("Location: ../user_profile.php");
      
?>