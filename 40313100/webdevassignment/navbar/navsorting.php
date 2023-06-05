
<?php/
session_start();
include("genav.php");
include("usernav.php");
include("adminnav.php");
function setnav ($privledge){
   
    include("navs.php");



   $adnav= adminnav($privledge);
    echo $adnav;

$usenav= usernav($privledge);
echo $usenav;

$gennav= gennav();
echo $gennav;


}


?>