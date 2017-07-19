
<?php
$p=$_POST['person'];
if($p=="Pateint")
{
	echo"<br><a href='1.php'>patient</a>";
}
else
{
echo"<br><a href='doctor.php'>doctor</a>";
}
?>