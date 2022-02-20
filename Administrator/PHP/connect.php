<?php
//String connection to the database
$connect = mysql_connect("mysql-69655-0.cloudclusters.net","admin","fD1eOHzf") or die ('<h2>Failed to connect to the web server. Please Check your web server!</h2>');
mysql_select_db("dbmis",$connect) or die ('<h2>Failed to connect to the database!</h2>');
?>
