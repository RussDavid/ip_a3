<?php
//14121056 Glucina, Christian
# starts a session and displays the login page
# Username and password is sent to the controller with post
session_start();
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../Model/ToolShedCSS.css">
</head>

<body>
<br><label id="Title">Welcome to Toolshed</label></br>
<br></br>

<div id="Login">
            <form action = "../Controller/Login_Controler.php" method = "post">
                <label>Username  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                <input type = "submit" value = " Login "/><br />
            </form>
            <form action = "../View/Register_View.php">
                <label>Don't have an account?  </label><input type = "submit" value = "Register"/><br />
            </form>
</div>

</body>
</html>