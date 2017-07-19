
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to E- Health Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>p {font-size: 140%;}body{background-image: url("bg2.jpg");}footer {
      background-color:#1a1a1a;
      color: white;
      padding: 10px;
    }
</style>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">E - Health Care</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>	
     
      </div>
  </div>
</nav>
<div class="container"style="width:60%;opacity: 0.83;filter: alpha(opacity=83);border:none;">

<?php
session_start();
$p12 = null;
/*echo $_SESSION['id'];
echo $_SESSION['dob'];
echo $_SESSION['age'];
echo $_SESSION['gender'];
*/include 'db.php';
if(isset($_POST['p1']) &&(!empty($_POST['p1'])))
{ 
$p12=$_POST['p1'];}
//$p2=$_POST['p2'];
//$p3=$_POST['p3'];
include'process.php';
//include 'process1.php';
//$s="INSERT INTO cpara (CLIENT_ID,PARAMETER1,PARAMETER2,PARAMETER3,TIME,RESULT1,RESULT2,RESULT3)VALUES('".$_SESSION['id']."','".$p1."','".$p2."','".$p3."',NOW(),'".$result."','".$result1."','".$result2."')";
$s="INSERT INTO cpara (CLIENT_ID,PARAMETER1,TIME,RESULT1)VALUES('".$_SESSION['clientid']."','".$p12."',NOW(),'".$result."')";

$query=mysql_query($s);
if(!$query)
	echo"Failed".mysql_error();
else
{//echo"Successful";
//echo"<br><a href='patient2.php'>back</a>";
}?>
<form action="recom.php"><p text align="center">
    <button type="submit" class="btn btn-success btn-lg">Recommendation</button>
</form></p>
<form action="patient2.php"><p text align="center">
    <button type=submit" class="btn btn-danger btn-lg">Back</button>
	<!--<input type="submit" value="Back">-->
</form></p>
</div>
</body>
</html>