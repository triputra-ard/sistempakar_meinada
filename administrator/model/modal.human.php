<div class="modal animated bounceIn" id="delete<?php echo $r['id_user'];?>" role="dialog">
    <div class="modal-dialog modals-default nk-red" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h2>Yakin ingin dihapus ? Detail data : <?php echo $r['nama'];?>, <?php echo $r['email'];?>
                .Waktu pendaftaran : <?php echo $r['waktu_masuk']; ?></h2>
                <p>Jika dihapus data tidak bisa diurungkan kembali dan <?php echo $r['nama']; ?> tidak bisa login lagi.</p>
            </div>
            <div class="modal-footer">
                <a href="control/human.hapus?user=<?php echo $r['id_user'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<!-- ==================================================================== -->
<div class="modal animated bounceIn" id="edit<?php echo $r['id_admin'];?>" role="dialog">
    <div class="modal-dialog modals-default nk-cyan" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form class="" action="control/human.edit?admin" method="post">
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> ID :</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input readonly class="form-control" type="text" name="id" value="<?php echo $r['id_admin']; ?>">
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
                    <label class="hrzn-fm text-gray-100"> Username:</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input class="form-control" type="text" name="edituser" value="<?php echo $r['username']; ?>">
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
                <input class="btn-success" type="submit" name="admin" value="UBAH" style="font-size:18px;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>
