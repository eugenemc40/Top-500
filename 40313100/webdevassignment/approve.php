<?php
session_start();
include("function/showcommentsforapprove.php");
include ("navbar/trial.php");
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
    <title>top 500 albums</title>
</head>
<body>
<?php
    $privledge=$_SESSION["adminpriv"];
    
    $nav= setnav($privledge);
    echo $nav;    
?>
    <h1>Comments for approval</h1>
    <p><h4>Please note do not delete a comment if you do not approve, next update will include 
        disapprove function, if a user makes 4 comments which break community guidlines they will
         have their account deleted.  These comments will be used as proof of their breaking guidlines</h4></p>


         <div class="row">
    <div class="col-sm-6">
    <p>  <?php
               $show=showapproving();
                echo $show;

            ?></p>
            </div>
</div>
</body>
</html>