<div class="modal animated bounceIn" id="delete<?php echo $r['id_diagnosa'];?>" role="dialog">
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
                <a href="control/human.hapus?human=<?php echo $r['id_diagnosa'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<!-- ==================================================================== -->
<div class="modal animated bounceIn" id="edit<?php echo $r['id_user'];?>" role="dialog">
    <div class="modal-dialog modals-default nk-indigo" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form class="" action="control/human.edit?human" method="post">
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> ID :</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input readonly class="form-control" type="text" name="id" value="<?php echo $r['id_user']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> Nama :</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input class="form-control" type="text" name="editnama" value="<?php echo $r['nama']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> Jenis kelamin :</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <select class="form-control" name="jenis_kelamin_edit">
                          <option value="<?php echo $r['jenis_kelamin'];?>"> <?php echo $r['jenis_kelamin'];?> </option>
                          <option value="">======</option>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> Nomor Telepon :</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input class="form-control" type="text" name="no_tlp_edit" value="<?php echo $r['no_tlp']; ?>" onkeypress="return OnlyNumber(event)">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> Email:</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input class="form-control" type="email" name="editemail" value="<?php echo $r['email']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> Alamat:</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <textarea name="alamat_edit"><?php echo $r['alamat']; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> Password :</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input class="form-control" type="text" name="editpass" value="<?php echo $r['password']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn-success" type="submit" name="human" value="UBAH" style="font-size:18px;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>
