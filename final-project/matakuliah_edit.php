<?php
require "header.php";
require "sidebar.php";

include "config/db.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
   
    <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">EDIT DATA MATAKULIAH</h3>
        </div>
        <div class="box-body">
<?php
include "config/db.php";
$kode_mk=$_GET['kode_mk'];

$sql = "SELECT * FROM matakuliah WHERE kode_mk='$kode_mk'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>

    <form action="update_data_matakuliah.php" method="post">
      <input type="hidden" name="kode_mk" value="<?= $row['kode_mk'] ?>" readOnly>
        <div class="form-group">
          <label for="nama"><strong>NAMA :</strong></label>
          <input type="text" readonly class="form-control" id="nama" value="<?= $row['kode_mk'] ?>" name="kode_mk" required>
        </div>

        <div class="form-group">
          <label for="nama"><strong>NAMA :</strong></label>
          <input type="text" class="form-control" id="nama" value="<?= $row['nama_mk'] ?>" name="nama_mk" required>
        </div>
     
      
        <div class="form-group">
          <label for="uas"><strong>PASSWORD</strong></label>
          <input type="sks" class="form-control" id="nluas" value="<?= $row['sks'] ?>" name="sks" required>
        </div>
      
   
  
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-success">UPDATE</button>
        </div>
        <!-- /.box-footer-->
        </form>
      </div>
      <!-- /.box -->


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 
<!-- ./wrapper -->

<?php
require "footer.php";
?>