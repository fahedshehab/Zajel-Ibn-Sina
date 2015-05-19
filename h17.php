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

<table border="4" bgcolor="silver"  cellspacing="2" cellpadding="25" bordercolor="blue">

<tr>

<td>
<?php echo "<a href='h8.php'>main page</a>"."    "; ?>
</td>

<td>
<?php echo "<a href='h9.php'>Personal Information</a>"."    "; ?>

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
if(!isset($_SESSION["id10"])) 
{
echo " <form action='h18.php' method='post'>

NOTE: <input type='text' name='note'/>&nbsp;  
id_student: <input type='text' name='id10' />&nbsp; 
  
<input type='submit' name='submit' value='Sent'/>";

}// if
else
{

}// else
?>

</body>
</html>

