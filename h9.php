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
<table border="4" bgcolor="silver"  cellspacing="2" cellpadding="25" bordercolor="blue">

<tr>

<td>
<?php echo "<a href='h8.php'>main page</a>"."    "; ?>
</td>

<td>
<?php echo "<a href='h9.php'>Personal Information</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h10.php'>Insert Marks</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h20.php'>Insert Absences</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h17.php'>Insert Note to A student</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h13.php'>Change Password</a>"."    "; ?>
</td>
<td>
<?php echo "<a href='h3.php'>log out</a>"."    "; ?>
</td>
</tr>

</table>
<?php

include("DB_connection.php");

$id=$_SESSION['id'];
$x=mysql_query("SELECT * FROM teacher WHERE id_teacher= '".$id.
"'") or die(mysql_error());
while($xx=mysql_fetch_array($x))
 {
echo "<br>"."<br>";
 echo "NAME :"." ".$xx['first_name']." ";
 echo $xx['second_name']." ";
 echo $xx['third_name']." ";
 echo $xx['last_name']." "."<br>"."<br>";
 echo "id Number :"." ".$xx['id_teacher']." "."<br>"."<br>";
 echo "E_mail :"." ".$xx['e_mail']." "."<br>"."<br>";
 echo "Cell_Number :"." ".$xx['cell_number']." "."<br>"."<br>";
 echo "Phone_Number"." ".$xx['phone_number']." "."<br>"."<br>";
  echo "City :"." ".$xx['city']." "."<br>"."<br>";
 echo "street :"." ".$xx['street']." "."<br>"."<br>";
 echo "pasword :"." ".$xx['password']." "."<br>"."<br>";
 echo "Age :"." ".$xx['age']." "."<br>"."<br>";
 echo "Date :"." ".$xx['date']." "."<br>"."<br>";
 
 echo "<br>";
 
 }
//var_dump(mysql_error());

 ?>
 
</body>
</html>