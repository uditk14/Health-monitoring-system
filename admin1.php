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
<h2>Client Details</h2>
<hr>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-ld-12">

<?php
include 'db.php';
$sql= "SELECT * FROM clientdetails";
$result = mysql_query($sql);

while($row = mysql_fetch_assoc($result)){
    //iterate over all the fields
    foreach($row as $key => $val){
        //generate output
        echo $key . ":   " . $val."   " ;
    echo "<br>";}echo "<BR />";
	echo "--------------------------------------------------------------------------------------------";
	echo "<BR />";
}
	/*while($row=mysql_fetch_array($query))
	{
		echo $row['COUNT(*)'];
		
	}*/

	

//echo"<br><a href='admin.php'>back</a>"

?><form action="admin.php"><p text align="center">
    <button type="submit" class="btn btn-lg btn-primary">Back</button>
</form></p>
</div></div></div></div>
</body>
</html>