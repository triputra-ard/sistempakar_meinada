<?php
$titlePage = "Hardware";
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
        <?php if (isset($_GET['hardware'])) {
          $solusi = $_GET['hardware'];
          $sqlc = "SELECT kode_kerusakan_hd, gejala_solusi_hd,deskripsi_hd, nama_solusi_hd as hasil FROM relasi_gejala_hd
          LEFT JOIN hd_solusi ON relasi_gejala_hd.gejala_solusi_hd=hd_solusi.id_solusi_hd
          WHERE relasi_gejala_hd.gejala_solusi_hd='$solusi' ";
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
                      <h4 class="text-center"><?php echo $datac['deskripsi_hd']; ?></h4>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="panel-footer">
          <form method="post" action="control/human.tambah?hardware">
          <input hidden type="text" name="kerusakan" value="<?php echo $datac['kode_kerusakan_hd']; ?>">
          <input hidden type="text" name="solusi" value="<?php echo $datac['gejala_solusi_hd']; ?>">
          <input hidden type="text" name="tipe" value="Hardware">
          <input hidden type="text" name="id" value="<?php echo @$_SESSION[id_user];?>">
          <hr>
          <input class="btn-primary btn-block text-center" type="submit" name="hardware" value="Simpan diagnosa anda" style="font-size:30px">
        </form>
          <a href="home.php" class="btn btn-block btn-danger"><i class="fas fa-times"></i> Batal</a>
        </div>
      </div>
    </div>
    <!--====-->
  </div>
</div>
<?php require_once 'bawah.nav.php';?>
