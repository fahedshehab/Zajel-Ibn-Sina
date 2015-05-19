<?php
session_start();
include("DB_connection.php");


if(isset($_POST['id5']))
{
$pasword3=$_POST['pasword3'];
$id1=$_POST['id5'];
$pasword4=$_POST['pasword4'];

$x=mysql_query("SELECT * FROM teacher WHERE id_teacher= '".$id1.
"' AND password='".$pasword3."'") or die(mysql_error());

if(mysql_num_rows($x)==1)
{
$xx=mysql_fetch_array($x);
$_SESSION['id1']= $xx['id_teacher'];
$_SESSION['first_name']= $xx['first_name'];

mysql_query("UPDATE teacher SET password=$pasword4 WHERE id_teacher=$id1");
echo "your password is change";
header("Location: h3.php");
exit();
}// if

else
{
 echo"invalid login information - please go back";
 exit();
}// else	
	
}// if
?>