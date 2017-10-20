<html>
<head>
<?php
//14121056 Glucina, Christian
//This file asynchronously checks if the username input is unique

require(dirname(__FILE__) . "/../Model/config.php");
$isUsernameValid = false;

$q = $_REQUEST["q"];
if (ctype_alnum($q))
{
    $sql="SELECT * FROM `user` WHERE username = '$q'";
    $result=$db->query($sql);
    if ($result)
    {
        if ($row_cnt = $result->num_rows == 0) {
            $inuse = true;
        } else {
            $inuse = false;
        }
    } elseif (!$result) {
        $inuse = false;
    }

    if ($inuse)
    {
        echo "Username is available.";
        $isUsernameValid = true;

    }else{
        echo "Username is already in use.";
        $isUsernameValid = false;
    }
}else{
    echo "Username can only contain alphanumeric characters.";
    $isUsernameValid = false;
}


?>
</head>
</html>
