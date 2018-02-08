<?php
error_reporting(0);
require "connect.php";

    $sql = "SELECT * FROM dispatchings";  
    $r = mysqli_query($con,$sql); 
    $result = array();

    while($row = mysqli_fetch_array($r)){
        array_push($result,array(
            'cor_id'=>$row['cor_id'],
            'Name'=>$row['Name']
        )); 
      }//end while

    echo json_encode(array('coordinates'=>$result));

    mysqli_close($con);
?>