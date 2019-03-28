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
          <h3 class="box-title">EDIT DATA MAHASISWA</h3>
        </div>
        <div class="box-body">
<?php
include "config/db.php";
$nip=$_GET['nip'];

$sql = "SELECT * FROM pengurus WHERE nip='$nip'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


?>

    <form action="update_data_pengurus.php" method="post">
      <input type="hidden" name="nip" value="<?= $row['nip'] ?>" readOnly>
        <div class="form-group">
          <label for="nama"><strong>NAMA :</strong></label>
          <input type="text" readonly class="form-control" id="nama" value="<?= $row['nip'] ?>" name="nip" required>
        </div>

        <div class="form-group">
          <label for="nama"><strong>NAMA :</strong></label>
          <input type="text" class="form-control" id="nama" value="<?= $row['nama'] ?>" name="nama" required>
        </div>
     
      
        <div class="form-group">
          <label for="uas"><strong>PASSWORD</strong></label>
          <input type="password" class="form-control" id="nluas" value="<?= $row['password'] ?>" name="password" required>
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