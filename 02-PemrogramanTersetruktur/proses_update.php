<htmL>
<head>
<title>NILAI MAHASISWA</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script>
    function goBack() {
        window.history.back();
    }
</script>
</head>

<body>
<?php
/*menghubungkan file dengan koneksi ke mysql*/
include "koneksi.php";
$id_mahasiswa=$_POST['id_mahasiswa'];
echo "$id_mahasiswa";
/*Penyimpanan nilai pada variabel , yang dikirimkan melalui form*/
$nama=$_POST['nama'];
$nltugas=$_POST['nltugas'];
$nluts=$_POST['nluts'];
$nluas=$_POST['nluas'];

/*
Fungsi Menghitung nilai akhir Mahasiswa, menjumlahkan nilai TUGAS UTS, UAS yang di kalikan dengan pembobotan nilai
@param integer @nLtugas, $nLuts, $nLuas
@return integer $nilai_akhir
*/
function NilaiAkhir($nltugas,$nluts,$nluas)
{
	$nilai_akhir=($nltugas*0.1)+($nluts*0.4)+($nluas*0.5);

	return $nilai_akhir;
}

/*
Fungsi mengkonversi nilai akhir/nilai total menjadi nilai huruf berdasarkan kondisi
@param integer $nilaiTotal
@param String $nama
@return string $nama 
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

$nilaiTotal=NilaiAkhir($nltugas,$nluts,$nluas);
$NilaiHuruf=NilaiHuruf($nilaiTotal);

/*Query Memasukan data kedalam basis data */ 
$sql = "UPDATE tbl_mahasiswa SET nama='$nama', nltugas='$nltugas', nluts='$nluts',nluas='$nluas', nltotal='$nilaiTotal', nilai='$NilaiHuruf' WHERE id_mahasiswa=$id_mahasiswa" ;

?>
<div class="container">
	<div class="row  justify-content-md-center">
		<div class="col-md-5">
			<br>
			<h5>NILAI TOTAL : <?= $nilaiTotal ?></h5>
			<h5>NAMA : <?= $nama ?></h5>
			<h5>NILAI HURUF : <?= $NilaiHuruf ?></h5>
			
			<?php
			if (mysqli_query($conn, $sql)) 
			{
				echo "Data nilai mahasiswa berhasil di simpan";
			}
			else
			{
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			?>
		
	 		<button onclick="goBack()" class="btn btn-primary">KEMBALI</button>
	 	
		</div>
	</div>
</body>
</htmL>