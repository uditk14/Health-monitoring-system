<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to E- Health Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>p {font-size: 140%;}body{background-image: url("bg3.jpg");}footer {
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
<h2>You are requested to follow this diet chart</h2>
<hr>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-ld-12">
<?php
session_start();
//$value=null;
if((isset($_SESSION['result']))&&(!empty($_SESSION['result'])))
{$value= $_SESSION['result'];}
//echo $value;
$norm="Your Heart Rate is Normal!";
$high="Your Heart rate is high right now !";
$low="Your heart rate is low right now!";
$toolow="Your heart rate is too low , seek a doctor !";
$toohigh="Your heart rate is too high , seek a doctor!";
$invalid="Invalid Heart Rate";
if($value==$invalid)
{
echo"Error ";
}


else if($value==$low || $value==$toolow)
{
	
	echo "1)Green vegetables such as celery and radishes are suggested for those suffering from bradycardia.."."<br>";
	echo "2)In the morning eat oats along with brown bread minimizes the risk of bradycardia."."<br>";
	//echo "3)Limit your carbohydrate rich food such as potatoes,rice,pasta or even bread."."<br>";
}
else if($value=$high ||$value==$toohigh)
{
	
	echo "1) Omega 3 fatty acids are a must such as walnuts, flaxseed,vegetable oils, fish such as tuna, mackerel or trout."."<br>";
	echo "2) Whole grain items such as brown bread or whole wheat bread."."<br>";
	echo "3) Food that contains protein such as beans, broccoli and baked beans."."<br>";
	echo "4) It is mandatory to consume salt less than 2300mg per day."."<br>";
	
	
}
else if($value==$norm)
{
	echo"Continue with your regular diet  ";
}
?>
<form action="patient2.php"><p text align="center">
    <button type="submit" class="btn btn-danger btn-md">Back</button>
</form></p>
</div>
</div>
</div>
</div>
</body>
</html>
 


 






