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
          <h3 class="box-title">DATA MAHASISWA </h3>
        </div>
        <div class="box-body">
<?php

$sql = "SELECT kode_mk,nama_mk,sks FROM matakuliah";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
?>
         <table class="table table-striped">
          <th>No.</th>
          <th>KODE MK</th>
          <th>NAMA MATAKULIAH</th>
       <th>SKS</th>
           <th>AKSI</th> 
        <?php
          $no=1;
          while($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $row["kode_mk"] ?></td>
            <td><?= $row["nama_mk"] ?></td>
            <td><?= $row["sks"] ?></td>
              <td>
            <a href="matakuliah_edit.php?kode_mk=<?= $row['kode_mk']?>" class="btn btn-success btn-xs">EDIT</a>
            <a href="matakuliah_delete.php?kode_mk=<?= $row['kode_mk']?>" class="btn btn-danger  btn-xs">DELETE</a>
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
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">TAMBAH</button>

        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

 
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">TAMBAH MATA KULIAH </h4>
              </div>
              <div class="modal-body">
               <form method="post" action="matakuliah_tambah.php">
                   <div class="box-body">
                <div class="form-group">
                  <label >KODE MATA KULIAH</label>
                  <input type="text" class="form-control" name="kode_mk" required>
                </div>
                <div class="form-group">
                  <label>NAMA MATA KULIAH </label>
                  <input type="text" class="form-control" name="nama_mk" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">SKS</label>
                  <input type="number" class="form-control"  name="sks" required>
                </div>
              </div>
              <!-- /.box-body -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">KIRIM</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        <div class="modal fade" id="modal-edit">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">EDIT DATA MAHASISWA</h4>
              </div>
              <div class="modal-body">

                <?php
                    $nim=$_GET['nim'];
                echo "$nim";
                $sql = "SELECT * FROM mahasiswa WHERE nim=$nim";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);


                ?>
               <form method="post" action="mahasiswa_tambah.php">
                   <div class="box-body">
                <div class="form-group">
                  <label >NIM</label>
                  <input type="text" class="form-control" name="nim" required>
                </div>
                <div class="form-group">
                  <label>NAMA MAHASISWA</label>
                  <input type="text" class="form-control" name="nama" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">PASSWORD</label>
                  <input type="password" class="form-control"  name="password">
                </div>
              </div>
              <!-- /.box-body -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">KIRIM</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 
<!-- ./wrapper -->

<?php
require "footer.php";
?>