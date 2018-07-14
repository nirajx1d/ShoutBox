<?php
	$server ='localhost';
	$user = 'root';
	$pass = 'niraj@123';
	$db = 'shoutit';

	//Connect to mysql database
	$conn = mysqli_connect($server,$user,$pass,$db);

	//Test connection
	if(mysqli_connect_errno())
	{
		echo 'Failed to connect to database: '.mysqli_connect_error();
	}


?>