<?php
//14121056 Glucina, Christian
/*
 login_Model has one function Login witch takes in the
link to the database, the username and password and returns
true if the username and password match.
 */
require (dirname(__FILE__)."/../Model/config.php");

class Login_Model
{

    public function login($db, $myusername, $mypassword)
    {
        $query = "SELECT * FROM user WHERE username = '$myusername' and password = '$mypassword'";
        $result = $db->query($query);
        if ($result) {
            /* checks if the username and password match
            */
            if ($row_cnt = $result->num_rows == 1) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['login_ID'] = $row['id'];
                $_SESSION['login_user'] = $myusername;
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

}