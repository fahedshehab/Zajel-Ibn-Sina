<?php session_start();?>
<html>
<head>
<style>
body 
{
background-image:url('w3css.gif');
background-color:pink;
}
h2 {font-size:500%;}
p {font-size:300%;}
div
{
width:2000px;
padding:10px;
margin:0px;
background-color:green;
background-image:url('http://img132.imageshack.us/img132/8782/ilovemyschoolbyxzx4ever.jpg');
}
</style>
</head>
<body>


<div id="wrapper">
<h2>zajel ibn seena school</h2>
<p>fahed shehab</p>
</div>

<?php
if(!isset($_SESSION["id"])) 
{
echo " <form action='h2.php' method='post'>

ID: <input type='text' name='id'/>&nbsp; 

pasword: <input type='password' name='pasword' />&nbsp;  

<input type='submit' name='submit' value='log in'/>";

}// if
else
{
header("Location: fahed.php");
}// else
?>

</body>
</html>