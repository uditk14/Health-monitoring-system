<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to E- Health Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>p {font-size: 140%;}body{background-repeat:repeat-y;}footer {
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
<h2>Welcome Admin</h2>
<hr>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-ld-12">
<?php

include 'db.php';

//echo"<br><a href='admin1.php'>total number of clients</a>";?>
<form action="admin1.php">
<p font size = "4">
    <button type="submit" class="btn btn-lg btn-primary">Total Number of Clients</button>
<?php
$sql="SELECT COUNT(*) FROM clientdetails";
$query=mysql_query($sql);

	while($row=mysql_fetch_array($query))
	{
		$dv=$row['COUNT(*)'];
		
	}

	echo " : ".$dv."<br>"."<br>";
	//echo"<br><a href='admin2.php'>total number of doctors</a>";?>
</font>
</p>
</form>

	<form action="admin2.php">
	<p font size = "4">
	<button type="submit" class="btn btn-lg btn-primary">Total Number of Doctors</button>
<?php
$sql1="SELECT COUNT(*) FROM doctordetails";
$query1=mysql_query($sql1);

	while($row1=mysql_fetch_array($query1))
	{
		$dv1=$row1['COUNT(*)'];
		
	}

	echo " : ".$dv1."<BR>"."<br>";
	//echo"<br><a href='admin3.php'>ASSIGN</a>";
?>

	</form>
	<form action="admin3.php">
    <button type="submit" class="btn btn-lg btn-danger">Assign</button>
</font>
</p>
</form>
</div>
</div>
</div>
</div>
	</body>
	</html>