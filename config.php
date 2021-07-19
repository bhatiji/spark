<?php
    $server="localhost";
	$username="root";
	$password="";
	$db="bank";

	$conn = mysqli_connect($server, $username,$password,$db);

	if(!$conn){
		die("could'nt connect to database due to an error --> ".mysqli_connect_error());
	}

?>