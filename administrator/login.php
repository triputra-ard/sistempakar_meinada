<?php
$companyName = "SISTEM PAKAR - PAKAR ||";
$titlePage = "Login";
$active = "login_pakar";
include '../include/atas.php';?>
<body class="bg-sea-level">

  <div class="pages-on-frame-login">
    <!--Section pages frame-->
    <div class="container">

      <center>
      <div class="panel transparent-total">
        <div class="panel-body">
            <div class="col-lg-4"></div>
            <div class="col-lg-3">
              <div class="form-example-wrap animated flip">
                <img src="../assets/img/ico_sistempakar.png" height="240px" width="240px">
              </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
      </div>
      <div class="panel transparent-total">
        <div class="panel-body">
            <div class="col-lg-4"></div>
            <div class="col-lg-3">
                <div class="form-example-wrap animated flip">
                  <div class="cmp-tb-hd cmp-int-hd">
                    <center><h2>Login Pakar</h2></center>
                  </div>
                    <form action="control/login.db" method="post">
                      <div class="form-group ic-cmp-int float-lb floating-lb">
                        <div class="form-ic-cmp">
                          <h3><i class="fas fa-brain"></i></h3>
                        </div>
                        <div class="nk-int-st">
                          <input required class="form-control" type="text" name="username">
                          <label class="nk-label">Username</label>
                        </div>
                      </div>
                      <div class="form-group ic-cmp-int float-lb floating-lb">
                        <div class="form-ic-cmp">
                          <h3><i class="fas fa-key"></i></h3>
                        </div>
                        <div class="nk-int-st">
                          <input required class="form-control" type="password" name="password">
                          <label class="nk-label">Password</label>
                        </div>
                      </div>
                      <hr>
                      <input class="btn-block btn-success" type="submit" name="masuk" value="Masuk" style="font-size:18px">
                          <br>
                        <center><a href="../home" class="btn btn-danger">&times; Kembali </a></center>
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
      </div>
      </center>
      <br>
    </div>
    <!--Section pages frame-->
  </div>

<?php include '../include/bawah.php'; ?>
