
<?php

function showapproving(){
 $endpoint= "http://localhost/webdevassignment/api/getcommentsforreviewapi.php";
    $resourse= file_get_contents($endpoint);
     
    $data=json_decode($resourse,true);
 $check=false;
 
 foreach($data as $row){
     $username=$row['username'];
     $review=$row['review_id'];
     $comment=$row['comments']; 


    
    
echo
    '
    <form action="function/commentapprove.php?rd='.$review.'" method="POST" name="approve">
    <div class="card .me-auto " style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Comment Details</li>
    <li class="list-group-item">Username: '.$username.'</li>
    <li class="list-group-item">Comment: '.$comment.'</li>
  </ul>
</div>
<div class="col-12">
 <button class="btn btn-primary" type="submit">Submit</button>
</div>
</form>';
   
  }
  
 }
?>