<?php
session_start();
include("DB_connection.php");


if(isset($_POST['id10']))
{

$note=$_POST['note'];
$id7=$_POST['id10'];
if($_POST['id10']>10000000)
{
$x=mysql_query("SELECT * FROM student1 WHERE id_student= '".$id7.
"'") or die(mysql_error());

if(mysql_num_rows($x)==1)
{
$xx=mysql_fetch_array($x);

mysql_query("UPDATE student1 SET note='$note' WHERE id_student=$id7");


header("Location: h8.php");
exit();
}// if
}
}
echo"invalid"."<a href='h17.php'>try again</a>";
?>