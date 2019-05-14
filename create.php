<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<center>
	<head>
	<title>Add New Post</title>
</head>
<body>
	<br><br>
 	<form method="POST" action="actioncreate.php">
 		<input type="hidden" name="time">
 		Medicine   : 
		<input type="text" name="medicine" placeholder="medicine">
		<br>
		<br>
		Disease :
		<textarea name="disease" placeholder="disease"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</center>
</html>
