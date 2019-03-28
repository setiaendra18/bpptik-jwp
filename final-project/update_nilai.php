
<?php
include "config/db.php";

$nilai=$_POST['nilai'];
$kode_mk=$_POST['kode_mk'];
$nim=$_POST['nim'];
/*
* Fungsi untuk konversi , berdasarkan nilai angka mahasiswa //
* @param string $hasil
*/
function NilaiHuruf($nilaiTotal)
{
	if($nilaiTotal >=80 && $nilaiTotal<=100)
	{
			$hasil="A";
	}
	elseif ($nilaiTotal >=70 && $nilaiTotal<80) 
	{
			$hasil="B";
	}
	elseif ($nilaiTotal >=60 && $nilaiTotal<70) 
	{
			$hasil="C";
	}
	elseif ($nilaiTotal >=50 && $nilaiTotal<60)
	{
			$hasil="D";
	}
	elseif ($nilaiTotal <50 && $nilaiTotal>=0)
	{
			$hasil="E";
	}
	return $hasil;
}
/*
* Fungsi untuk mengetahui nilai bobot , berdasarkan nilai angka mahasiswa //
* @param string $hasil
*/

function Bobot($hasil)
{
	if($hasil=="A")
	{
			$hasil=4;
	}
	elseif ($hasil=="B") 
	{
			$hasil=3;
	}
	elseif ($hasil=="C") 
	{
			$hasil=2;
	}
	elseif ($hasil=="D")
	{
			$hasil=1;
	}
	elseif ($hasil=="E")
	{
			$hasil=0;
	}

	return $hasil;
}
$NilaiHuruf=NilaiHuruf($nilai);
$bobot=Bobot($NilaiHuruf);
echo $bobot;

/*Query mealukan update kedalam Tabel transkip */ 
$sql = "UPDATE transkip SET nilai='$nilai' , nilai_huruf='$NilaiHuruf', bobot='$bobot' WHERE nim='$nim' AND kode_mk='$kode_mk' " ;

?>

			<?php
			if (mysqli_query($conn, $sql)) 
			{
					header("location:tampil_nilai.php?nim=$nim");
			}
			else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			?>
		
