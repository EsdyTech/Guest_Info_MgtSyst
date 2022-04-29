<?php
$name = $cno=$p_error=$name_error=$time_error=$rid_error="";

	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbName = "sourcecodester_vms";
 $pass = "";
	$link = mysqli_connect($server, $user, $pass, $dbName);
		if(!$link)
			die("Error connecting database");

?>