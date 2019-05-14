<?php 
	require 'connection.php';
	session_start();
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$usia = $_POST['usia'];

	$result = mysqli_query($conn,"INSERT INTO user VALUES(null,'$username','$password','$email','$usia','$gender')");

	//copy sampe sini btw ini dicopy dari action login




	if ($result) {
		echo "Welcome";
		echo("<br>");
		echo "Login ";
		echo "<a href='login.php'>here</a>";
		echo " (^-^) ";
	}
	else {
		echo "Registration Failed (-_-')";
		echo "<a href='register.php'>Try again</a>";
	}


?>