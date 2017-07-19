<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to E- Health Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>p {font-size: 140%;}body{background-image: url("bg1.jpg");}footer {
      
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
<h2>Hey Patient! We would need your heart rate.</h2>
<hr>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<form role="form" action="patient2b1.php" method="POST">
	<div class="form-group">
	<label for="heartbeat">HeartBeat : </label>
	</div>
	<div class="form-group">
	<input type ="text" class="form-control" name="p1" placeholder="Enter Heartbeat"><br>
	</div>


<!--Systolic bp:<input type ="text" name="p2"><br>
Diastolic bp:<input type ="text" name="p3"><br>-->

<button type="submit" class="btn btn-md btn-success">Submit</button>

</form></p>
</div>
</div>
</div>
</div>

</body>


</html>