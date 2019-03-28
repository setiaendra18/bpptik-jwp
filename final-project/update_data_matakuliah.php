
<?php
include "config/db.php";

$kode_mk=$_POST['kode_mk'];
$nama_mk=$_POST['nama_mk'];
$sks=$_POST['sks'];
echo $kode_mk."</br>";
echo $nama_mk."</br>";
echo $sks."</br>";





$sql = "UPDATE matakuliah SET kode_mk='$kode_mk' , nama_mk='$nama_mk', sks='$sks' WHERE kode_mk='$kode_mk' " ;

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
		
