<?php
session_start();
include("DB_connection.php");


if(isset($_POST['id']))
{

$id=$_POST['id'];
$pasword=$_POST['pasword'];
if($id>10000000)
{
$x=mysql_query("SELECT * FROM student1 WHERE id_student= '".$id.
"' AND password='".$pasword."'") or die(mysql_error());

if(mysql_num_rows($x)==1)
{
$xx=mysql_fetch_array($x);
$_SESSION['id']= $xx['id_student'];
$_SESSION['first_name']= $xx['first_name'];

header("Location: index.php");
exit();
}// if
}
elseif($id<99999&&$id>10000)
{
 
 $x=mysql_query("SELECT * FROM teacher WHERE id_teacher= '".$id.
"' AND password='".$pasword."'") or die(mysql_error());

if(mysql_num_rows($x)==1)
{
$xx=mysql_fetch_array($x);
$_SESSION['id']= $xx['id_teacher'];
$_SESSION['first_name']= $xx['first_name'];

header("Location: h8.php");
exit();

 }
 
 
}// elseif	
 echo"invalid"."<a href='index.php'>try again</a>";
}// if
?>