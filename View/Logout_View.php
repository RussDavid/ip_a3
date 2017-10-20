<?php
//14121056 Glucina, Christian
//Destroys the session and logs out the current user
session_start();

if(session_destroy()) {
    header("Location: /View/login_View.php");
}
?>