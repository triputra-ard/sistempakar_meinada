<?php
$titlePage = "Riwayat";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="data-table-area">
    <div class="col-lg-col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="data-table-list">
        <div class="basic-tb-hd">
          <h4>Riwayat diagnosa <?php echo @$_SESSION[nama_user]; ?></h4><hr>
        </div>
        <div class="table-responsive">
        <?php include 'view/human.history.view.php'; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once 'bawah.nav.php'; ?>
