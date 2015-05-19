<?php
session_start();
include("DB_connection.php");


if(isset($_POST['id11']))
{

$abs=$_POST['abs'];
$id7=$_POST['id11'];
if($_POST['id11']>10000000)
{
$x=mysql_query("SELECT * FROM student1 WHERE id_student= '".$id7.
"'") or die(mysql_error());

if(mysql_num_rows($x)==1)
{
$xx=mysql_fetch_array($x);
$f=$xx['Absences'];
mysql_query("UPDATE student1 SET Absences=($f+$abs) WHERE id_student=$id7");


header("Location: h8.php");
exit();
}// if
}
}
echo"invalid"."<a href='h20.php'>try again</a>";
?>