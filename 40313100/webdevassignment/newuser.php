<?php
include("navbar/navs.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 500</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
    <title>top 500 albums</title>
</head>

<body>
        <?php
                    $navbargen= navgen();
                    echo $navbargen;
                
                    ?>
    
        <div id="newUser">
            <div class="row">


            </div>
        </div>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                <h1>New User </h1>
            </div>
            <div class="col">

            </div>
        </div>

        <div class="row">                   
            <div class="col">
         
            </div>
            <div class="col">
                <?php
                echo
                '<form class="row g-3 needs-validation" action="function/processnewuser.php" method="POST" novalidate>
                    
                <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Fullname</label>
                        <input type="text" class="form-control" name="fullname" value="Full Name" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltipUsername" class="form-label">Username</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend"></span>
                            <input type="text" class="form-control" name="username"
                                aria-describedby="validationTooltipUsernamePrepend" required>
                            <div class="invalid-tooltip">
                                Please choose a unique and valid username.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 position-relative">
                        <label for="validationTooltip03" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="add email" required>
                        <div class="invalid-tooltip">
                            Please provide a valid email.
                        </div>
                    </div>

                    <div class="col-md-3 position-relative">
                    <label for="inputPassword5">Password</label>
                    <input type="password" name="password" class="form-control" aria-describedby="passwordHelpBlock">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </small>
                    </div>
                    <div class="col-md-3 position-relative">

                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>'
                ?>
            </div>
            <div class="col">

            </div>
        </div>

    </div>

    
</body>

</html>