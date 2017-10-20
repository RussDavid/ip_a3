<?php
//14121056 Glucina, Christian
//This file sets up my Database, create tables if they do not already exist and populates the products table
require_once (dirname(__FILE__)."/../Controller/DBControl.php");
require (dirname(__FILE__)."/../Model/config.php");
$dbcon=new DBControl();
$table = "user";

$doesUserTableExist = $dbcon->checkTable($db, $table);

if($doesUserTableExist){

}else {
    $sql = "CREATE TABLE `user` ( `id` INT AUTO_INCREMENT ,`name` VARCHAR(100) NOT NULL , `username` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL,PRIMARY KEY(id) )";
    $createTable = $dbcon->Query($db,$sql);
    if($createTable = true){
        $doesUserTableExist = true;
    }else{
        die("Could not create the Users table.");
    }
}
$table = "products";

$doesProductsTableExist = $dbcon->checkTable($db, $table); 
if($doesProductsTableExist){

}else {
    $sql = "CREATE TABLE `products`(`Category` VARCHAR(100) NOT NULL , `Cost` FLOAT(2) NOT NULL , `SKU` VARCHAR (10) NOT NULL , `Name` VARCHAR(100) NOT NULL , `StockQuantity` INT(20) NOT NULL, PRIMARY KEY(Name) )";
    $createTable = $dbcon->Query($db,$sql);
    if($createTable = true){
        $doesProductsTableExist = true;
    }else{
        die("Could not create the Products table.");
    }
}

// These SQL queries populate the products table with products.
$sql = "INSERT INTO products (`Category`, `Cost`, `SKU`, `Name`, `StockQuantity`) VALUES ('Hammer', '23.99', 'TRHDH-01', 'Toolman Red Heavy Duty Hammer', '10')";
$result = $db->query($sql);
$sql = "INSERT INTO products (`Category`, `Cost`, `SKU`, `Name`, `StockQuantity`) VALUES ('Hammer', '13.56', 'JAPH-00', 'Jackbox All Purpose Hammer', '59')";
$result = $db->query($sql);
$sql = "INSERT INTO products (`Category`, `Cost`, `SKU`, `Name`, `StockQuantity`) VALUES ('Saw', '29.99', 'TTSG-02', 'Toolman Timber Saw Grey', '23')";
$result = $db->query($sql);
$sql = "INSERT INTO products (`Category`, `Cost`, `SKU`, `Name`, `StockQuantity`) VALUES ('Saw', '59.86', 'GLXS-00', 'Grey Larsson Xtreme Saw', '2')";
$result = $db->query($sql);
$sql = "INSERT INTO products (`Category`, `Cost`, `SKU`, `Name`, `StockQuantity`) VALUES ('Spirit Level', '20.00', 'TLTMSL-00', 'Tru-Level Three Meter Spirit Level', '45')";
$result = $db->query($sql);
$sql = "INSERT INTO products (`Category`, `Cost`, `SKU`, `Name`, `StockQuantity`) VALUES ('Spirit Level', '8.26', 'JSSL-02', 'Jackbox Scaffolders Spirit Level', '102')";
$result = $db->query($sql);
$sql = "INSERT INTO products (`Category`, `Cost`, `SKU`, `Name`, `StockQuantity`) VALUES ('Axe', '59.99', 'TGPHA-03', 'Toolman General Purpose Hand Axe', '34')";
$result = $db->query($sql);
$sql = "INSERT INTO products (`Category`, `Cost`, `SKU`, `Name`, `StockQuantity`) VALUES ('Axe', '99.99', 'GLXTA-01', 'Grey Larsson Xtreme Tactical Axe', '3')";
$result = $db->query($sql);


if(($doesUserTableExist == true) && ($doesProductsTableExist == true)){
    header("location:../View/Login_View.php");
}
