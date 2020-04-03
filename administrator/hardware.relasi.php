<?php
$titlePage = "Hardware";
require_once 'tengah.nav.php';
include 'model/modal.php';?>
<div class="pages-on-frame">
  <div class="container">
    <div class="col-lg-col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4>Tambah Data Relasi Hardware</h4>
        </div>
        <div class="panel-body">
          <form method="post" action="control/hard.tambah?relasi">
            <div class="row">
                <div class="col-lg-2">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <label class="hrzn-fm">ID Relasi :</label>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2">
                  <div class="form-group">
                    <div class="nk-int-st">
                      <input readonly class="form-control" type="text" name="id" value="<?php echo autokode("relasi_gejala_hd", "REL-HD"); ?>">
                    </div>
                  </div>
                </div>
              </div>
          <div class="row">
            <div class="col-lg-2">
              <div class="form-group">
                <div class="nk-int-st">
                  <label class="hrzn-fm">Kerusakan :</label>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <select required class="form-control" name="kode_ks">
                  <option value="">--PILIH--</option>
                  <?php
                  $sql = "SELECT * FROM hd_kerusakan";
                  $mysql =mysql_query($sql);
                  while ($v = mysql_fetch_assoc($mysql)) {
                   ?>
                  <option value="<?php echo $v['id_kerusakan_hd'];?>">[<?php echo $v['id_kerusakan_hd'];?>]<?php echo $v['nama_kerusakan_hd'];  ?></option>
                <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <div class="form-group">
                <div class="nk-int-st">
                  <label class="hrzn-fm">Gejala/Solusi :</label>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <select required class="form-control" name="gejala/solusi">
                  <option value="">--PILIH--</option>
                  <option value="">===gejala===</option>
                  <?php
                  $sql = "SELECT * FROM hd_gejala";
                  $mysql =mysql_query($sql);
                  while ($v = mysql_fetch_assoc($mysql)) {
                   ?>
                  <option value="<?php echo $v['id_gejala_hd'];?>">[<?php echo $v['id_gejala_hd'];?>]<?php echo $v['nama_gejala_hd'];  ?></option>
                <?php } ?>
                <option value="">===solusi===</option>
                <?php
                $sql = "SELECT * FROM hd_solusi";
                $mysql =mysql_query($sql);
                while ($v = mysql_fetch_assoc($mysql)) {
                 ?>
                <option value="<?php echo $v['id_solusi_hd'];?>">[<?php echo $v['id_solusi_hd'];?>]<?php echo $v['nama_solusi_hd'];  ?></option>
              <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <div class="form-group">
                <div class="nk-int-st">
                  <label class="hrzn-fm">Jika YA :</label>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <select required class="form-control" name="jika_ya">
                  <option value="">--PILIH--</option>
                  <option value="0">Tidak Ada</option>
                  <option value="">===gejala===</option>
                  <?php
                  $sql = "SELECT * FROM hd_gejala";
                  $mysql =mysql_query($sql);
                  while ($v = mysql_fetch_assoc($mysql)) {
                   ?>
                  <option value="<?php echo $v['id_gejala_hd'];?>">[<?php echo $v['id_gejala_hd'];?>]<?php echo $v['nama_gejala_hd'];  ?></option>
                <?php } ?>
                <option value="">===solusi===</option>
                <?php
                $sql = "SELECT * FROM hd_solusi";
                $mysql =mysql_query($sql);
                while ($v = mysql_fetch_assoc($mysql)) {
                 ?>
                <option value="<?php echo $v['id_solusi_hd'];?>">[<?php echo $v['id_solusi_hd'];?>]<?php echo $v['nama_solusi_hd'];  ?></option>
              <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-2">
              <div class="form-group">
                <div class="nk-int-st">
                  <label class="hrzn-fm">Jika Tidak :</label>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="form-group">
                <select required class="form-control" name="jika_tidak">
                  <option value="">--PILIH--</option>
                  <option value="0">Tidak Ada</option>
                  <option value="">===gejala===</option>
                  <?php
                  $sql = "SELECT * FROM hd_gejala";
                  $mysql =mysql_query($sql);
                  while ($v = mysql_fetch_assoc($mysql)) {
                   ?>
                  <option value="<?php echo $v['id_gejala_hd'];?>">[<?php echo $v['id_gejala_hd'];?>]<?php echo $v['nama_gejala_hd'];  ?></option>
                <?php } ?>
                <option value="">===solusi===</option>
                <?php
                $sql = "SELECT * FROM hd_solusi";
                $mysql =mysql_query($sql);
                while ($v = mysql_fetch_assoc($mysql)) {
                 ?>
                <option value="<?php echo $v['id_solusi_hd'];?>">[<?php echo $v['id_solusi_hd'];?>]<?php echo $v['nama_solusi_hd'];  ?></option>
              <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-2">
              <div class="form-group">
                <div class="nk-int-st">
                  <label class="hrzn-fm">Mulai ? :</label>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <div class="toggle-select-act sm-res-mg-t-10">
                    <div class="nk-toggle-switch" data-ts-color="blue">
                        <label for="cekmulai" class="ts-label">Ya</label>
                        <input id="cekmulai" name="cekmulai" type="checkbox" hidden="hidden" value="Y">
                        <label for="cekmulai" class="ts-helper"></label>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <div class="toggle-select-act sm-res-mg-t-10">
                    <div class="nk-toggle-switch" data-ts-color="blue">
                        <label for="cekmulai2" class="ts-label">Tidak</label>
                        <input id="cekmulai2" name="cekmulai" type="checkbox" hidden="hidden" value="T">
                        <label for="cekmulai2" class="ts-helper"></label>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-2">
              <div class="form-group">
                <div class="nk-int-st">
                  <label class="hrzn-fm">Selesai ? :</label>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <div class="toggle-select-act sm-res-mg-t-10">
                    <div class="nk-toggle-switch" data-ts-color="blue">
                        <label for="cekselesai" class="ts-label">Ya</label>
                        <input id="cekselesai" name="cekselesai" type="checkbox" hidden="hidden" value="Y">
                        <label for="cekselesai" class="ts-helper"></label>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <div class="toggle-select-act sm-res-mg-t-10">
                    <div class="nk-toggle-switch" data-ts-color="blue">
                        <label for="cekselesai2" class="ts-label">Tidak</label>
                        <input id="cekselesai2" name="cekselesai" type="checkbox" hidden="hidden" value="T">
                        <label for="cekselesai2" class="ts-helper"></label>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <center>
          <div class="row">
            <div class="col-lg-2">
              <div class="form-group">
                <div class="nk-int-st">
                  <button type="reset" class="btn btn-danger" name="">Reset</button>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <div class="nk-int-st">
                  <input width="" type="submit" class="btn-primary btn-block" name="relasi" value="Tambahkan Relasi" style="font-size:20px;">
                </div>
              </div>
            </div>
          </div>
          <hr>
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
            <h4>Data Gejala Hardware</h4><hr>
          </div>
          <div class="row">
            <div class="col-lg-2"><p>Jika <i class="fas fa-arrow-right"></i>,maka relasi terhubung/dimulai</p></div>
            <div class="col-lg-2"><p>Jika <i class="fas fa-times"></i>,maka relasi selesai</p></div>
          </div>
          <div class="table-responsive">
          <?php include 'view/hd.relasi.view.php'; ?>
        </div>
        </div>
      </div>
    </div>

  </div>
</div>
<?php require_once './bawah.nav.php' ?>
