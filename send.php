<?php
error_reporting(0);
require "connect.php";
$team_id = $_POST["team_id"];
$a_id = $_POST["a_id"];
$code = $_POST["code"];
$handle  =  mysql_connect("sql12.freemysqlhosting.net", "sql12219673", "4vcRRZmtNc") or die(mysql_error());
mysql_query("USE sql12219673",$handle);
$query1 = "SELECT * FROM a_accounts";
   $result1 = mysql_query($query1);

   while ($data = mysql_fetch_object($result1)){
      $a_id = $data->a_id;
      $code = $data->code;
}

$latitude = $_POST["latitude"];
$longitude = $_POST["longitude"];
$dt=date("Y-m-d H:i:s");
 
$sql = "INSERT INTO `locations`( `latitude`, `longitude`, `dt`,`a_id`, `code`) VALUES ('$latitude','$longitude','$dt','$a_id', '$code');";
if(!mysqli_query($con, $sql)){
    echo '{"message":"Unable to save the data to the database."}';
}
 

$sql1="UPDATE `sql12219673`.`locations` SET `latitude` = '$latitude', `longitude` = '$longitude' WHERE `locations`.`longitude` = 0";
if(!mysqli_query($con, $sql1)){
    echo '{"message":"Unable to save the data to the database."}';
}
?>