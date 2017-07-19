<html>
<body>
<?php
session_start();

$e=$_SESSION['USERNAME'];
//error_reporting(E_ERROR);
//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
//session_destroy();
//session_unset();

if(($e))
{echo"successfully logged out";?>
<form action="index.html">
    <input type="submit" value="Login Page">
</form>
<?php
session_destroy();
header("location:index.html");}
else
echo"error occured";
?>
</body>
</html>