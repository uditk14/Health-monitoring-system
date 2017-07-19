<html>
<body>
<?php
$bpm = null;
$r=null;
if(isset($_SESSION['parameter']) &&(!empty($_SESSION['parameter'])))
{$r=$_SESSION['parameter'];}
if(isset($_POST['p1']) &&(!empty($_POST['p1'])))
{$bpm=$_POST['p1'];}
//$bpm=$r;
$gender=$_SESSION['gender'];
$age=$_SESSION['age'];
$a="male";
$b="female";
$norm="Congratulations! Your HeartRate is Normal!";
$high="Your Heart rate is high right now !";
$low="Your heart rate is low right now!";
$invalid="Invalid Heart Rate";
$toolow="Your heart rate is too low , seek a doctor !";
$toohigh="Your heart rate is too high , seek a doctor!";
if($bpm<40 || $bpm>150)
{$result=$invalid;}
else if($gender==$a)//for male
{
	
	if($age>=1&&$age<=15)
	{
		if($bpm>=66 && $bpm<=83)//Normal
		{$result=$norm;
			
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<57)//Too low
		{$result=$toolow;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		elseif($bpm<66)//Low
		{$result=$low;
	
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm>97)//Too high
		{$result=$toohigh;
		
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>83)//High
		{$result=$high;
			
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	}
	if($age>=16&&$age<=19)
	{
		if($bpm>=61&&$bpm<=78)//Normal
		{$result=$norm;
			
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<52)//Too low
		{$result=$toolow;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		elseif($bpm<61)//Low
		{$result=$low;
			
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		
		elseif($bpm>92)//Too high
		{$result=$toohigh;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>78)//High
		{$result=$high;
			
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	}
		if($age>=20&&$age<=39)
	{
		if($bpm>=61&&$bpm<=76 )//Normal
		{
			$result=$norm;
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<52)//Too low
		{$result=$toolow;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		
		elseif($bpm<61)//Low
		{$result=$low;
			
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm>89)//Too high
		{$result=$toohigh;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>76)//High
		{$result=$high;
			
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	}
	if($age>=40&&$age<=59)
	{
		if($bpm>=61&&$bpm<=77)//Normal
		{$result=$norm;
			
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<52)//Too low
		{$result=$toolow;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		
		elseif($bpm<61)//Low
		{$result=$low;
			
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm>90)//Too high
		{$result=$toohigh;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>77)//High
		{$result=$high;
			
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	}
		if($age>=60&&$age<=79)
	{
		if($bpm>=60&&$bpm<=75)//Normal
		{$result=$norm;
			
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<50)//Too low
		{$result=$toolow;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		elseif($bpm<60)//Low
		{$result=$low;
		
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm>91)//Too high
		{$result=$toohigh;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>75)//High
		{$result=$high;
			
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	}
	if($age>=80)
	{
		if($bpm>=61&&$bpm<=78)//Normal
		{$result=$norm;
			
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<=61)//Low
		{$result=$low;
			
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm<51)//Too low
		{$result=$toolow;
			
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		elseif($bpm>78)//High
		{
			$result=$high;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		elseif($bpm>94)//Too high
		{
			$result= $toohigh;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
	}
}
elseif($gender==$b)//for female gender
{
	
	if($age>=1&&$age<=15)
	{
		if($bpm>=70&&$bpm<=87)//Normal
		{
			$result=$norm;			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<69)//Too low
		{
			$result= $toolow;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		
		elseif($bpm<70)//Low
		{
			$result=  $low;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm>82)//Too high
		{
			$result=  $toohigh;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>87)//High
		{
			$result=  $high;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	}
	if($age>=16&&$age<=19)
	{
		if($bpm>=69&&$bpm<=85)//Normal
		{
			$result=  $norm;
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<58)//Too low
		{
			$result=  $toolow;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		elseif($bpm<69)//Low
		{
			$result=  $low;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm>99)//Too high
		{
			$result=  $toohigh;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>85)//High
		{
			$result=  $high;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	}
		if($age>=20&&$age<=39)
	{
		if($bpm<=66&&$bpm>=82)//Normal
		{
			$result=  $norm;
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<57)//Too low
		{
			$result=  $toolow;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		elseif($bpm<66)//Low
		{
			$result=  $low;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm>95)//Too high
		{
			$result=  $toohigh;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>82)//High
		{
			$result=  $high;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	}
	if($age>=40&&$age<=59)
	{
		if($bpm>=64&&$bpm<=79)//Normal
		{
			$result=  $norm;
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<56)//Too low
		{
			$result=  $toolow;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		elseif($bpm<64)//Low
		{
			$result=  $low;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm>92)//Too high
		{
			$result=  $toohigh;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>79)//High
		{
			$result= $high;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	}
		if($age>=60&&$age<=79)
	{
		if($bpm>=64&&$bpm<=79)//Normal
		{
			$result=  $norm;
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
		elseif($bpm<56)//Too low
		{
		$result=  $toolow;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		elseif($bpm<64)//Low
		{
			$result=  $low;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}
		elseif($bpm>92)//Too high
		{
			$result=  $toohigh;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}
		elseif($bpm>78)//High
		{
			$result=  $high;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
		
	if($age>=80)
	{
		if($bpm>=64&&$bpm<=77)//Normal
		{
			$result=  $norm;
			/*Feed into Database And Display that the beat per minute seems fine*/			
		}
				elseif($bpm<56)//Too low
		{
			$result=  $toolow;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too low bpm warning.*/	
		}
		elseif($bpm<64)//Low
		{
			$result=  $low;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and low bpm warning.*/	
 		}

				elseif($bpm>93)//Too high
		{
			$result=  $toohigh;
			/*-->Advanced bpm detection Method Algorithm<--*/
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and too high bpm warning.*/	
		}

		elseif($bpm>77)//High
		{
			$result=$high;
			/*Feed into database and retrieve recommendation from db 
			as well , display a message with recommendation and high bpm warning.*/	
		}
	}
}
}?><h2 text align="center"><?php echo $result."<br>";?></h2>
<!--<form action="logout.php">
    <input type="submit" value="Logout">
</form>-->
<?php
$_SESSION['result']=$result;
?></body>
</html>