<html>
<body>
<?php
session_start();
include 'db.php';
$x=null;
$m=null;
include 'process.php';
if(isset($_SESSION['clientid'])&& (!empty($_SESSION['clientid'])))
{

$m=$_SESSION['clientid'];}
if(isset($_REQUEST['a'])&& (!empty($_REQUEST['a'])))
{
$x=$_REQUEST['a'];}
//$xy="INSERT INTO cpara(PULSE) VALUES('".$x."')";
$xy="INSERT INTO cpara (CLIENT_ID,PARAMETER1,TIME,RESULT1)VALUES('".$m."','".$x."',NOW(),'".$result."')";
$query=mysql_query($xy);
echo $query;


$query=mysql_query($xy);
if(!$query)
	echo"Failed".mysql_error();
else
{
echo"Successful";

//echo"<br><a href='patient2.php'>back</a>";
}?>

<form action="patient2.php">
    <input type="submit" value="Back">
</form>
</body>
</html>