<?php
session_start();
include("DB_connection.php");


if(isset($_POST['id2']))
{

$first=$_POST['first'];
$second=$_POST['second'];
$final=$_POST['final'];
$id3=$_POST['id2'];
if($_POST['id2']>10000000)
{
$x=mysql_query("SELECT * FROM student1 WHERE id_student= '".$id3.
"'") or die(mysql_error());

if(mysql_num_rows($x)==1)
{
$xx=mysql_fetch_array($x);

mysql_query("UPDATE student1 SET first_exam=$first WHERE id_student=$id3");
mysql_query("UPDATE student1 SET second_exam=$second WHERE id_student=$id3");
mysql_query("UPDATE student1 SET final_exam=$final WHERE id_student=$id3");


header("Location: h8.php");
exit();
}// if
}
}
echo"invalid"."<a href='h10.php'>try again</a>";
?>