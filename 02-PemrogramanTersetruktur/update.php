<htmL>
<head>
	<title>FORM MAHASISWA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container margin">
	<br>
<div class="row justify-content-md-center">
	<div class="col-md-5 border border-primary shadow p-3 mb-5 bg-white rounded">
		<center><h5>FORM INPUT NILAI MAHASISWA</h5></center>
		<hr>
  <?php
include "koneksi.php";
$id_mahasiswa=$_GET['id_mahasiswa'];
$sql = "SELECT * FROM tbl_mahasiswa WHERE id_mahasiswa=$id_mahasiswa";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>

    <form action="proses_update.php" method="post">
      <input type="hidden" name="id_mahasiswa" value="<?= $row['id_mahasiswa'] ?>">
        <div class="form-group">
          <label for="nama"><strong>NAMA :</strong></label>
          <input type="text" class="form-control" id="nama" value="<?= $row['nama'] ?>" name="nama" required>
        </div>
        <div class="form-group">
          <label for="tugas"><strong>NILAI TUGAS :</strong></label>
          <input type="text" class="form-control" id="tugas" value="<?= $row['nltugas'] ?>" name="nltugas" required>
        </div>
        <div class="form-group">
          <label for="uts"><strong>NILAI UTS</strong></label>
          <input type="text" class="form-control" id="nnluts" value="<?= $row['nluts'] ?>" name="nluts" required>
        </div>
        <div class="form-group">
          <label for="uas"><strong>NILAI UAS</strong></label>
          <input type="text" class="form-control" id="nluas" value="<?= $row['nluas'] ?>" name="nluas" required>
        </div>
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <a href="form_input.php" class="btn btn-success">INPUT NILAI</a>
      <a href="tampil.php" class="btn btn-warning">LIHAT NILAI</a>
  </form>
       </div>
  </div>
</div>
</body>
</htmL>
