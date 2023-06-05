<?php
//session_start();
function navgen (){
  include("Function/processsearch.php");


echo
'<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="browse.php">Browse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="find.php">find</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="login.php">login</a>
      </li>
      </ul>
      
    </div>
  </div>
</nav>';} 

function navreguser (){
  echo
'<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">logged user</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="browse.php">Browse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="find.php">find</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logoutfunction.php">logout</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>';}


function adminnav (){
  echo
'<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ADMIN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="browse.php">Browse</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="find.php">find</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user_profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="approve.php">approve</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminalluser.php">Edit/delete user</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="showallalbums.php">Edit/delete Album</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logoutfunction.php">logout</a>
      </li>
      </ul>
      
    </div>
  </div>
</nav>';
}


?>


