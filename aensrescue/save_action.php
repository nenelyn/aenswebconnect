<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1 style="text-align:center;">DATA SEND SUCCESSFULLY!!!</h1>
<?php include "connection.php";

	$client_id = $_POST[ 'client_id' ];
	$team_id = $_POST[ 'team_id' ];
	$fname = $_POST[ 'fname' ];
	$mname = $_POST[ 'mname' ];
	$lname = $_POST[ 'lname' ];
	$address = $_POST[ 'address' ];
	$age = $_POST[ 'age' ];
	$contact_num = $_POST[ 'contact_num' ];
	$time_arrival = $_POST[ 'time_arrival' ];
	$remarks = $_POST[ 'remarks' ];

	$db_name = "sql12219673";
$mysql_user = "sql12219673";
$mysql_pass = "4vcRRZmtNc";
$server_name = "sql12.freemysqlhosting.net";

    $conn = mysqli_connect($DBHOST, $DBUSER, $DBPASS,$DBNAME);
    $handle  =  mysql_connect("localhost", "root", "") or die(mysql_error());
	mysql_query("USE sql12219673",$handle);
  	$query = "SELECT * FROM admins";
  	$result = mysql_query($query);
		while ($data = mysql_fetch_object($result)){
      $admin_id = $data->admin_id;
}

mysql_query("USE sql12219673",$handle);
  	$query1 = "SELECT * FROM dispatchingss";
  	$result1 = mysql_query($query1);
		while ($data = mysql_fetch_object($result1)){
      $diss_id = $data->diss_id;
}

$sql=$conn->query( "INSERT INTO records ( client_id,admin_id,team_id,diss_id,fname,mname,lname,address,age,contact_num,time_arrival,remarks ) VALUES( '$client_id','$admin_id','$team_id', '$diss_id','$fname','$mname','$lname','$address','$age','$contact_num','$time_arrival','$remarks' )" );
	echo "<script> alert('DATA SUCCESSFULLY SEND!!!');</script>";
?>

<style type="text/css">
	script{
		float: center;
		border: 2px solid black;
		width: 50%;
		height: 20px;
		color: red;
	}
	html{
		background: #81ff47;
	}
</style>

</body>
</html>