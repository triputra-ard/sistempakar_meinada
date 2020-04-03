<?php
$titlePage = "Pengguna";
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
                <td colspan="4"><center><img src="../assets/img/<?php if(@$_SESSION[jenis_kelamin_user] != 'perempuan') echo 'male.png'; else echo 'female.png'; ?>" alt="" height="250px" width="250px"></center></td>
              </tr>
              <tr>
                <td>Nama : <h3><?php echo @$_SESSION[nama_user]; ?></h3></td>
                <td>Jenis Kelamin : <h3><?php echo @$_SESSION[jenis_kelamin_user];?></h3></td>
                <td>Nomor telepon : <h3><?php echo @$_SESSION[no_tlp_user]; ?></h3></td>
                <td>Email : <h3><?php echo @$_SESSION[email_user]; ?></h3> </td>
              </tr>
              <tr>
                <td>Alamat : <p><?php echo @$_SESSION[alamat_user]; ?></p></td>
              </tr>
              <tr>
                <td>Username :<h3><?php echo @$_SESSION[username_user]; ?></h3></td>
                <td>Password :<h3><?php echo @$_SESSION[password_user]; ?></h3></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once 'bawah.nav.php' ?>
