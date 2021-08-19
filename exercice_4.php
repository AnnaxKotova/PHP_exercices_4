<?php
function greetings ($name, $firstname, $age)
{
    return "Bonjour, ".$name." ".$firstname.", tu as ".$age." ans.";
}

echo greetings ("Jean", "Dupont", 33);