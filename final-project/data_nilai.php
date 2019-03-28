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
          <h3 class="box-title">DATA NILAI MAHASISWA </h3>
        </div>
        <div class="box-body">
<?php

$sql = "SELECT nim,nama FROM mahasiswa";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
?>
         <table class="table table-striped">
          <th>No.</th>
          <th>NIM</th>
          <th>NAMA MAHASISWA</th>
       
           <th>AKSI</th> 
        <?php
          $no=1;
          while($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $row["nim"] ?></td>
            <td><?= $row["nama"] ?></td>
          
            <td>
            <a href="tampil_nilai.php?nim=<?= $row['nim']?>&nama=<?= $row['nama']?>" class="btn btn-primary btn-xs">TAMPIL</a>
            </td>
          </tr>
          <?php
          $no++;
            }
        }
        mysqli_close($conn);

          ?>
        </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
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