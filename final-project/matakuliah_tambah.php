<?php

include "config/db.php";

$kode_mk=$_POST['kode_mk'];
$nama_mk=$_POST['nama_mk'];
$sks=$_POST['sks'];


$sql = "INSERT INTO matakuliah (kode_mk, nama_mk, sks)
VALUES ('$kode_mk', '$nama_mk','$sks')";

?>

			<?php
			if (mysqli_query($conn, $sql)) 
			{
				header("location:data_matakuliah.php");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			?>
			</span>
	 		