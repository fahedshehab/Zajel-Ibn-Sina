<?php
session_start();
include("DB_connection.php");


if(isset($_POST['id1']))
{
$pasword2=$_POST['pasword2'];
$id1=$_POST['id1'];
$pasword1=$_POST['pasword1'];

$x=mysql_query("SELECT * FROM student1 WHERE id_student= '".$id1.
"' AND password='".$pasword1."'") or die(mysql_error());

if(mysql_num_rows($x)==1)
{
$xx=mysql_fetch_array($x);
$_SESSION['id1']= $xx['id_student'];
$_SESSION['first_name']= $xx['first_name'];

mysql_query("UPDATE student1 SET password=$pasword2 WHERE id_student=$id1");
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