<?php

	$conn = mysqli_connect('localhost','bhargav','Bhargav@2427','banking-system');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>