
<?php
include "config/db.php";

$nip=$_POST['nip'];
$nama=$_POST['nama'];
$password=md5($_POST['password']);
echo $nip."</br>";
echo $nama."</br>";
echo $password."</br>";





$sql = "UPDATE pengurus SET nip='$nip' , nama='$nama', password='$password' WHERE nip='$nip' " ;

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
		
