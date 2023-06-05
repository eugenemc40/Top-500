<?php
session_start();
include ("navbar/trial.php");
include ("function/functionalbum.php");
//include ("function/functioneditalbum.php");
$albid=$_GET['ad'];
$yearid=$_GET['yd'];
$albumnameid=$_GET['albnid'];
$artistnameid=$_GET['artnid'];


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
<p> <h1> Edit Album </h1> </p>
    <div class="container-fluid">
        <div class = "row">
            <div class="col">
            <?php
                
                $album=showalbum ($albid);                
            
                echo $album;
                
                ?>


            </div>
            <div class ="col">
                <?php echo
                '<form method="POST" action="function/functioneditalbum.php?and='.$artistnameid.'">
            <div class="mb-3">
  <label for="Edit artist name" class="form-label">Edit artist name</label>
  <input type="text" class="form-control" id="artistname" name="artistname" placeholder="Edit artist name">
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>';
?>
<?php echo
'<form method="POST" action="function/functioneditalbum.php?an='.$albumnameid.'">
<div class="mb-3">
  <label for="edit album name" class="form-label">edit album name</label>
  <input type="text" class="form-control" id="albumname" name="albumname" placeholder="edit album name">
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>';?>
<?php echo
'<form method="POST" action="function/functioneditalbum.php?ad='.$albid.'">
<div class="mb-3">
  <label for="edit ranking" class="form-label">Ranking</label>
  <input type="text" class="form-control" id="rank" name="rank" placeholder="edit ranking">
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>';?>
            </div>
         
        </div>
    <div class="row">
        <?php
        echo
        '<form method="POST" action="function\deletealbum.php?id='.$albid.'" >
    <div class="col-auto">
    <button type="submit" class="btn btn-primary">Delete</button>
  </div>';
  ?>
</form>
    </div>
    </div>
</body>
</html>