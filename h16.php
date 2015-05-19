<?php session_start(); ?>
<html>
<head>
<style>
body 
{
background-image:url('paper.gif');
background-color:#cccccc;
}
p {font-size:400%;}
</style>
</head>
<body>

<table border="4" bgcolor="gold"  cellspacing="2" cellpadding="25" bordercolor="blue">

<tr>

<td>
<?php echo "<a href='fahed.php'>main page</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h12.php'>Daily grades</a>"; ?>
</td>
<td>
<?php echo "<a href='h4.php'>Personal Information</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h22.php'>Final grades</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h19.php'>Absences</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h16.php'>Teacher's Notes</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h5.php'>Change Password</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h3.php'>log out</a>"."    "; ?>
</td>
</tr>

</table>
<?php
include("DB_connection.php");

$id=$_SESSION['id'];
$x=mysql_query("SELECT * FROM student1 WHERE id_student= '".$id.
"'") or die(mysql_error());
$xx=mysql_fetch_array($x);
echo "<br>"."<br>";
 echo "<p>note:<p>"."  ".$xx['note']." ";
?>
</body>
</html>


