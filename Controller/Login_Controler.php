<?php

//14121056 Glucina, Christian
# receives username and password from login_View
#and creates a new instance of the Login_Model class and calls the login function
require_once (dirname(__FILE__)."/../View/Login_View.php");
require_once (dirname(__FILE__)."/../Model/Login_Model.php");
// username and password sent from form
if($_SERVER["REQUEST_METHOD"] == "POST") {


    $myusername =$_POST['username'];
    $mypassword = $_POST['password'];

    $login_model=new Login_Model();
    if(isset($mypassword)&&isset($mypassword)) {
        $logedin = $login_model->login($db, $myusername, $mypassword);


        if ($logedin) {
            echo " logedin";
           header("location:../View/Welcome_View.php");
        } elseif (!$logedin) {
            echo "Incorrect password.";
        }
    }
}

