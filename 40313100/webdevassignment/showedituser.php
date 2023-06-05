<?php
session_start();
include ("navbar/trial.php");
include ("function/functionalluser.php");
$userid= $_GET['id'];
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
            <p> <h1> Edit User</h1></p>

            <div class= "container-fluid">
                <div class= "row">
                    <div class= "col">
                        <?php
                       
                       $show=speciticuser($userid);
                        echo $show;
                        ?>
                    </div>
                    <div class= "col">
                    <?php
                echo
                '<form class="row g-3 needs-validation" action="function/updateuserfunction.php?id='.$userid.'" method="POST" novalidate>
                    
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
                    
            <?php
           echo' <div class="d-grid gap-2 d-md-block">
                <form action="function/functiondeleteuser.php?id='.$userid.'" method="POST">
                <button class="btn btn-primary" type="submit" name= "delete" >delete</button>
                </form>
            </div>  
        </div>'?>
            </div>
    </body>
</html>