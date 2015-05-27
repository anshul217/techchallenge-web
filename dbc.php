<?php
//connect to the database so we can check, edit, or insert data to our users table
$con = mysql_connect('localhost', 'root', 'MYSECRET') or die(mysql_error());
$db = mysql_select_db('anshul', $con) or die(mysql_error());
?>


