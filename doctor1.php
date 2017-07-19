<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="8; URL=index.html">
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>

<body>
<?php
include 'db.php';
$username=$_POST['username'];
$name=$_POST['name'];
$specialization=$_POST['specialization'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$s="INSERT into doctordetails (D_NAME,D_USERNAME,D_ADDRESS,D_CONTACTNO,D_SPECIALIZATION,D_EMAIL,D_PASSWORD)values('".$name."','".$username."','".$address."','".$contact."','".$specialization."','".$email."','".$pass."')";
$query=mysql_query($s);
if(!$query)
	echo"Failed".mysql_error();
else
{?><h1 text align="center">
<?php
echo"Successful Registration";?></h1>
<?php
//echo"<br><a href='index.html'>loginpage</a>";
}
?>

<center><div class="loader"></div>
<p><strong>Note:</strong> Redricting you to login page...</p>
</center>
</body>
</html>




