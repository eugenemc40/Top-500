<?php 
session_start();
include ("navbar/trial.php");
include("function/getalbumsowned.php");
include("function/favalbums.php");
$userid=$_SESSION["userid"];
$username=$_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

    
 <title>Top 500 Albums</title>
</head>

<body>
    <?php
    $privledge=$_SESSION["adminpriv"];
    
    $nav= setnav($privledge);
    echo $nav;

    
echo
'<p><h1>Welcome '.$username.' </h1></p>';?>
<div class="container-fluid">
  <div class="row">
  <div class="col"></div>
  <div class="col"></div>
  <div class="col">
  <?php
       
       echo'</br><a class="btn btn-primary" href="showedituser.php?id='.$userid.'" >edit/delete profile</a>'
       ?>
  </div>

</div>
  <div class="row">
    <div class="col">
      <p> <h2> Albums Owned</h2> </p>
    <?php
                $user=$_SESSION ["userid"];
                $album=getalbumsowned($user);
                
                echo $album;
                
                ?>
                </div></br></br>
</div>
<div class = "row">
<div class="col"></br></br></br></br></br></br></br></div>
    <div class="col">
    </br>
      <p><h2> Fav Albums </h2></p>
</br>
    <?php
                $user2=$_SESSION ["userid"];
                $album2=getfavalbums($user2);
                echo $album2 ;
                ?></div>
    
    
</div>
</div>
</body>

</html>