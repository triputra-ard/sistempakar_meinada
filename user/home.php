<?php
$titlePage = "Beranda";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="container">
    <!--====-->
    <div class="col-lg-col-lg-12 col-md-12 col-sm-12 col-xs-1">
      <div class="panel panel-default">
        <div class="panel-heading animated slideInDown">
            <h1 class="text-center">Halo ! Selamat Datang</h1><br>
            <h4 class="text-center">Silahkan pilih tipe kerusakan anda.</h4>
        </div>
        <div class="panel-body">
          <div class="row">
            <a href="software.human">
              <div class="col-lg-6">
                <div class="well well-lg animated slideInLeft">
                  <center>
                  <img src="../assets/img/ico_software.png" width="250px" height="250px"><br>
                </center>
                <h3 class="text-center">SOFTWARE</h3>
                </div>
              </div>
            </a>
            <a href="hardware.human">
            <div class="col-lg-6">
              <div class="well well-lg animated slideInRight">
                <center>
                <img src="../assets/img/ico_hardware.png" width="250px" height="250px"><br>
                </center>
                <h3 class="text-center">HARDWARE</h3>
              </div>
            </div>
          </a>
          </div>
        </div>
      </div>
    </div>
    <!--====-->
  </div>
</div>
<?php require_once 'bawah.nav.php';?>
