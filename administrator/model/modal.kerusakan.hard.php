<!-- ========================== Modal kerusakan ============================ -->
<div class="modal animated bounceIn" id="delete<?php echo $r['id_kerusakan_hd'];?>" role="dialog">
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
                <a href="control/hard.hapus?kerusakan=<?php echo $r['id_kerusakan_hd'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<div class="modal animated bounceIn" id="edit<?php echo $r['id_kerusakan_hd'];?>" role="dialog">
    <div class="modal-dialog modals-default nk-cyan" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form class="" action="control/hard.edit?kerusakan" method="post">
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> ID :</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input readonly class="form-control" type="text" name="id" value="<?php echo $r['id_kerusakan_hd']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> Nama Kerusakan:</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input class="form-control" type="text" name="editnama" value="<?php echo $r['nama_kerusakan_hd']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn-success" type="submit" name="kerusakan" value="UBAH" style="font-size:18px;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>
