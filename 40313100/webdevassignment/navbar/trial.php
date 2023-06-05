<?php

include ("navbar/navs.php");


function setnav ($adminpriv){
    
    
    if($_SESSION["userid"] && $adminpriv==true){
        $genadmin= adminnav();
        echo $genadmin;
        }
    
    elseif ($_SESSION["userid"] && $adminpriv==false){
        $genlogged= navreguser();
        echo $genlogged;
        
    }
    elseif(!$_SESSION["userid"]) {
        $navs= navgen();
         echo $navs;
        }
}
?>