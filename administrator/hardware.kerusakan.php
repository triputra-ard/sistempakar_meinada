<?php
$titlePage = "Hardware";
require_once 'tengah.nav.php';
include 'model/modal.php';?>
<div class="pages-on-frame">
  <div class="container">
      <div class="col-lg-col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Tambah Data Kerusakan Hardware</h4>
          </div>
          <div class="panel-body">
            <form class="" action="control/hard.tambah?kerusakan" method="post">
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label class="hrzn-fm">ID Kerusakan :</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <input readonly class="form-control" type="text" name="id" value="<?php echo autokode("hd_kerusakan", "K-HD"); ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label class="hrzn-fm">Nama Kerusakan :</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <input required class="form-control" type="text" name="nama_ks" placeholder="Masukkan Nama Kerusakan">
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <center>
              <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <button type="reset" class="btn btn-danger" name="">Reset</button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <input type="submit" class="btn-primary btn-block" name="tambahks" value="Tambahkan" style="font-size:20px;">
                    </div>
                  </div>
                </div>
              </div>
            </center>
            </form>
          </div>
        </div>
      </div>
      <hr>
      <div class="data-table-area">
        <div class="col-lg-col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="data-table-list">
            <div class="basic-tb-hd">
              <h4>Data Kerusakan Hardware</h4><hr>
            </div>
            <div class="table-responsive">
            <?php include 'view/hd.kerusakan.view.php'; ?>
          </div>
          </div>
        </div>

      </div>


  </div>
</div>
<?php require_once './bawah.nav.php' ?>
