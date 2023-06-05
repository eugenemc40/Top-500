<?php
session_start();
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

    <div class="container-fluid">
        <div class="row">

        </div>
        <div class="row">
            <div class="col">
                <h1>Top 500 Albums of all Times</h1>
            </div>

        </div>
        <div class="row">

        </div>
        <div class="row">
        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">

            </div>

        </div>
    </div>


    <div class="container-fluid">
        <div class="row">

        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col-md-6">
                <p>Welcome to the top 500 albums of all times. Here you can view the albums, and the artists who created
                    them play some selected tracks from the album</p>
            </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="image/top_500.jpg">
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <div class="row">

        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <p>Users of this site have two options the first option for everyone is feel free to be able to
                    search and browse the various artists and albums with the top 500 albums. Membership is free and
                    unlocks alot of
                    abilities for you to enjoy.</p>

            </div>
            <div class="col">

            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>

           

            <div class="col">

            </div>
        </div>

    </div>
    

</body>

</html>