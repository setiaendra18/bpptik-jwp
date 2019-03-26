<!DOCTYPE html>
<html>
<head>
	<title>TAMPIL NILAI MAHASISWA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script>
    function goBack() {
        window.history.back();
    }
</script>
</head>
<body>
</body>
<?php
include "koneksi.php";

$sql = "SELECT * FROM tbl_mahasiswa";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
?>
<div class="container">
  	<div class="row justify-content-md-center">
  		<div class="col-md-9 border border-primary shadow p-3 mb-5 bg-white rounded">
  		<br>
  			<h4>NILAI MAHASISWA</h4>
			<div class="table-responsive">
  			<table class="table">
			    <th>No.</th>
			    <th>Nama Mahasiswa</th>
			    <th>Nilai Tugas</th>
			    <th>Nilai UTS</th>
			    <th>Nilai UAS</th>
			    <th>Nilai Total</th>
			    <th>Nilai Akhir</th> 
				<?php
					$no=1;
					while($row = mysqli_fetch_assoc($result)) {
				?>
			  	<tr>
			  		<td><?= $no ?></td>
			  		<td><?= $row["nama"] ?></td>
			  		<td><?= $row["nltugas"] ?></td>
			  		<td><?= $row["nluts"] ?></td>
			  		<td><?= $row["nluas"] ?></td>
			  		<td><?= $row["nltotal"] ?></td>
			  		<td><?= $row["nilai"] ?></td>
			  	</tr>
			  	<?php
			  	$no++;
			  		}
				}
				mysqli_close($conn);

			  	?>
	 	 		</table>
	 	 		<button onclick="goBack()" class="btn btn-primary">KEMBALI</button>
  			</div>
  		</div>
  	</div>
</div>
</body>
</html>