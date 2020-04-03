<?php
$titlePage = "Hardware";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="container">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <?php
          $sql = "SELECT * FROM hd_kerusakan";
          $mysql = mysqli_query($db,$sql) ;
          while ($get = mysqli_fetch_assoc($mysql)) {
          ?>
          <div class="col-lg-12">
            <a href="hardware.diagnosa?hardware=<?php echo $get['id_kerusakan_hd'];?>"class=" btn btn-block btn-primary">
              <?php echo $get['nama_kerusakan_hd']; ?> </a><hr>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once 'bawah.nav.php';?>
