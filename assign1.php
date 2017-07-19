<html>
<body>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<div class="col-md-12 col-ld-12" style="padding-left:35%;">
<?php
include  'db.php';
//session_start();
$id=$_SESSION['doctorid'];
$sql="SELECT CLIENT_ID,STATUS FROM assign WHERE DOCTORID='$id'";
$result=mysql_query($sql);
if(mysql_num_rows($result))
{ echo "<br>"."<h3><u>CLIENTS ASSIGNED</u></h3>"."<br>";
	while($row=mysql_fetch_array($result))
	{
$clientid=$row['CLIENT_ID'];
$status=$row['STATUS'];
if(($clientid>0&&$status='y')||($clientid>0&&$status='Y'))
{
	 
	$sql1="SELECT C_NAME,C_ADDRESS,C_GENDER,C_CONTACT FROM clientdetails WHERE CLIENT_ID='$clientid'";
	$result1=mysql_query($sql1);
	while($row1=mysql_fetch_array($result1))
	{
		echo "<strong>CLIENT NAME :</strong> ".$row1['C_NAME']."<br>";
		echo "<strong>CLIENT GENDER :</strong> ".$row1['C_GENDER']."<br>";
		echo "<strong>CLIENT CONTACT :</strong> ".$row1['C_CONTACT']."<br>";
		echo "<strong>CLIENT ADDRESS :</strong> ".$row1['C_ADDRESS']."<br>"."<br>";
	}
	
}	
else{echo"No Doctor Assigned Yet ";}
}
	
}
else
{echo"Not Assigned Yet ";}
?>
</div>
</body>
</html>

