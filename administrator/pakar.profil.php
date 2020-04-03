<?php
$titlePage = "Pakar";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="container">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-header nk-cyan">
          <h3 class="text-center">Detail tentang anda</h3>
        </div>
        <div class="panel-body">
          <table class="table table-striped">
            <tbody>
              <tr>
                <td><?php if(empty(@$_SESSION[id_admin])) echo '<i class="fas fa-brain"></i>';
                else echo '<img src="../assets/img/Aboutico.png" height="75px" width="75px" alt="">'; ?></td>
                <td>Nama : <h3><?php echo @$_SESSION[nama_admin]; ?></h3></td>
                <td>Username :<h3><?php echo @$_SESSION[username_admin]; ?></h3></td>
                <td>Password :<h3><?php echo @$_SESSION[password_admin]; ?></h3></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once 'bawah.nav.php' ?>
