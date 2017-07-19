
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to E- Health Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>p {font-size: 140%;}body{background-color: #f3f3f3;}footer {
      background-color:#1a1a1a;
      color: white;
      padding: 10px;
    }
	body{background-image:url("2.jpg");}
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
	<ul class="nav navbar-nav navbar-right">
	<li style="line-height: 320%;padding-left:15px;"><font color="white" size="4"><?php $user=$_POST['uname'];$_SESSION['USERNAME']=$user;echo "Welcome". " " .$_SESSION['USERNAME'];?></font></li>
	</ul>
     </div>
  </div>
</nav>


<?php
include 'db.php';
session_start();
$user=$_POST['uname'];
$pass=$_POST['up'];

 //$flag=0;
 //$GLOBALS['flag'];
//include 'admin.php';
$sql="SELECT count(*) FROM doctordetails WHERE(D_USERNAME='".$user."' and D_PASSWORD='".$pass."')";
$sql1="SELECT count(*) FROM doctordetails WHERE(D_EMAIL='".$user."' and D_PASSWORD='".$pass."')";
$sql2="SELECT count(*) FROM clientdetails WHERE(C_USERNAME='".$user."' and C_PASSWORD='".$pass."')";
$sql3="SELECT count(*) FROM clientdetails WHERE(C_EMAIL='".$user."' and C_PASSWORD='".$pass."')";
$sql4="SELECT count(*) FROM admin WHERE(A_USERNAME='".$user."' and PASSWORD='".$pass."')";
$sql5="SELECT count(*) FROM admin WHERE(A_EMAIL='".$user."' and PASSWORD='".$pass."')";


$query=mysql_query($sql);
$query1=mysql_query($sql1);
$query2=mysql_query($sql2);
$query3=mysql_query($sql3);
$query4=mysql_query($sql4);
$query5=mysql_query($sql5);

$result=mysql_fetch_array($query);
$result1=mysql_fetch_array($query1);
$result2=mysql_fetch_array($query2);
$result3=mysql_fetch_array($query3);
$result4=mysql_fetch_array($query4);
$result5=mysql_fetch_array($query5);
	
 if($result[0]>0)
{
	//echo"Successful Login"; ?>
	<!--<form action="index.html">
    <input type="submit" value="Login Page">
</form>-->

	<?php 
	//echo"<br><a href='index.html'>loginpage</a>";
	
	$_SESSION['USERNAME']=$user;
	//echo "welcome"." ".$_SESSION['USERNAME'];
	
	$a1="SELECT DOCTORID FROM doctordetails WHERE D_USERNAME='$user'";
	$rr=mysql_query($a1);
	while($row=mysql_fetch_array($rr))
	{
		$dv=$row['DOCTORID'];
		
	}
	$_SESSION['doctorid']=$dv;
		
	//echo"<br><a href='logout.php'>logout</a>";?>
<div class="container">
<div class="jumbotron">
<h1>Welcome Doctor</h1>
<hr>
<div class="col-xs-12 col-sm-12 col-md-12 col-ld-12">
<?php
include 'assign1.php';
?>
</div>

<form action="logout.php">
    <button type="submit" class="btn btn-lg btn-danger">Log Out</button>
</form>	

</div><!--End of jumbotron-->
</div><!--End of container-->

<!-- hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh-->	
<?php
}

else if($result1[0]>0)
{
	echo"Successful Login";
	//echo"<br><a href='login.php'>loginpage</a>";?>
	<!--<form action="index.html">
    <input type="submit" value="Login Page">
</form>-->
	<?php
	$_SESSION['USERNAME']=$user;
	echo "welcome". " " .$_SESSION['USERNAME'];
	
	$a1="SELECT DOCTORID FROM doctordetails WHERE D_USERNAME='$user'";
	$rr=mysql_query($a1);
	while($row=mysql_fetch_array($rr))
	{
		$dv=$row['DOCTORID'];
		
	}
	$_SESSION['doctorid']=$dv;
include 'assign1.php';
	
	//echo"<br><a href='logout.php'>logout</a>"; ?>
	<form action="logout.php">
    <input type="submit" value="Logout">
</form>

<?php 
}

else if($result2[0]>0)
{
	//echo"Successful Login";
	//echo"<br><a href='login.php'>loginpage</a>";
	//echo"<br><a href='patient2.php'>Continue</a>";?>
	<!--<form action="index.html">
    <input type="submit" value="Login Page">
</form>-->
	
	
	
	<?php 
	$_SESSION['USERNAME']=$user;
	$a1="SELECT CLIENT_ID FROM clientdetails WHERE C_USERNAME='$user'";
	$rr=mysql_query($a1);
	while($row=mysql_fetch_array($rr))
	{
		$dv=$row['CLIENT_ID'];
		
	}
	$_SESSION['clientid']=$dv;
	
	 
	$a2="SELECT C_DOB,C_GENDER FROM clientdetails WHERE CLIENT_ID='$dv'";
	$rr2=mysql_query($a2);
	while($row=mysql_fetch_array($rr2))
	{
		$dv1=$row['C_DOB'];
		$dv1a=$row['C_GENDER'];
	}$_SESSION['gender']=$dv1a;
	$_SESSION['dob']=$dv1;
	$a3 = "SELECT timestampdiff(year,C_DOB,CURRENT_DATE()) FROM clientdetails WHERE CLIENT_ID=$dv";
	$rr2=mysql_query($a3);
	while($row=mysql_fetch_array($rr2))
	{
		$dv2=$row['timestampdiff(year,C_DOB,CURRENT_DATE())'];
		
	}
	
	$_SESSION['age']=$dv2;
		


	//echo"<br><a href='logout.php'>logout</a>";?>

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
//include  'db.php';
//session_start();

	
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

<?php
}

else if($result3[0]>0)
{
	echo "Successful Login";
	//echo"<br><a href='login.php'>loginpage</a>";
	//echo"<br><a href='patient2.php'>Continue</a>";?>
	<!--<form action="index.html">
    <input type="submit" value="Login Page">
</form>-->
<form action="patient2.php">
    <input type="submit" value="Continue">
</form>
	
	<?php
	$_SESSION['USERNAME']=$user;
	$a1="SELECT CLIENT_ID FROM clientdetails WHERE C_USERNAME='$user'";
	$rr=mysql_query($a1);
	while($row=mysql_fetch_array($rr))
	{
		$dv=$row['CLIENT_ID'];
		
	}echo $dv;
	$_SESSION['clientid']=$dv;
	echo "Welcome"." ".$_SESSION['USERNAME'];
	//echo"<br><a href='logout.php'>logout</a>";
//$flag++;?>
<form action="logout.php">
    <input type="submit" value="Logout">
</form>

<?php
}
else if($result4[0]>0)
{?>
<div class="container">
	
		<div class="col-xs-12 col-sm-12 col-md-12 col-ld-12"><CENTER>
	<h1 style="font-size:350%"><font color="white"><?php echo "<strong>Successful Login</strong>"; ?></font></h1>
	
	<!--<form action="index.html">
    <input type="submit" value="Login Page">
</form>-->
<form action="admin.php">
    <button type="submit" class="btn btn-md btn-success">Continue</button><br><br>
</form>

	<form action="logout.php">
    <button type="submit" class="btn btn-md btn-danger">Logout</button><br><br>
</form></CENTER>
</div><!--end of coloumn-->
	
</div><!--Enf of container-->	
	<?php
	}

else if($result5[0]>0)
{
	echo"Successful Login";
	//echo"<br><a href='login.php'>loginpage</a>";
	//echo"<br><a href='admin.php'>Continue</a>";?>
	<!--<form action="index.html">
    <input type="submit" value="Login Page">
</form>-->
<form action="admin.php">
    <input type="submit" value="Continue">
</form>
	<?php
	$_SESSION['USERNAME']=$user;
	echo "Welcome"." ".$_SESSION['USERNAME'];
	//echo"<br><a href='logout.php'>logout</a>";?>
	<form action="logout.php">
    <input type="submit" value="Logout">
</form>
	
	<?php
	}

else {
	echo"login failed";?>
	<form action="index.html">
    <input type="submit" value="Login Page">
</form>
<?php
}
?>
</body>
</html>

