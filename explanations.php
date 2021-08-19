<?php
//difference entre echo et return

$numbera = 2;
$numberb = 3;


function ad($a, $b){
 echo ($a + $b);
} // affiche 5

ad($numbera, $numberb); //affiche 5

$numberc = (ad($numbera, $numberb)*20); //sans return fonction est juste une image, cela égale à 0  

echo $numberc;

echo "</br>";

//mais si on retourne la somme, la fonction obtiens une valeur

function ad_return($a, $b){
    echo ($a + $b);
    return ($a + $b); //retourne doit être toujours à la fin, car après elle se termine
   }
   
   ad_return($numbera, $numberb);
   
   $numberc = (ad_return($numbera, $numberb)*20); //sans return fonction est juste une image, cela égale à 0 
   
   echo $numberc; //affiche 100