<?php session_start();?>
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
<?php include("DB_connection.php"); ?>

 <?php $id=$_SESSION['id'];
$x=mysql_query("SELECT * FROM student1 WHERE id_student= '".$id.
"'") or die(mysql_error());
$xx=mysql_fetch_array($x)
 ?>
 <?php $d=$xx['course_id']; ?>
 <?php $y=mysql_query("SELECT * FROM course WHERE course_id= '".$d.
"'") or die(mysql_error());
$f=mysql_fetch_array($y); 
echo "<br>"."<br>"; ?>
<?php
if(!$xx['first_exam']==0||!$xx['second_exam']==0||!$xx['final_exam']==0)
{ ?>
<table border="4" bgcolor="Violet"  cellspacing="2" cellpadding="25" bordercolor="blue">
<?php
if(!$xx['first_exam']==0)
 { ?>
<tr>
<td>
<?php echo "First Exam"; ?>
</td>
<td>
  <?php echo $f['course_name']; ?>
  </td>
  <td>
 <?php 
 echo $xx['first_exam']; 
 ?>
 </td>
 <td>
<?php echo "The Wait is 25%"; ?>
</td>
 </tr>
 <?php
 }
 ?>
 <?php
 if(!$xx['second_exam']==0)
 { ?>
 <tr>
 <td>
<?php echo "Second Exam"; ?>
</td>
 <td>
 <?php echo $f['course_name']; ?>
 </td>
 <td>
 <?php 
 echo $xx['second_exam'];
 ?>
 </td>
 <td>
<?php echo "The Wait is 25%"; ?>
</td>
 </tr>
 <?php
 }
 ?>
 <?php
 if(!$xx['final_exam']==0)
{ ?>
 <tr>
 <td>
<?php echo "Final Exam"; ?>
</td>
 <td>
 <?php echo $f['course_name']; ?>
 <td>
 <?php
 echo $xx['final_exam']; 
 ?>
 </td>
 <td>
<?php echo "The Wait is 50%"; ?>
</td>
 </tr>
 <?php
 }
 ?>
 </table>
 <?php
 }
 ?>
 
  
 
<?php echo "<br>"; ?>

</body>
</html>

