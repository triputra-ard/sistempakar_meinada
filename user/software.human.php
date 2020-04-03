<?php
$titlePage = "Software";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="container">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <?php
          $sql = "SELECT * FROM sf_kerusakan";
          $mysql = mysqli_query($db,$sql);
          while ($get = mysqli_fetch_assoc($mysql)) {
          ?>
          <div class="col-lg-12">
            <a href="software.diagnosa?software=<?php echo $get['id_kerusakan_sf'];?>"class=" btn btn-block btn-primary">
              <?php echo $get['nama_kerusakan_sf']; ?> </a><hr>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once 'bawah.nav.php';?>
