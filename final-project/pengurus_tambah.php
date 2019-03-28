<?php

include "config/db.php";

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$password=md5($_POST['password']);


$sql = "INSERT INTO pengurus (nip, nama, password)
VALUES ('$nip', '$nama','$password')";

?>

			<?php
			if (mysqli_query($conn, $sql)) 
			{
				header("location:data_penggurus.php");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			?>
			</span>
	 		