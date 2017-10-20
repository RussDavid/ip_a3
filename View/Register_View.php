<!--14121056 Glucina, Christian
//This file sets up the register page and uses AJAX to pass input to register_Model for asynchronous server querying.-->
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Model/ToolShedCSS.css">
<script>
function testUser(str) {
    if (str == "") {
        document.getElementById("txtUser").innerHTML = "";
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
                document.getElementById("txtUser").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","../Model/Register_Model.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<br><label id="Title">Welcome to Toolshed</label>
<br></br>
<br><label id="Welcome">Registration Form</label>
<br></br>
<form id="Register" action = "../Controller/Register_Controller.php" method = "post">
                <label>Name:</label><input type = "text" name = "name" class = "box"/><br/><br />
                <label>Username:</label><input type = "text" name = "username" class = "box" onkeyup="testUser(this.value)"/><br /><br />
                <p><span id="txtUser"></span></p>
                <label>Email:</label><input type = "text" name = "email" class = "box" /><br/><br />
                <label>Password:</label><input type = "password" name = "password" class = "box" /><br/><br />
                <label>Repeat:</label><input type = "password" name = "repeat" class = "box"/><br /><br />
                <input type = "submit" value = "Submit"/><br />
</form>
</body>
</html>