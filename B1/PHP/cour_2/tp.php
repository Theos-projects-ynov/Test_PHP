<?php

function gestionERREUR()
{
    $fo = fopen("Log.txt","x");
    fwrite($fo, "TEST");
}

set_error_handler("gestionERREUR");

?>