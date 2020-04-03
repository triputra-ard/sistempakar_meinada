<!-- ============================= Modal solusi ========================= -->
<div class="modal animated bounceIn" id="delete<?php echo $r['id_solusi_hd'];?>" role="dialog">
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
                <a href="control/hard.hapus?solusi=<?php echo $r['id_solusi_hd'];?>" class="btn btn-default">Ya</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<div class="modal animated bounceIn" id="edit<?php echo $r['id_solusi_hd'];?>" role="dialog">
    <div class="modal-dialog modals-default nk-cyan" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form class="" action="control/hard.edit?solusi" method="post">
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> ID :</label>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input readonly class="form-control" type="text" name="id" value="<?php echo $r['id_solusi_hd']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> Nama Solusi:</label>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <input height="20px" class="form-control" type="text" name="editnama" value="<?php echo $r['nama_solusi_hd']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label class="hrzn-fm text-gray-100"> Deskripsi:</label>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <div class="nk-int-st">
                        <textarea type="text" name="deskripsi_edit" value=""> <?php echo $r['deskripsi_hd']; ?></textarea>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn-success" type="submit" name="solusi" value="UBAH" style="font-size:18px;">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
            </form>
        </div>
    </div>
</div>
