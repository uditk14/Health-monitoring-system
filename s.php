<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to E- Health Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<style>p {font-size: 140%;}body{background-color: #f3f3f3;}footer {
      background-color:#1a1a1a;
      color: white;
      padding: 10px;
    }
	body{background-image:url("bg1.jpg");}
</style>
</head>

<body>
<center>
<br><br><br><br><br><br>
<h1 style="font-size:350%; color:#fff;">
<?php
include 'db.php';
foreach($_POST as $key=>$value)
{
  //echo $key.$value;
  $query="INSERT INTO `assign` (`CLIENT_ID`, `DOCTORID`, `STATUS`) VALUES ('".$key."', '".$value."','Y') ";
$sql=mysql_query($query);}
if(!$sql)
{echo"Failed".mysql_error();}
else
{echo"Successful";
}
?>
</h1>
<button class="btn btn-danger btn-lg" "type="submit" onclick="window.location='admin.php'">Back</button></cemter>
</body>
</html>