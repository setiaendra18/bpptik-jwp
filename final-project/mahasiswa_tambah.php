<?php

include "config/db.php";

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$password=md5($_POST['password']);


$sql = "INSERT INTO mahasiswa (nim, nama, password)
VALUES ('$nim', '$nama','$password')";

?>

			<?php
			if (mysqli_query($conn, $sql)) 
			{
				header("location:data_mahasiswa.php");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			?>
			</span>
	 		