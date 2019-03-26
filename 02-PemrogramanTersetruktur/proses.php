<?php
$nama=$_POST['nama'];
$nltugas=$_POST['nltugas'];
$nluts=$_POST['nluts'];
$nluas=$_POST['nluas'];

function nilaiAkhir($nltugas,$nluts,$nluas)
{
	$nilai_akhir=($nltugas*0.1)+($nluts*0.4)+($nluas*0.5);

	return $nilai_akhir;
}
function nilaiHuruf($nama, $nilaiTotal)
{
	if($nilaiTotal >=80 && $nilaiTotal<=100)
	{
			$hasil="Nama ".$nama." Mendapat nilai A";
	}
	elseif ($nilaiTotal >=70 && $nilaiTotal<80) 
	{
		$hasil="Nama ".$nama." Mendapat nilai B";
	}
	elseif ($nilaiTotal >=60 && $nilaiTotal<70) 
	{
		$hasil="Nama ".$nama." Mendapat nilai C";
	}
	elseif ($nilaiTotal >=50 && $nilaiTotal<60)
	{
		$hasil="Nama ".$nama." Mendapat nilai D";
	}
	elseif ($nilaiTotal <50 && $nilaiTotal>=0)
	{
		$hasil="Nama ".$nama." Mendapat nilai E";
	}
	return $hasil;
}

$nilaiTotal=nilaiAkhir($nltugas,$nluts,$nluas);
$nilaiHuruf=nilaiHuruf($nama,$nilaiTotal);

?>
<htmL>
<head>
	<title>NILAI MAHASISWA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row  justify-content-md-center">
	<div class="col-md-5"><br>
		<h5 class="text-success"><?= $nilaiTotal ?></h5>
		<h5 class="text-primary"><?= $nilaiHuruf ?></h5>
	</div>
</div>
</body>
</htmL>