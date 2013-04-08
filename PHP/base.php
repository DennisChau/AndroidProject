<?php  
    session_start();  
    $dbhost = "sophia.cs.hku.hk:3306"; // this will ususally be 'localhost', but can sometimes differ  
    $dbname = "slchau"; // the name of the database that you are going to use for this project  
    $dbuser = "slchau"; // the username that you created, or were given, to access your database  
    $dbpass = "bms4d5nb"; // the password that you created, or were given, to access your database  
    mysql_connect($dbhost, $dbuser, $dbpass) or die("MySQL Error: " . mysql_error());  
    mysql_select_db($dbname) or die("MySQL Error: " . mysql_error());  
?>  