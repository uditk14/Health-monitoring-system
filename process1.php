<?php
$bp=$p2;
$bp1=$p3;
$bp1norm="Your Systolic BP is totally fine !<br>";
$bp1prehigh="Your Systolic BP is in PreHigh Stage, Warning !<br>";
$bp1low="Your Systolic BP is lower than normal.<br>";
$bp1toolow="Your Systolic BP is too Low , consult a doctor !<br>";
$bp1toohigh="Your Systolic BP is too High! , Consult a Doctor!<br> ";
$bp1high="Your Systolic BP is higher than normal .<br>";
$bp2norm="Your Diastolic BP is totally fine ! <br>";
$bp2prehigh="Your Diastolic BP is in PreHigh Stage, Warning !<br>";
$bp2low="Your Diastolic BP is lower than normal.<br>";
$bp2toolow="Your Diastolic BP is too Low , consult a doctor !<br>";
$bp2toohigh=" Your Diastolic BP is too High! , Consult a Doctor!<br>";
$bp2high="Your Diastolic BP is higher than normal .<br>";

$result1="unable to load";//default
$result2="unable to load";


if($bp>=90&&$bp<=120)
{
	$result1= $bp1norm;
}
elseif($bp<80)
{
	$result1= $bp1toolow;
}
elseif($bp<90)
{
	$result1= $bp1low;
}
elseif($bp >190)
{
	$result1= $bp1toohigh;
}
elseif($bp>=121&&$bp<=140)
{
	$result1= $bp1prehigh;
}
elseif($bp>140)
{
	$result1= $b1high;
}



if($bp1>=60&&$bp1<=80)
{
	$result2= $bp2norm;
}
elseif($bp1<55)
{
	$result2= $bp2toolow;
}
elseif($bp1<60)
{
	$result2= $bp2low;
}
elseif($bp1>100)
{
	$result2= $bp2toohigh;
}
elseif($bp1>=81&&$bp1<=90)
{
	$result2= $bp2prehigh;
}
elseif($bp1>90)
{
	$result2= $bp2high;
}
echo $result1;
echo $result2;
$_SESSION['result1']=$result1;
$_SESSION['result2']=$result2;
?>