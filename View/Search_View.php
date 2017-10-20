<!--14121056 Glucina, Christian
 This file uses AJAX to send user input data to the Search_Controller and sets up HTML for the search functionality-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Model/ToolShedCSS.css">
    <script>
        function showProducts(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","/Controller/Search_Controller.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>
</head>
<h1>

<ul class="topMenu" id="myTopMenu">
    <li><a class="active" href="Welcome_View.php"><img src="../images/toolLogo.jpg" alt="toolLogo" width="150" height="100"></a></li>
    <li><a href="Search_View.php">Search</a></li>
    <li><a href="Logout_View.php">Logout</a></li>
</ul>
</h1>

<body>
<form class="searchBox" id="mySearchBox">
    <label>Search For a Product:</label><input type = "text" name = "product" class = "box" onkeyup="showProducts(this.value)"/><br /><br />
</form>
<br>
<div id="txtHint"><b>Product info will be listed here.</b></div>

</body>

</html>