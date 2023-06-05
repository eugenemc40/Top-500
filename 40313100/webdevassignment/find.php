<?php
session_start();
include ("navbar/trial.php");
include("Function/processsearch.php");
$finddata = $_GET["search"];
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


    <div class="container-fluid">
        <div class="row">

        </div>
        <div class="row">
        <div class="col">
        <form class="d-flex" methods = "post" style="width: 18rem;">
        <input name = "search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form></div>
            <div class="col">
                <h1>Top 500 Albums of all Times</h1>
            </div>

        </div>
        
        
    </div>


    <div class="grid">
  <div class="g-row-3 g-start-2">
            
            <?php
                $readartistname = findartistname ($finddata);

                echo $readartistname;?>
                
                <?php
                $readnumber=findnumber($finddata);

                echo $readnumber;
                        ?>
                    <?php
                    $readalbumname = findalbumname ($finddata);

                    echo $readalbumname;
                        ?>
                    <?php                
                    $readsubgenre = findsubgenre ($finddata);

                        echo $readsubgenre;?>
                        <?php
                    $readnumber = findnumber($finddata);

                    echo $readnumber;
                        ?>
                    
                    <?php
                    $readyear = findyear ($finddata);

                    echo $readyear;
                    
                ?></div>
                </div>
                



</body>

</html>