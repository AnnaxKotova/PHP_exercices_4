<?php

function comparaison ($a, $b)
{
    if ($a > $b){
        return "Le premier nombre est plus grand"."</br>";

    }
    elseif ($a < $b){
        return "Le premier nombre est plus petit"."</br>";
    }
    else {
        return "Les deux nombres sont identiques"."</br>";
    }
}

echo comparaison (390, 39); //a > b
echo comparaison (39, 390); // a < b 
echo comparaison (390, 390); // a = b

//toutes les fonctions doivent être soit en haut soit en bas