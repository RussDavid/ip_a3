<!--14121056 Glucina, Christian
This file recives input from Search_View and asynchronously queries the server returning any results -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Model/ToolShedCSS.css">
</head>
<body>

<?php
require (dirname(__FILE__)."/../Model/config.php");

$q = $_REQUEST["q"];

$sql = "SELECT * FROM products WHERE Name LIKE '%$q%'";
$result = mysqli_query($db,$sql);

if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>Category</th>
    <th>Cost</th>
    <th>SKU</th>
    <th>Name</th>
    <th>Stock Quantitiy</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['Category'] . "</td>";
        echo "<td>" . '$' . $row['Cost'] . "</td>";
        echo "<td>" . $row['SKU'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['StockQuantity'] . "</td>";
        echo "</tr>";
    }
}else{
   echo "Search returned no results.";
}
?>