<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <title>top 500 albums</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <nav class="navbar navbar-light bg-primary">
            <a class="navbar-brand" href="#">
                <img src="image/logo.jpg" width="85" height="55" alt="logo top 500 albums">
            </a>
        </nav>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="browse.php">Browse</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="newUser.php">sign up
                    </a>
                </li>
            </ul>

    </nav>
    <div class="container">

        <div class="row">


        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            <h1>Login</h1>
        </div>
        <div class="col">

        </div>
    </div>
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
        <div class="begincontent fg-white bg-black p-6 mx-auto border bd-default win-shadow">
        <?php
            echo "<div><h2>Login</h2></div>
                <form method='POST' action='function/loginprocess.php'>
                <div class='form-group'>
                <label>Username</label>
                <input name='uname' type='text' class='metro-input' required='required' placeholder='Enter your username'>
                </div>
                <div class='form-group'>
                <label>Password</label>
                <input name='pword' type='password' class='metro-input' required='required' placeholder='Enter your password'>
                </div>
                <input class='button yellow outline pl-10 pr-10 mt-10 place-right' type='submit' value='login'>
                </form>";     
        ?>
    </div>

    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
        </div>
        <div class="col">

        </div>
    </div>
    </div>


    <body>

    </body>

</html>