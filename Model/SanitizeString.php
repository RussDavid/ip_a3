<?php
//14121056 Glucina, Christian
//This Function strips characters and tags from a string, in order to prevent SQL injection
function sanitizeString($var){
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return $var;
}

