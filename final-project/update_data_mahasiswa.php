
<?php
include "config/db.php";

$nim=$_POST['nim'];
$nama=$_POST['nama'];
$password=md5($_POST['password']);
echo $nim."</br>";
echo $nama."</br>";
echo $password."</br>";





$sql = "UPDATE mahasiswa SET nim='$nim' , nama='$nama', password='$password' WHERE nim='$nim' " ;

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
		
