<?php
$active = "register";
$titlePage = "DAFTAR";
$companyName = "SISTEM PAKAR - PENGGUNA ||";
include '../include/atas.php';
?>
<body class="bg-sea-level">
  <div class="pages-on-frame-sm">
    <!--Section pages frame-->
    <div class="container">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4 class="text-center">DAFTAR</h4>
            </div>
            <div class="card-body">
              <form class="" action="control/proses.daftar" method="post">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                  <input type="text" name="id" value="<?php echo autokode("user", "USR-"); ?>" hidden>
                  <div class="form-ic-cmp">
                    <i class="fas fa-address-card"></i>
                  </div>
                  <div class="nk-int-st">
                    <input class="form-control" type="text" name="nama">
                    <label class="nk-label">Nama Lengkap</label>
                  </div>
                </div>
                <div class="form-group ic-cmp-int float-lb floating-lb">
                  <div class="form-ic-cmp">
                    <i class="fas fa-mars"></i>

                  </div>
                  <div class="nk-int-st">
                    <label class="nk-label">Jenis Kelamin</label>
                    <div class="form-group">
                      <select class="form-control" name="jenis_kelamin">
                        <option value="">-Pilih-</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group ic-cmp-int float-lb floating-lb">
                  <div class="form-ic-cmp">
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="nk-int-st">
                    <input required class="form-control" type="text" name="username">
                    <label class="nk-label">Username</label>
                  </div>
                </div><hr>
                <div class="form-group ic-cmp-int float-lb floating-lb">
                  <div class="form-ic-cmp">
                    <i class="fas fa-at"></i>
                  </div>
                  <div class="nk-int-st">
                    <input required class="form-control" type="email" name="email">
                    <label class="nk-label">Email</label>
                  </div>
                </div>
                <div class="form-group ic-cmp-int float-lb floating-lb">
                  <div class="form-ic-cmp">
                    <i class="fas fa-phone"></i>
                  </div>
                  <div class="nk-int-st">
                    <input required class="form-control" type="text" name="no_telepon" onkeypress="return OnlyNumber(event)">
                    <label class="nk-label">Nomor Telepon</label>
                  </div>
                </div>
                <div class="form-group ic-cmp-int">
                  <div class="form-ic-cmp">
                    <i class="fas fa-address-card"></i>

                  </div>
                  <div class="form-group">
                    <label class="nk-label">Alamat</label>
                    <div class="nk-int-st">
                      <textarea placeholder="Tambahkan Alamat" name="alamat" rows="2"></textarea>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group ic-cmp-int float-lb floating-lb">
                  <div class="form-ic-cmp">
                    <i class="fas fa-lock"></i>
                  </div>
                  <div class="nk-int-st">
                    <input required class="form-control" type="password" name="password" id="password" onchange="validation()">
                    <label class="nk-label">Password</label>
                  </div>
                </div>
                <div class="form-group ic-cmp-int float-lb floating-lb">
                  <div class="form-ic-cmp">
                    <i class="fas fa-key"></i>
                  </div>
                  <div class="nk-int-st">
                    <input class="form-control" type="password" name="repeatpassword" id="repeatpassword" onchange="validation()">
                    <label class="nk-label">Ulangi Password</label>
                  </div>
                </div><hr>
                <center><input class="btn-primary btn-block" type="submit" name="daftar" value="Daftar" style="font-size:20px"></center>
              </form>
            </div>
            <div class="card-footer">
              <center><a href="../home.php" class="btn btn-danger text-lg">&times; Kembali ke beranda</a></center>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--Section pages frame-->
  </div>
<?php include '../include/bawah.php'; ?>
