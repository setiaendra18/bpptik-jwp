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
          $nim=$_GET['nim'];
           $nama=$_GET['nama'];
          $sql = "SELECT nama_mk,nilai,nilai_huruf,sks,nim, matakuliah.kode_mk, transkip.bobot  FROM transkip JOIN matakuliah ON transkip.kode_mk=matakuliah.kode_mk WHERE nim='$nim'";
          $result = mysqli_query($conn, $sql);
          ?>
        <table class="table">
          <tr>
            <td width="150px">NIM</td><td><?= $nim ?></td></td>
          </tr>
        <tr>
            <td >NAMA MAHASISWA </td><td><?= $nama ?></td></td>
          </tr>
        </table>
         <table class="table table-striped">
          <th>No.</th>
          <th>NAMA MATA KULIAH</th>
          <th>SKS</th>
          <th>NILAI</th>
          <th>NILAI HURUF</th>
           <th>AKSI</th>
            <?php
              $no=1;
              $totalsks=0;
              $totalbobot=0;
              $totalbobot2=0;
              while($row = mysqli_fetch_assoc($result)) 
              {
            ?>
          <tr>
            <td><?= $no ?></td>
            <td><?= $row["nama_mk"] ?></td>
             <td><?= $row["sks"] ?></td>
            <td>
            <form action="update_nilai.php" method="post">
               <input type="text" class="form-control" value="<?= $row['nilai'] ?>" name="nilai" size="1">
               <input type="hidden" name="nim" value="<?= $row['nim'] ?>">
               <input type="hidden" name="kode_mk" value="<?= $row['kode_mk'] ?>">
             </td>
              
            <td><?= $row["nilai_huruf"] ?></td>
            <td><button type="submit" class="btn btn-success btn-xs">UPDATE</a>
            </form></td>
            </tr>
          <?php
            $totalbobot2+=$row["sks"]*$row["bobot"];
            $totalsks+=$row["sks"];
            $totalbobot+=$row["bobot"];
            $ipk=$totalbobot2/$totalsks;
            $no++;
            }
            echo "<tr><td></td><td><strong>TOTAL SKS</strong></td><td>".$totalsks."</td><td><strong>IPK</strong></td><td><strong>".number_format($ipk,2)."</strong></td></tr>";
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