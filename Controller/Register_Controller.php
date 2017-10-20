<?php

//14121056 Glucina, Christian
//This File Validates the users chosen password and then creates a instance of the Register_Model class to
require_once (dirname(__FILE__)."/../Model/config.php");
require_once (dirname(__FILE__)."/../Model/Register_Class.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myName = $_POST['name'];
    $myUsername = $_POST['username'];
    $myEmail = $_POST['email'];
    $myPassword = $_POST['password'];
    $passwordRepeat = $_POST['repeat'];


    $isPasswordValid = false;
    $isUsernameValid = true;

    if (isset($myPassword) && isset($myUsername)) {
        if (strcmp($myPassword, $passwordRepeat) == 0) {
            $strlen = strlen($myPassword);
            if (($strlen >= 7) && ($strlen <= 15)) {
                if (!preg_match("#[0-9]+#", $myPassword)) {
                    echo "Password must include at least one number.";
                } else if (!preg_match("#[A-Z]+#", $myPassword)) {
                    echo "Password must include at least one CAPS.";
                } else if (!preg_match("#\\W+#", $myPassword)) {
                    echo "Password must include at least one symbol.";
                } else {
                    $isPasswordValid = true;
                }


            } else {
                echo "Password must be Between 7 and 15 characters";
            }
        } else {
            echo "Passwords were not the same.";
        }
    } elseif (!isset($mypassword) && !isset($myusername)) {
        echo "must enter in a username and a password";
    }

    if (($isPasswordValid) && ($isUsernameValid)) {
        $model = new Register_Model($db, $myName, $myUsername, $myEmail, $myPassword);
        if($model->checkUserName()) {
            $success = $model->register();
        }else{
            echo "Username was invalid.";
        }
        if ($success) {
            header("location:../View/Login_View.php");
        } else {
            echo "Could not create user.";
        }
    }
}