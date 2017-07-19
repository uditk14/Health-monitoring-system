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
session_start();

$username=$_POST['username'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$contact=$_POST['nu'];
$email=$_POST['eaddress'];
$pass=$_POST['pass'];
$sex=$_POST['sex'];
$s="INSERT into clientdetails (C_NAME,C_USERNAME,C_DOB,C_ADDRESS,C_EMAIL,C_CONTACT,C_PASSWORD,C_GENDER,STATUS)values('".$name."','".$username."','".$dob."','".$address."','".$email."','".$contact."','".$pass."','".$sex."','N')";

$query=mysql_query($s);
if(!$query)
	echo"Failed".mysql_error();
else
{?><h1 text align = "center"><?php echo" Successful Registration";?></h1>
<?php
//echo"<br><a href='index.html'>loginpage</a>";
 }?>


<center><div class="loader"></div>
<p><strong>Note:</strong> Redricting you to login page...</p>
</center>

</body>
</html>
                                                                                           