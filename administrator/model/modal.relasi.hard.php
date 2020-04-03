<!-- =================== Modal relasi ============================ -->
<div class="modal animated bounceIn" id="delete<?php echo $rel['id_relasi_hd'];?>" role="dialog">
    <div class="modal-dialog modals-default nk-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Yakin ingin dihapus ?</h2>
                <p>Jika dihapus data tidak bisa diurungkan kembali</p>
            </div>
            <div class="modal-footer">
                <a href="control/hard.hapus?relasi=<?php echo $rel['id_relasi_hd'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<div class="modal animated bounceIn" id="edit<?php echo $rel['id_relasi_hd'];?>" role="dialog">
    <div class="modal-dialog modals-default nk-cyan" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form class="" action="control/hard.edit?relasi" method="post">
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> ID :</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input readonly class="form-control" type="text" name="id" value="<?php echo $rel['id_relasi_hd']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <label class="hrzn-fm text-gray-100">Kerusakan :</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="form-group">
                      <select required class="form-control" name="edit_ks">
                        <option value="<?php echo $rel['kode_kerusakan_hd']; ?>">[<?php echo $rel['kode_kerusakan_hd']; ?>] Kode sebelumnya</option>
                        <?php
                        $sqlv = "SELECT * FROM hd_kerusakan";
                        $mysqlv =mysql_query($sqlv);
                        while ($v = mysql_fetch_assoc($mysqlv)) {
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
                        <label class="hrzn-fm text-gray-100">Gejala/Solusi :</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="form-group">
                      <select required class="form-control" name="edit_gejala/solusi">
                        <option value="<?php echo $rel['gejala_solusi_hd']; ?>">[<?php echo $rel['gejala_solusi_hd']; ?>] Kode sebelumnya</option>
                        <option value="">===gejala==</option>
                        <?php
                        $sqlv = "SELECT * FROM hd_gejala";
                        $mysqlv =mysql_query($sqlv);
                        while ($v = mysql_fetch_assoc($mysqlv)) {
                         ?>
                        <option value="<?php echo $v['id_gejala_hd'];?>">[<?php echo $v['id_gejala_hd'];?>]<?php echo $v['nama_gejala_hd'];  ?></option>
                      <?php } ?>
                      <option value="">===solusi==</option>
                      <?php
                      $sqlv = "SELECT * FROM hd_solusi";
                      $mysqlv =mysql_query($sqlv);
                      while ($v = mysql_fetch_assoc($mysqlv)) {
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
                        <label class="hrzn-fm text-gray-100">Jika YA :</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="form-group">
                      <select required class="form-control" name="edit_ya">
                        <option value="<?php echo $rel['kode_ya_hd']; ?>">[<?php echo $rel['kode_ya_hd']; ?>] Kode sebelumnya</option>
                        <option value="0">Tidak Ada</option>
                        <option value="">===gejala==</option>
                        <?php
                        $sqlv = "SELECT * FROM hd_gejala";
                        $mysqlv =mysql_query($sqlv);
                        while ($v = mysql_fetch_assoc($mysqlv)) {
                         ?>
                        <option value="<?php echo $v['id_gejala_hd'];?>">[<?php echo $v['id_gejala_hd'];?>]<?php echo $v['nama_gejala_hd'];  ?></option>
                      <?php } ?>
                      <option value="">===solusi==</option>
                      <?php
                      $sqlv = "SELECT * FROM hd_solusi";
                      $mysqlv =mysql_query($sqlv);
                      while ($v = mysql_fetch_assoc($mysqlv)) {
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
                        <label class="hrzn-fm text-gray-100">Jika Tidak :</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="form-group">
                      <select required class="form-control" name="edit_tidak">
                        <option value="<?php echo $rel['kode_tidak_hd']; ?>">[<?php echo $rel['kode_tidak_hd']; ?>] Kode sebelumnya</option>
                        <option value="0">Tidak Ada</option>
                        <option value="">===gejala==</option>
                        <?php
                        $sqlv = "SELECT * FROM hd_gejala";
                        $mysqlv =mysql_query($sqlv);
                        while ($v = mysql_fetch_assoc($mysqlv)) {
                         ?>
                        <option value="<?php echo $v['id_gejala_hd'];?>">[<?php echo $v['id_gejala_hd'];?>]<?php echo $v['nama_gejala_hd'];  ?></option>
                      <?php } ?>
                      <option value="">===solusi==</option>
                      <?php
                      $sqlv = "SELECT * FROM hd_solusi";
                      $mysqlv =mysql_query($sqlv);
                      while ($v = mysql_fetch_assoc($mysqlv)) {
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
                        <label class="hrzn-fm text-gray-100">Mulai ? :</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="toggle-select-act sm-res-mg-t-10">
                          <div class="nk-toggle-switch" data-ts-color="amber">
                              <label for="editmulai<?php echo $rel['id_relasi_hd'];?>" class="ts-label text-gray-100">Ya</label>
                              <input <?php if($rel['mulai_hd']=="Y") echo 'checked'; ?> id="editmulai<?php echo $rel['id_relasi_hd'];?>" name="editmulai" type="checkbox" hidden="hidden" value="Y">
                              <label for="editmulai<?php echo $rel['id_relasi_hd'];?>" class="ts-helper"></label>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="toggle-select-act sm-res-mg-t-10">
                          <div class="nk-toggle-switch" data-ts-color="amber">
                              <label for="editmulai2<?php echo $rel['id_relasi_hd'];?>" class="ts-label text-gray-100">Tidak</label>
                              <input <?php if($rel['mulai_hd']!="Y") echo 'checked'; ?> id="editmulai2<?php echo $rel['id_relasi_hd'];?>" name="editmulai" type="checkbox" hidden="hidden" value="T">
                              <label for="editmulai2<?php echo $rel['id_relasi_hd'];?>" class="ts-helper"></label>
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
                        <label class="hrzn-fm text-gray-100">Selesai ? :</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="toggle-select-act sm-res-mg-t-10">
                          <div class="nk-toggle-switch" data-ts-color="amber">
                              <label for="editselesai<?php echo $rel['id_relasi_hd'];?>" class="ts-label text-gray-100">Ya</label>
                              <input <?php if($rel['selesai_hd']=="Y") echo 'checked'; ?> id="editselesai<?php echo $rel['id_relasi_hd'];?>" name="editselesai" type="checkbox" hidden="hidden" value="Y">
                              <label for="editselesai<?php echo $rel['id_relasi_hd'];?>" class="ts-helper"></label>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="toggle-select-act sm-res-mg-t-10">
                          <div class="nk-toggle-switch" data-ts-color="amber">
                              <label for="editselesai2<?php echo $rel['id_relasi_hd'];?>" class="ts-label text-gray-100">Tidak</label>
                              <input <?php if($rel['selesai_hd']!="Y") echo 'checked'; ?> id="editselesai2<?php echo $rel['id_relasi_hd'];?>" name="editselesai" type="checkbox" hidden="hidden" value="T">
                              <label for="editselesai2<?php echo $rel['id_relasi_hd'];?>" class="ts-helper"></label>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn-success" type="submit" name="relasi" value="UBAH" style="font-size:18px;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>
