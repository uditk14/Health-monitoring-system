
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to E- Health Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>p {font-size: 140%;}body{background-color: #f3f3f3;}footer {
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
      </ul>	
	
     </div>
  </div>
</nav>


<div class="container">
<div class="jumbotron">
<center><h1>Hi! What would you like to do?</h1></center>
<hr>
<div class="row">
<div class="col-xs-0 col-sm-0 col-md-4 col-ld-4">
</div><!--End of column-->
<div class="col-xs-12 col-sm-12 col-md-4 col-ld-4">
<!--<p> <a href="patient2a.php">sync with device  </p>
<p> <a href="patient2b.php">enter data manually  </p>
<p> <a href="patient2c.php">view history  </p>-->
<form action="patient2a.php"><p text align="center">
<button type="submit" class="btn btn-primary btn-block">Sync with device</button>
    <!--<input type="submit" value="Sync with device">-->
</form></p>
<form action="patient2b.php"><p text align="center">
<button type="submit" class="btn btn-primary btn-block">Enter Data Manually</button>
<!--    <input type="submit" value="Enter data manually">-->
</form>
</p><form action="patient2c.php"><p text align="center">
<button type="submit" class="btn btn-primary btn-block">View History</button>
    <!--<input type="submit" value="View history">-->
</form></p>
 
 <form action="logout.php"><p text align="center">
    <button type="submit" class="btn btn-danger btn-block">Logout</button>

	<!--<input type="submit" value="Logout">-->
</form></p>
</div><!--End of coloumn-->

<div class="col-xs-12 col-sm-12 col-md-12 col-ld-12">
<?php
include  'db.php';
session_start();

	
	$id=$_SESSION['clientid'];

$sql="SELECT DOCTORID,STATUS FROM assign WHERE CLIENT_ID='$id'";
$result=mysql_query($sql);
if(mysql_num_rows($result))
{ //echo "DOCTOR ASSIGNED :"."<br>";
	while($row=mysql_fetch_array($result))
	{
$doctorid=$row['DOCTORID'];
$status=$row['STATUS'];
if(($doctorid>0&&$status='y')||($doctorid>0&&$status='Y'))
{
	 
	$sql1="SELECT D_NAME FROM doctordetails WHERE DOCTORID='$doctorid'";
	$result1=mysql_query($sql1);
	while($row1=mysql_fetch_array($result1))
	{
		echo "<strong>STATUS :</strong> Doctor is assigned"."<br>";
		echo "<strong>DOCTOR NAME :</strong> ".$row1['D_NAME']."<br>";
		
		
	}
	
}	
else{echo"Status : No Doctor Assigned Yet ";}
}
	
}
else
{echo"Not Assigned Yet ";}


?>


</div><!--End of column-->
</div><!--End of Row-->
</div><!--End of jumbotron-->
</div><!--End of Container-->

</body>
</html>

