<?php session_start();?>
<html>
<head>
<style>
body 
{
background-image:url('paper.gif');
background-color:#cccccc;
}
p {font_size:1000%;}
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
while($xx=mysql_fetch_array($x))
 {
echo "<br>"."<br>";
 echo "NAME :"." ".$xx['first_name']." ";
 echo $xx['second_name']." ";
 echo $xx['third_name']." ";
 echo $xx['last_name']." "."<br>"."<br>";
 echo "Id Number :"." ".$xx['id_student']." "."<br>"."<br>";
 echo "E_mail :"." ".$xx['e_mail']." "."<br>"."<br>";
 echo "Cell_Number :"." ".$xx['cell_number']." "."<br>"."<br>";
 echo "Phone_Number"." ".$xx['phone_number']." "."<br>"."<br>";
  echo "City :"." ".$xx['city']." "."<br>"."<br>";
 echo "Street :"." ".$xx['street']." "."<br>"."<br>";
 echo "Age :"." ".$xx['age']." "."<br>"."<br>";
 echo "Date :"." ".$xx['date']." "."<br>"."<br>";

  
 
 echo "<br>";
 
 }
//var_dump(mysql_error());

 ?>
 
</body>
</html>