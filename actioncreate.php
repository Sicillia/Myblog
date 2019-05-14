<?php 
	require 'connection.php';

	session_start();
	$medicine = $_POST['medicine'];
	$disease = $_POST['disease'];
	$time = $_POST['time'];
	
	
	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$medicine','$disease',null)");

		if ($tambah>0) {
			echo "Add Some Data Succeed";
			echo "<br>";
			echo " Click ";
			echo "<a href='admin.php'>here</a>";
			echo " to see the result";
		}
		else {
			echo "Add Some Data Failed";
			echo "<br>";
			echo " Click ";
			echo "<a href='create.php'>here</a>";

		}
	

 ?>