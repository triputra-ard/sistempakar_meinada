<?php
$titlePage = "User";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="container">
    <div class="col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="data-table-area">
            <div class="col-lg-col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="data-table-list">
                <div class="basic-tb-hd">
                  <h4>Data Pengguna</h4><hr>
                </div>
                <div class="table-responsive">
                <table id="data-table-basic" class="table table-striped table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Nama Pengguna</th>
                        <th>Jenis kelamin</th>
                        <th>Email</th>
                        <th>No telepon</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Waktu Daftar</th>
                        <th>Tindakan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $nomor = 1;
                      $sql = "SELECT * FROM user";
                      $mysql = mysql_query($sql);
                      while ($r = mysql_fetch_assoc($mysql)) {
                       ?>
                       <tr>
                         <td><?php echo $nomor++ ?> </td>
                         <td><?php echo $r['id_user']; ?></td>
                         <td><?php echo $r['nama']; ?></td>
                         <td><?php echo $r['jenis_kelamin']; ?></td>
                         <td><?php echo $r['email']; ?></td>
                         <td><?php echo $r['no_tlp']; ?></td>
                         <td><?php echo $r['alamat']; ?></td>
                         <td><?php echo $r['username']; ?></td>
                         <td><?php echo $r['password']; ?></td>
                         <td><?php echo $r['waktu_masuk']; ?></td>
                         <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $r['id_user'];?>">
                        <i class="far fa-trash-alt"></i> Hapus</a></td>
                       </tr>
                       <?php include 'model/modal.human.php'; ?>
                     <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Nama Pengguna</th>
                        <th>Jenis kelamin</th>
                        <th>Email</th>
                        <th>No telepon</th>
                        <th>Alamat</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Waktu Daftar</th>
                        <th>Tindakan</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once 'bawah.nav.php' ?>
