<?php
	$connection = mysqli_connect("localhost","shinworld","","my_shinworld");

	if (mysqli_connect_errno($connection))
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
    else
      mysqli_query($connection, "set names utf8");
?>
