<?php

 
  include ("../dbConnect.php");

  
$owned=$_GET['od'];
        $deletequery= "DELETE FROM albums_owned WHERE albums_owned.albums_owned_id = '$owned'";

        

       if ($conn->query($deletequery) === TRUE) {
         echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . $conn->error;
       }
        
        $conn->close();

      header("Location: ../user_profile.php");
      
?>