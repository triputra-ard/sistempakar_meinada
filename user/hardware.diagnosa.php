<?php
$titlePage = "Hardware";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="container">

    <div class="col-lg-col-lg-12 col-md-12 col-sm-12 col-xs-1">
      <div class="panel panel-default animated bounceIn">
    <!--====-->
    <?php if (isset($_GET['hardware'])) {
      $get = $_GET['hardware'];
      $sql = "SELECT DISTINCT kode_kerusakan_hd, gejala_solusi_hd,
      kode_ya_hd, kode_tidak_hd, mulai_hd, selesai_hd, diagnosa from
      (
        SELECT rel.kode_kerusakan_hd, rel.gejala_solusi_hd, rel.kode_ya_hd,
        rel.kode_tidak_hd, rel.mulai_hd, rel.selesai_hd, gj.nama_gejala_hd as diagnosa
        from relasi_gejala_hd rel LEFT JOIN hd_gejala gj ON rel.gejala_solusi_hd = gj.id_gejala_hd
      )
      result
      where kode_kerusakan_hd = '$get' and mulai_hd = 'Y'";
      $mysql = mysqli_query($db,$sql) or die (mysqli_error($db));
      $data = mysqli_fetch_array($mysql);

      echo '<form>
            <div class="panel-heading animated bounceIn">
            <h4 class="text-center">Jawablah pertanyaan-pertanyaan dibawah ini</h4><br>';
      echo '<h2 class="text-center">"'.$data['diagnosa'].'"</h2>
            </div>';
      echo '<div class="panel-body">
              <div class="row">';
      echo '<div class="col-lg-6">
                <div class="well well-lg animated bounceIn">
                  <div class="alert-list">
                      <div class="alert alert-success">
                        <h3 class="text-center">Ya</h3><center>';
                    echo '<label class="text-center"><input type="radio" name="pertanyaan" value="'.$data['kode_ya_hd'].'"> Ya </label>';
      echo  '</center></div>
                    </div>
                  </div>
                </div>';
      echo '<div class="col-lg-6">
                <div class="well well-lg animated bounceIn">
                  <div class="alert-list">
                    <div class="alert alert-danger">
                      <h3 class="text-center">Tidak</h3><center>';
                    echo '<label class="text-center"><input type="radio" name="pertanyaan" value="'.$data['kode_tidak_hd'].'"> Tidak </label>';
      echo '</center></div>
                  </div>
                </div>
              </div>
            </div>
          </div>';

      echo '<div class="panel-footer">
              <input class="btn-primary btn-block text-center" type="submit" name="" value="Lanjut">
            </div>';
            echo '</form>
                  </div>
                  </div>';
      }else {
        $get = $_GET['pertanyaan'];
        $sql = "SELECT DISTINCT kode_kerusakan_hd, gejala_solusi_hd,
        kode_ya_hd, kode_tidak_hd, mulai_hd, selesai_hd, diagnosa from
        (
          SELECT rel.kode_kerusakan_hd, rel.gejala_solusi_hd, rel.kode_ya_hd,
          rel.kode_tidak_hd, rel.mulai_hd, rel.selesai_hd,gj.nama_gejala_hd as diagnosa
          from relasi_gejala_hd rel LEFT JOIN hd_gejala gj ON rel.gejala_solusi_hd = gj.id_gejala_hd
        )
        result
        where gejala_solusi_hd = '$get'";
      $mysql = mysqli_query($db,$sql) or die (mysqli_error($db));
      $data = mysqli_fetch_array($mysql);
      echo '<form>
            <div class="panel-heading animated bounceIn">
            <h4 class="text-center">Jawablah pertanyaan-pertanyaan dibawah ini</h4><br>';
      echo '<h2 class="text-center">"'.$data['diagnosa'].'"</h2>
              </div>';
        if ($data['selesai_hd']!="Y") {
        echo '<div class="panel-body">
                  <div class="row">';
        echo '<div class="col-lg-6">
              <div class="well well-lg animated bounceIn">
                <div class="alert-list">
                  <div class="alert alert-success">
                    <h3 class="text-center">Ya</h3><center>';
                echo '<label class="text-center"><input type="radio" name="pertanyaan" value="'.$data['kode_ya_hd'].'"> Ya </label>';
        echo  '</center></div>
                </div>
              </div>
            </div>';
        echo '<div class="col-lg-6">
                <div class="well well-lg animated bounceIn">
                  <div class="alert-list">
                    <div class="alert alert-danger">
                      <h3 class="text-center">Tidak</h3><center>';
                      echo '<label class="text-center"><input type="radio" name="pertanyaan" value="'.$data['kode_tidak_hd'].'"> Tidak </label>';
        echo '</center></div>
                  </div>
                </div>
              </div>
            </div>
          </div>';

        echo '<div class="panel-footer">
          <input class="btn-primary btn-block text-center" type="submit" name="" value="Lanjut">
              </div>';
        }else{
          if ($data['selesai_hd']!="N") {
            echo "<h3 class='text-center'>Klik lihat hasil untuk melihat hasil diagnosa anda</h3>";
            echo "<h3><a class='btn-primary btn-block text-center' href='hard.lihat.hasil?hardware=".$data['gejala_solusi_hd']."'>LIHAT HASIL <i class='far fa-hand-point-right'></i></a></h3>";
          }
        }
        echo '</form>
              </div>
              </div>';
      }?>
    <!--====-->
  </div>
</div>
<?php require_once 'bawah.nav.php'; ?>
