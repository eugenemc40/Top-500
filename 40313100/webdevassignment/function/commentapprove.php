<?php
include ("../dbConnect.php");
$rateid=$_GET['rd'];


$update="UPDATE reviews SET approved = '1' WHERE reviews.review_id = '$rateid'";

 $conn -> query($update);
            
            header("Location: \webdevassignment/approve.php");
           exit();

?>