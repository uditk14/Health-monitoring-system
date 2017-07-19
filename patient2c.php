<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to E- Health Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>p {font-size: 140%;}body{background-image: url("bg3.jpg");background-repeat:repeat-y;}footer {
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
<div class="container">
<div class="jumbotron">
<h2>History!!!</h2>
<hr>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-ld-12">

<?php
include 'db.php';
session_start();
$m=$_SESSION['clientid'];

$s= "SELECT PARAMETER1,TIME,RESULT1
          FROM cpara 
		  WHERE CLIENT_ID='$m'" ;
$f=mysql_query($s);


if($f === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}

echo " Heart Rate |    "."              date & time "."     |  RESULTS <br>";
echo "<hr>";
while($row = mysql_fetch_array($f))
{
    echo "<br> Heart rate = ".$row['PARAMETER1']."  & Data Locked At ---> ".$row['TIME']." | Results : ".$row['RESULT1']."" ;
	echo "<br><hr>";
}
?>
<!--echo"<br><a href='patient2.php'>back</a>";-->
<form action="patient2.php"><p text align="center">
    <button type="submit" class="btn btn-md btn-danger">Back</button>
</form></p>

</div>
</div>
</div>
</div>
</body>
</html>