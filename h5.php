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
<?php echo "<a href='h1.php'>Daily grades</a>"; ?>
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
if(!isset($_SESSION["pasword1"])) 
{
echo " <form action='h6.php' method='post'>

ID1: <input type='text' name='id1'/>&nbsp; 

current pasword: <input type='pasword' name='pasword1' />&nbsp; 
new pasword: <input type='pasword' name='pasword2' />&nbsp; 
  
<input type='submit' name='submit' value='log in'/>";

}// if
else
{

}// else
?>

</body>
</html>


