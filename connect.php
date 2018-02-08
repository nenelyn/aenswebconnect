<?php
 
error_reporting(0);
 
$db_name = "sql12219673";
$mysql_user = "sql12219673";
$mysql_pass = "4vcRRZmtNc";
$server_name = "sql12.freemysqlhosting.net";
 
$con = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
 
if(!$con){
    echo '{"message":"Unable to connect to the database."}';
}
 
?>