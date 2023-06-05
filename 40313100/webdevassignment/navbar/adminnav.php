<?php
function adminnav($privledge){
session_start();
include("navs.php");



if($_SESSION["user_id"]||$privledge=="1"){
    $genadmin= adminnav();
    echo $genadmin;}
}
    ?>