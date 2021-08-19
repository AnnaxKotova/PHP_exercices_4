<?php


function ma_fonction ($parameter) //fonction dépendant d'un parameter
{
    return "Hello, "."$parameter";
}

echo ma_fonction("world"); //parameter égale chaine de caractères défini