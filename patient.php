<html>
<head><script language=javascript>
function validate()
{
var myform=document.registrationform;
var letter=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,15}$/;
if(myform.username.value=="" ||myform.username.value.length>10 ||myform.username.value.length<5)
{
alert("Username cannot be blank/length should be between 5-10");
return false;}
if(myform.name.value=="" ||myform.name.value.length>20)
{
alert("name cannot be blank and should not exceeds the world limit of 20 words");
return false;}
if(myform.address.value=="" ||myform.address.value.length>50)
{
alert("Address cannot be blank and should not exceeds the world limit of 50 words");
return false;}
if(myform.nu.value=="" || (myform.nu.value.length!=10) || (isNaN(myform.nu.value)))
{
alert("enter valid contact number");
return false;}
if(myform.eaddress.value=="" || myform.eaddress.value.indexOf("@")==-1 )
{
alert("enter valid email id");
return false;}
if(myform.sex.value==""  )
{
alert("select your gender"):
return false;}
if(myform.pass.value.match(letter))
{return true;}
else
{
alert ("r valid password/password length(8-15)words/ should contain atleast one special character and digit");
return false;}


return true;}
</script></head>
<body>
<form action="pateint1.php" name="registrationform" onsubmit="return validate()" method="POST">
<h1>CLIENT'S DETAILS </h1>
Username:<input type="text" name="username"><br>
Name:<input type="text" name="name"><br>
DOB(yyyy-mm-dd):<input type="text" name="dob"><br>
Address:<input type="text" name="address"><br>
Contact No.:<input type="text" name="nu"><br>
Email address:<input type="text" name="eaddress"><br>
Password:<input type="password" name="pass"><br>
Gender:<input type="radio" name="sex" value="male">Male<br>
<input type="radio" name="sex" value="female">Female<br>

<input type="submit" value="Submit">
</form></body>
</body>
</html>