<?php 
	
	$conn = mysqli_connect("localhost","root","","myblog");

	function query ($query){
		global $conn;
		$result = mysqli_query ($conn,$query);
		$rows = [];

		while ($mhs = mysqli_fetch_assoc($result)) {
			$rows[]=$mhs;
		}
		return $rows;
	}

	function search ($search){
		$i= 1;
 		$search = $_POST['search'];
 		$query = "SELECT * FROM blog WHERE medicine LIKE '%$search%'";
 		$result = mysql_query($query);
 		while($x = mysql_fetch_array($result));
	}

	function hapus ($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM blog WHERE id = $id");
		return mysqli_affected_rows($conn); 
	}


	function ubah($data)
	{
		global $conn;

		$id = $data["id"];
		$medicine = htmlspecialchars($data["medicine"]);
		$disease = htmlspecialchars($data["disease"]);

		$query = "UPDATE blog SET medicine = '$medicine', disease = '$disease' WHERE id = $id";

		mysqli_query ($conn, $query);
		return mysqli_affected_rows ($conn);
	}

	// function creat ($data){
	// 	global $conn;

	// 	$judul = $data["medicine"];
	// 	$isi = $data["disease"];

	// 	$query = "INSERT INTO blog VALUES ('','$medicine', '$disease')";

	// 	mysql_query($conn, $query);

	// 	return mysqli_affected_rows($conn);



	
 ?>