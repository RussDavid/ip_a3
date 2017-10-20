<?php
//14121056 Glucina, Christian
//This file stores session data and ensures a session has been created
require 'config.php';
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($db,"select username from user where username = '$user_check' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_user = $row['username'];
$isUserLoggedin = true;

if(!isset($_SESSION['login_user'])){
    $isUserLoggedin = false;
    header("Login_View.php");
}
