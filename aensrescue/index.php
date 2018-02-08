<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<body>
<?php
	// query, select all client
 				$db_name = "sql12219673";
$mysql_user = "sql12219673";
$mysql_pass = "4vcRRZmtNc";
$server_name = "sql12.freemysqlhosting.net";

                $conn = mysqli_connect($DBHOST, $DBUSER, $DBPASS,$DBNAME);
 				$sql=$conn->query("SELECT * FROM clients");
 				$sql1=$conn->query("SELECT * FROM teams");
?>


<form action="save_action.php" method="post">
<strong><h1 style="font-family:Times New Roman;color:black;font-size:20px;text-align:center;">Rescue and Response Record</h1></strong>
<table>
		<label>Client ID</label>
		<select name="client_id">
		<?php if($sql->num_rows) { ?>
		<?php while($user=$sql->fetch_object() ) { ?>
		<option value="<?php echo $user->client_id ?>"> <?php echo $user->name ?>  <?php echo $user->mname ?>  <?php echo $user->lname ?></option>
		<?php } ?>
		<?php } ?>
		</select><br><br>
		
		<label>First Name: </label>
		<br><input type="text" name="fname" required maxlength=""><br><br>
		<label>Middle Name: </label>
		<br><input type="text" name="mname" required maxlength=""><br><br>
		<label>Last Name: </label>
		<br><input type="text" name="lname" required maxlength=""><br><br>
		<label>Address: </label>
		<br><input type="text" name="address" required><br><br>
		<label>Age: </label>
		<br><input type="text" name="age" required><br><br>
		<label>Contact No.: </label>
		<br><input type="text" name="contact_num" required><br><br>
		<label>Time of Arrival (Hospital): </label>
		<br><input type="time" name="time_arrival" required><br><br>
		<label>Team Name</label>
		<select name="team_id">
		<?php if($sql1->num_rows) { ?>
		<?php while($user=$sql1->fetch_object() ) { ?>
		<option value="<?php echo $user->team_id ?>"> <?php echo $user->name?></option>
		<?php } ?>
		<?php } ?>
		</select><br><br>
		<label>Remarks: </label>
		<br><input type="text" name="remarks" required><br><br>
		<input id="button" type="submit" name="" value="Submit Report"><br><br>
</table>
	</form>
</div>


<style>
form{
	position: absolute;
	left:10%;
}

label{
	font-size: 20px;
	
}

input{
	border-radius: 5px;
	width: 100%;
	height: 25px;
}


html{
	background: #81ff47;
}

</style>	

</body>
</html>		



