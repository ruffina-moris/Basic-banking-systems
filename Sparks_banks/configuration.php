<?php

	$conn = mysqli_connect('localhost' , 'sparks_banks' , 'cno8uWOQZvvimEf0', 'sparks_banks');

	if(!$conn){
		die("Could not connect to the database  ".mysqli_connect_error());
	}

?>