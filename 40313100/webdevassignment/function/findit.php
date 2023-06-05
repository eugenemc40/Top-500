<?php


function findit($finddata){
    include("function/processsearch.php");


$readartistname = findartistname ($finddata);

echo $readartistname;

$readnumber=findnumber($find);

echo $readnumber;


    $readalbumname = findalbumname ($find);

    echo $readalbumname;

    
       $readsubgenre = findsubgenre ($find);

        echo $readsubgenre;
   
       $readnumber = findnumber($find);

       echo $readnumber;

      

       $readyear = findyear ($find);

       echo $readyear;
}
