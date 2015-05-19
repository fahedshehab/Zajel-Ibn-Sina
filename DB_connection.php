<?php

$con=mysql_connect('localhost','root','',''); //open a new connection to the MySQL server

if(!$con)
{
die('not connected !'.mysql_error);
}

$db_selected= mysql_select_db("zajel_ibnseena",$con);//sets the active MySQL database (returns TRUE on success, or FALSE on failure.)


if(!$db_selected)
{
die("cant connect :".mysql_error);
}

?>