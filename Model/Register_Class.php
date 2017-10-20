<?php

//14121056 Glucina, Christian
//This file Checks if username is unique and enters users into the database
require_once (dirname(__FILE__)."/../Controller/DBControl.php");
require_once 'SanitizeString.php';
class Register_Model
{
    private $db;
    private $name;
    private $email;
    private $username;
    private $password;
    private $dbcont;
    public function Register_Model($db, $name, $username, $email, $password)
    {
        $email = sanitizeString($email);
        $name = sanitizeString($name);
        $username = sanitizeString($username);
        $password = sanitizeString($password);
        $this->name=$name;
        $this->email=$email;
        $this->db=$db;
        $this->username=$username;
        $this->password=$password;
        $this->dbcont=new DBControl();
    }
    public function checkUserName()
    {
        $sql="SELECT * FROM `user` WHERE username = '$this->username'";
        $result=$this->db->query($sql);
        if ($result)
        {
            if ($row_cnt = $result->num_rows == 0) {
                return true;
            } else {
                return false;
            }
        } elseif (!$result) {
            return false;
        }
    }
    public function register()
    {
        $sql="INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`) VALUES (NULL, '$this->name', '$this->username', '$this->email', '$this->password')";
        $results=$this->dbcont->Query($this->db, $sql);
        if ($results) {
            return true;
        } elseif (!$results) {
            return false;
        }
    }
}