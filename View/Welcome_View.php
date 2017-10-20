<!--14121056 Christian Glucina
This file shows the welcome page-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Model/ToolShedCSS.css">
</head>

<h1>
    <ul class="topMenu" id="myTopMenu">
        <li><a class="active" href="Welcome_View.php"><img src="../images/toolLogo.jpg" alt="toolLogo" width="150" height="100"></a></li>
        <li><a href="Search_View.php">Search</a></li>
        <li><a href="Logout_View.php">Logout</a></li>
    </ul>
</h1>
<body>
<label id="Welcome"> Welcome

<?php
require_once (dirname(__FILE__)."/../Model/session.php");;
echo $login_user;
?>
</label>
<br><label id="instructions">
    Use the toolbar above to navigate the website.
</label></br>

</body>

</html>

