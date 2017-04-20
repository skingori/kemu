<?php
$conn = mysql_connect('localhost','root','root') or die (mysql_error());
mysql_select_db('farmer', $conn) or die (mysql_error());
?>
