<?php
$titlePage = "Software";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="container">

    <div class="col-lg-col-lg-12 col-md-12 col-sm-12 col-xs-1">
      <div class="panel panel-default animated bounceIn">
    <!--====-->
    <?php if (isset($_GET['software'])) {
      $get = $_GET['software'];
      $sql = "SELECT DISTINCT kode_kerusakan_sf, gejala_solusi_sf,
      kode_ya_sf, kode_tidak_sf, mulai_sf, selesai_sf, diagnosa from
      (
        SELECT rel.kode_kerusakan_sf, rel.gejala_solusi_sf, rel.kode_ya_sf,
        rel.kode_tidak_sf, rel.mulai_sf, rel.selesai_sf, gj.nama_gejala_sf as diagnosa
        from relasi_gejala_sf rel LEFT JOIN sf_gejala gj ON rel.gejala_solusi_sf = gj.id_gejala_sf
      )
      result
      where kode_kerusakan_sf = '$get' and mulai_sf = 'Y'";
      $mysql = mysqli_query($db,$sql) or die (mysqli_error($db)) ;
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
                    echo '<label class="text-center"><input type="radio" name="pertanyaan" value="'.$data['kode_ya_sf'].'"> Ya </label>';
      echo  '</center></div>
                    </div>
                  </div>
                </div>';
      echo '<div class="col-lg-6">
                <div class="well well-lg animated bounceIn">
                  <div class="alert-list">
                    <div class="alert alert-danger">
                      <h3 class="text-center">Tidak</h3><center>';
                    echo '<label class="text-center"><input type="radio" name="pertanyaan" value="'.$data['kode_tidak_sf'].'"> Tidak </label>';
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
        $sql = "SELECT DISTINCT kode_kerusakan_sf, gejala_solusi_sf,
        kode_ya_sf, kode_tidak_sf, mulai_sf, selesai_sf, diagnosa from
        (
          SELECT rel.kode_kerusakan_sf, rel.gejala_solusi_sf, rel.kode_ya_sf,
          rel.kode_tidak_sf, rel.mulai_sf, rel.selesai_sf,gj.nama_gejala_sf as diagnosa
          from relasi_gejala_sf rel LEFT JOIN sf_gejala gj ON rel.gejala_solusi_sf = gj.id_gejala_sf
        )
        result
        where gejala_solusi_sf = '$get'";
      $mysql = mysqli_query($db,$sql) or die (mysqli_error($db)) ;
      $data = mysqli_fetch_array($mysql);
      echo '<form>
            <div class="panel-heading animated bounceIn">
            <h4 class="text-center">Jawablah pertanyaan-pertanyaan dibawah ini</h4><br>';
      echo '<h2 class="text-center">"'.$data['diagnosa'].'"</h2>
              </div>';
        if ($data['selesai_sf']!="Y") {
        echo '<div class="panel-body">
                  <div class="row">';
        echo '<div class="col-lg-6">
              <div class="well well-lg animated bounceIn">
                <div class="alert-list">
                  <div class="alert alert-success">
                    <h3 class="text-center">Ya</h3><center>';
                echo '<label class="text-center"><input type="radio" name="pertanyaan" value="'.$data['kode_ya_sf'].'"> Ya </label>';
        echo  '</center></div>
                </div>
              </div>
            </div>';
        echo '<div class="col-lg-6">
                <div class="well well-lg animated bounceIn">
                  <div class="alert-list">
                    <div class="alert alert-danger">
                      <h3 class="text-center">Tidak</h3><center>';
                      echo '<label class="text-center"><input type="radio" name="pertanyaan" value="'.$data['kode_tidak_sf'].'"> Tidak </label>';
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
          if ($data['selesai_sf']!="N") {
            echo "<h3 class='text-center'>Klik lihat hasil untuk melihat hasil diagnosa anda</h3>";
            echo "<h3><a class='btn-primary btn-block text-center' href='soft.lihat.hasil?software=".$data['gejala_solusi_sf']."'>LIHAT HASIL <i class='far fa-hand-point-right'></i></a></h3>";
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
