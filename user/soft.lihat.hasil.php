<?php
$titlePage = "Software";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="container">
    <!--====-->
    <div class="col-lg-col-lg-12 col-md-12 col-sm-12 col-xs-1">
      <div class="panel panel-default">
        <div class="panel-heading animated slideInDown">
            <h1 class="text-center">HASIL DIAGNOSA</h1><br>
        </div>
        <?php if (isset($_GET['software'])) {
          $solusi = $_GET['software'];
          $sqlc = "SELECT kode_kerusakan_sf, gejala_solusi_sf, deskripsi_sf, nama_solusi_sf as hasil FROM relasi_gejala_sf
          LEFT JOIN sf_solusi ON relasi_gejala_sf.gejala_solusi_sf=sf_solusi.id_solusi_sf
          WHERE relasi_gejala_sf.gejala_solusi_sf='$solusi' ";
          $mysqlc = mysqli_query($db,$sqlc) or die (mysqli_error($db));
          $datac = mysqli_fetch_assoc($mysqlc);
        } ?>
        <div class="panel-body">
          <div class="row">
              <div class="col-lg-12">
                <div class="well well-lg animated flipInY">
                  <div class="alert-list">
                    <div class="alert alert-info">
                      <h3 class="text-center"><?php echo $datac['hasil']; ?></h3>
                      <h5 class="text-center"><?php echo $datac['deskripsi_sf']; ?></h5>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="panel-footer">
          <form method="post" action="control/human.tambah?software">
          <input hidden type="text" name="kerusakan" value="<?php echo $datac['kode_kerusakan_sf']; ?>">
          <input hidden type="text" name="solusi" value="<?php echo $datac['gejala_solusi_sf']; ?>">
          <input hidden type="text" name="tipe" value="Software">
          <input hidden type="text" name="id" value="<?php echo @$_SESSION[id_user];?>">
          <hr>
          <input class="btn-primary btn-block text-center" type="submit" name="software" value="Simpan diagnosa anda" style="font-size:30px">
        </form>
          <a href="home.php" class="btn btn-block btn-danger"><i class="fas fa-times"></i> Batal</a>
        </div>
      </div>
    </div>
    <!--====-->
  </div>
</div>
<?php require_once 'bawah.nav.php';?>
