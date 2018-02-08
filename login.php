<?php
error_reporting(0);
require "connect.php";


$name = $_POST["name"];
$password = $_POST["password"];
 
$sql = "SELECT * FROM `teams` WHERE `user_name`='".$name."' AND `user_pass`='".$password."';";
 
$result = mysqli_query($con, $sql);
 
$response = array();
 
while($row = mysqli_fetch_array($result)){
    $response = array("team_id"=>$row['team_id'],"name"=>$row['name'],"user_name"=>$row[''],"user_pass"=>$row[3]);
}
 
echo json_encode(array("teams"=>$response));
 
?>