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
$xx=mysql_fetch_array($x);
?>
<table>
<tr>
<td>
<?php echo "NAME :"." ".$xx['first_name']." "; 
 echo $xx['second_name']." ";
 echo $xx['third_name']." ";
 echo $xx['last_name']." ______________________________________________"; ?>
 </td>
 <td>
 <?php echo "Id Number :"." ".$xx['id_student']." "; ?>
 </td>
 </tr>
 <tr>
 <td>
  <?php echo "City :"." ".$xx['city']." "."<br>"."<br>"; ?>
 </td>
 <td>
 <?php echo "Street :"." ".$xx['street']." "."<br>"."<br>"; ?>
 </td>
 </tr>
 <tr>
 <td>
 <?php echo "Age :"." ".$xx['age']." "."<br>"."<br>"; ?>
 </td>
 <td>
 <?php echo "Date :"." ".$xx['date']." "."<br>"."<br>"; ?>
 </td>
 </tr>
</table>
<hr/>
<hr/>
<?php

include("DB_connection.php");

$id=$_SESSION['id'];
$x=mysql_query("SELECT * FROM student1 WHERE id_student= '".$id.
"'") or die(mysql_error());
$xx=mysql_fetch_array($x); 
?>
<?php $d=$xx['course_id']; ?>
 <?php $y=mysql_query("SELECT * FROM course WHERE course_id= '".$d.
"'") or die(mysql_error());
$f=mysql_fetch_array($y); 
echo "<br>"."<br>"; ?>
<?php if(!$xx['first_exam']==0&&!$xx['second_exam']==0&&!$xx['final_exam']==0)
 {?>
<table border="4" bgcolor="Violet"  cellspacing="2" cellpadding="25" bordercolor="blue">
<tr>
<td>
  <?php echo $f['course_name']; ?>
  </td>
  <td>
 <?php 
 
 $var=($xx['first_exam']+$xx['second_exam']+$xx['final_exam']);
 echo $var;
 ?>
 </td>
 <td>
<?php echo "The Wait is 100%"; ?>
</td>
 </tr>
 </table>
 <?php
 }
 ?>
</body>
</html>