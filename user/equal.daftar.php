<?php
$active = "register";
$titlePage = "DAFTAR";
$companyName = "SISTEM PAKAR - PENGGUNA ||";
include '../include/atas.php';
session_start();
?>
<body class="bg-sea-level">
  <div class="pages-on-frame-sm">
    <!--Section pages frame-->
    <div class="container">
      <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header nk-red">
              <h4 class="text-center text-gray-100">Oh ! Sepertinya username anda sudah digunakan</h4>
            </div>
            <div class="card-body">
              <form action="control/proses.daftarulang" method="post">
                <div class="form-group ic-cmp-int float-lb floating-lb">
                  <div class="form-ic-cmp">
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="nk-int-st">
                    <input hidden type="text" name="id" value="<?php echo @$_SESSION[id_temp];?>"><br>
                    <input required class="form-control" type="text" name="username_equal">
                    <label class="nk-label">Username</label>
                  </div>
                </div><hr>
                <center><input class="btn-primary btn-block" type="submit" name="daftarlagi" value="Masukkan lagi" style="font-size:20px"></center>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--Section pages frame-->
  </div>
<?php include '../include/bawah.php'; ?>
