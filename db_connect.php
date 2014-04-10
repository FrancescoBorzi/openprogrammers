<?php
	$connection = mysqli_connect("localhost","","","");

	if (mysqli_connect_errno($connection))
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
