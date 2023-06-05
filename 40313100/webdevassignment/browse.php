<<?php
session_start();
    include("function/Functions.php");
    include ("navbar/trial.php");
    $filter = $_GET["sort"];

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
    <div class="col">
     
    </div>
    <div class="col">
      <h1>BROWSE THE TOP 500 OF ALL TIME 2012<h1>
    </div>
    <div class="col">
     
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col">
    <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    Genre
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <li><a class="dropdown-item" href="browse.php?sort=Rock">Rock</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Funk / Soul">Funk / Soul</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Jazz">Jazz</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Blues">Blues</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Pop">Pop</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Classical">Classical</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Reggae">Reggae</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Hip Hop">Hip Hop</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Electronic">Electronic</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Latin">Latin</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=World & Country">World & Country</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=Stage & Screen">Stage & Screen</a></li>
  </ul>
</div>
    </div>
    <div class="col">
    <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  Year 1955 - 1979
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <a class="dropdown-item" href="browse.php?sort=1955">1955</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1956">1956</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1957">1957</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1958">1958</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1959">1959</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1960">1960</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1961">1961</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1962">1962</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1963">1963</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1964">1964</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1965">1965</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1966">1966</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1967">1967</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1968">1968</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1969">1969</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1970">1970</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1971">1971</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1972">1972</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1973">1973</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1974">1974</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1975">1975</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1976">1976</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1977">1977</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1978">1978</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1979">1979</a></li>
            <li><a class="dropdown-item" href="function/showallalbums.php">show all albums</a></li>
  </ul>
</div>
    </div>
    <div class="col">
    <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
  Year 1980 - 2011
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
  <li><a class="dropdown-item" href="browse.php?sort=1989">1980</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1980">1981</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1981">1981</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1982">1982</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1983">1983</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1984">1984</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1985">1985</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1986">1986</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1987">1987</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1988">1988</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1988">1989</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1990">1990</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1991">1991</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1992">1992</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1993">1993</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1994">1994</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1995">1995</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1996">1996</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1997">1997</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1998">1998</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=1999">1999</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2000">2000</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2001">2001</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2002">2002</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2003">2003</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2004">1974</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2005">1975</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2006">2006</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2007">2007</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2008">2008</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2009">2009</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2010">2010</a></li>
            <li><a class="dropdown-item" href="browse.php?sort=2011">2011</a></li>
  </ul>
</div>
    </div>
  </div>
</div>

<div class="containerb-fluid">
<div class ="row">  
    
    <?php 

$read_all = genrefilter($filter);
  echo $read_all;
  $read_all = yearfilter($filter);
echo $read_all;

?>
   
</div>
</div>

</body>

</html>