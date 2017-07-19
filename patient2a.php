<?php
include 'db.php';
session_start();
$e="SELECT result1 FROM result ORDER BY id DESC LIMIT 1;";
	
	$rr=mysql_query($e);
	while($row=mysql_fetch_array($rr))
	{
		$dv=$row['result1'];
		
	}	
	
echo $dv;
$_SESSION['parameter']=$dv;
include 'process.php';

//include 'recom.php';
?>
<html>
<body>
<form action="recom.php"><p text align="center">
    <input type="submit" value="Recommendation">
</form></p>
</body>
<html>