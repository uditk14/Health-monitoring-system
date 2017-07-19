<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("project1",$conn);
//$x=null;
//if(isset($_REQUEST['a'])&& (!empty($_REQUEST['a'])))
//{
$x=$_REQUEST['a'];//}
$xy="INSERT INTO result(result1) VALUES('".$x."')";

$query=mysql_query($xy);
echo $query;

?>