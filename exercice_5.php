<?php
function impairs(){
    for ($i = 300; $i > 0; $i--){
        if (($i % 2) == 1){
            echo $i."</br>"; //si on utilise "return" ici, seulement le première valeur s'affichera
        }
    }
}

impairs();
