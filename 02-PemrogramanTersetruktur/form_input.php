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
    <form action="proses.php" method="post">
        <div class="form-group">
          <label for="nama"><strong>NAMA :</strong></label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
          <label for="tugas"><strong>NILAI TUGAS :</strong></label>
          <input type="text" class="form-control" id="tugas" name="nltugas" required>
        </div>
        <div class="form-group">
          <label for="uts"><strong>NILAI UTS</strong></label>
          <input type="text" class="form-control" id="nnluts" name="nluts" required>
        </div>
        <div class="form-group">
          <label for="uas"><strong>NILAI UAS</strong></label>
          <input type="text" class="form-control" id="nluas" name="nluas" required>
        </div>
        <button type="submit" class="btn btn-primary">KIRIM</button>
        <button type="reset" class="btn btn-danger">RESET</button>
        <a href="tampil.php" class="btn btn-warning">LIHAT NILAI</a>
  </form>
       </div>
  </div>
</div>
</body>
</htmL>
