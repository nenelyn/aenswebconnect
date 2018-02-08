<?php
 
error_reporting(0);
require "connect.php";
 
$client_id = $_POST["client_id"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$lname = $_POST["lname"];
$address = $_POST["address"];
$age = $_POST["age"];
$contact_num = $_POST["contact_num "];
$time_arrival = $_POST["time_arrival"];
$remarks = $_POST["remarks"];
 
$sql = "INSERT INTO `records` (`client_id`,`fname`, `mname`, `lname`,`address`,`age`,`contact_num`,`time_arrival`,`remarks`) 
VALUES (NULL,'".$client_id."', '".$fname."', '".$mname."',  '".$lname."', '".$address."', '".$age."', '".$contact_num."', '".$time_arrival."', '".$remarks."',);";
if(!mysqli_query($con, $sql)){
    echo '{"message":"Unable to save the data to the database."}';
}
 
?>