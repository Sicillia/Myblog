<?php 
require 'connection.php';
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: login.php");
    exit;  
  }

$id = $_GET["id"];

if (hapus($id)>0) {
			echo "Delete Data Succeeded";
			echo "<br>";
			echo " Click ";
			echo "<a href='admin.php'>Here</a>";
			echo "to See the Result";
		}
	else
	{
			echo "Delete Data Failed";
			echo "<br>";
			echo " Click ";
			echo "<a href='admin.php'>Here</a>";
		}
	


 ?>