
<?php
include ("../dbConnect.php");

$userid=$_GET['id'];

$deleteuser="DELETE FROM user WHERE user.user_id = '$userid'";

            
if ($conn->query($deleteuser) === TRUE) {
  echo "Record deleted successfully";
 } else {
   echo "Error deleting record: " . $conn->error;
}
 
 $conn->close();

header("Location: ../index.php");
?>