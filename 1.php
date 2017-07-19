<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to E- Health Care</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>p {font-size: 140%;}
footer {
      background-color:#1a1a1a;
      color: white;
      padding: 10px;
    }
body{background-image: url("bg.jpg");}
</style>

<script language=javascript>
function validate()
{
var myform=document.registrationform;
var letter=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,15}$/;
if(myform.username.value=="" ||myform.username.value.length>15 ||myform.username.value.length<5)
{
alert("Username cannot be blank/length should be between 5-15");
return false;}
if(myform.name.value=="" ||myform.name.value.length>20)
{
alert("name cannot be blank and should not exceeds the world limit of 20 words");
return false;}
if(myform.dob.value=="")
{
alert("Date of birth cannot be blank");
return false;}
if(myform.address.value=="" ||myform.address.value.length>200)
{
alert("Address cannot be blank and should not exceeds the world limit of 200 words");
return false;}
if(myform.nu.value=="" || (myform.nu.value.length!=10) || (isNaN(myform.nu.value)))
{
alert("enter valid contact number");
return false;}
if(myform.eaddress.value=="" || myform.eaddress.value.indexOf("@")==-1 )
{
alert("enter valid email id");
return false;}

if(myform.pass.value.match(letter))
{return true;}
else
{
alert ("enter valid password/password length(8-15)words/ should contain atleast one special character and digit");
return false;}

return true;}
</script>
</head>

<body>


<div class="container"style="width:60%;opacity: 0.92;filter: alpha(opacity=92);background-color:#000;">
<h1 text align = "center"style="color:#fff;">CLIENT'S DETAILS </h1>

   <form class="form-horizontal" action="pateint1.php" name="registrationform" onsubmit="return validate()"  method="POST">
    <div class="form-group"><br>
      <label class="control-label col-sm-2" style="color:#fff;">Username </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="username" placeholder="Enter username"><br>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">Name </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="name" placeholder="Enter name"><br>
      </div>
    </div>
	
     <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">Date of Birth </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="dob" placeholder="Enter Date of Birth (yyyy-mm-dd)"><br>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">Address </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="address" placeholder="Enter Address"><br>
      </div>
    </div>


     <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">Contact </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="nu" placeholder="Enter Contact Number"><br>
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" style="color:#fff;">Email </label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name="eaddress" placeholder="Enter Email Address"><br>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd" style="color:#fff;">Password </label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id ="pwd" name="pass" placeholder="Enter Password"><br>
      </div>
    </div>

     <div class="form-group">
	<label class="control-label col-sm-2" for="pwd" style="color:#fff;">Gender </label>
	<div class=" col-sm-1">	     	
		<div class="radio">
     			<label style="color:#fff;"><input type="radio" name="sex" value="male">Male</label>
     		</div>
	</div>
	<div class=" col-sm-1">	     	
		<div class="radio">
     			<label style="color:#fff;"><input type="radio" name="sex" value="female">Female</label>
     		</div>
	</div>
     </div>	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label style="color:#fff;"><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
 
   <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
	<button type="submit" class="btn btn-info btn-danger">Submit</button>
     </div>
    </div>
  </form>
</div>



</body>
</html>











