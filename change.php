<?php 
	require 'connection.php';
	session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }

	$id = $_GET["id"];

	$change = query("SELECT * FROM blog WHERE id = $id")[0];


	if (isset($_POST["submit"])) {
		if (ubah ($_POST) > 0){
			echo "Data Change Suceed";
			echo "<br>";
			echo " Click ";
			echo "<a href='admin.php'>Here</a>";
			echo " to See the Result";
		}
		else{
			echo "Data Changed Failed";
			echo "<br>";
			echo " Click ";
			echo "<a href='create.php'>Here</a>";
			echo "(>_<)";
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Article</title>
</head>
<body>
	<br><br><!-- 
	<?php $waktu = date_default_timezone_set('Asia/Jakarta');  ?> -->

 	<form method="POST" action="">
 		<input type="hidden" name="id" value="<?= $change["id"]?>">
 		<br>
 		Medicine : 
		<input type="text" name="medicine" placeholder="medicine" value="<?= $change["medicine"]?>">
		<br>
		<br>
		Disease	:
		<input name="disease"  value="<?= $change["disease"]?>">
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>