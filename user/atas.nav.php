<?php
$companyName = "SISTEM PAKAR - PENGGUNA ||";
$active = "user";
include '../include/atas.php';
session_start();
if (empty(@$_SESSION[id_user])) {
  echo '<script>alert("Kamu harus login dulu");
  window.location.href="login.php";</script>';
}
 ?>
<body class="unpam-bg-gradient">
  <!-- Start Header Top Area -->
  <nav class="navbar navbar-default navbar-fixed-top  bg-transparent-blue">
    <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
                      <div class="logo-area">
                          <h4><img src="../assets/img/ico_sistempakar.png" width="75px" height="75px" style="background-color:rgba(193, 191, 178, 0.59);"></h4>
                      </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                  <div class="logo-area">
                    <h2 class="text-gray-100 text-center" style="font-family:Segoe UI Light;">SISTEM PAKAR KERUSAKAN HANDPHONE</h2>
                  </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown on-navbar-center">
                                <center><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle text-gray-100 text-center">
                                  <span><center><img src="../assets/img/<?php if(@$_SESSION[jenis_kelamin_user] != 'perempuan') echo 'male.png'; else echo 'female.png'; ?>" alt="" height="45px" width="45px"></center><h5><?php echo @$_SESSION[nama_user]; ?></h5></span>
                                <div role="menu" class="dropdown-menu message-dd animated slideInRight">
                                    <div class="hd-mg-tt">
                                        <h2>SISTEM PAKAR KERUSAKAN HANDPHONE</h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="human.profil">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3><?php echo @$_SESSION[nama_user]; ?></h3>
                                                    <p>Ubah atau lihat profil anda</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" data-toggle="modal" data-target="#modalLogout">
                                            <div class="hd-message-sn">
                                                <div class="hd-message-img">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                </div>
                                                <div class="hd-mg-ctn">
                                                    <h3>Keluar</h3>
                                                    <p>Keluar dari akun anda</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                              </a>
                            </li>
                    </div>
                </div>
            </div>
        </div>
  </nav>
  <!-- End Header Top Area -->
