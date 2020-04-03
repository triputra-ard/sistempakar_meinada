<?php
$titlePage = "Pengguna";
require_once 'tengah.nav.php';
include 'model/modal.php'; ?>
<div class="pages-on-frame">
  <div class="container">
    <div class="col-lg-12">
      <div class="panel panel-default">
        <div class="panel-body">
          <table id="data-table-basic" class="table table-striped table-hover table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Jenis kelamin</th>
                  <th>Email</th>
                  <th>No telepon</th>
                  <th>Alamat</th>
                  <th>Password</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $id = @$_SESSION[id_user];
                $sql = "SELECT * FROM user where id_user='$id'";
                $mysql = mysqli_query($db,$sql) ;
                while ($r = mysqli_fetch_assoc($mysql)) {
                 ?>
                 <tr>
                   <td><?php echo $r['id_user']; ?></td>
                   <td><a href="human.profil"><?php echo $r['username']; ?><a/></td>
                    <td><?php echo $r['nama']; ?></td>
                    <td><?php echo $r['jenis_kelamin']; ?></td>
                    <td><?php echo $r['email']; ?></td>
                   <td><?php echo $r['no_tlp']; ?></td>
                   <td><?php echo $r['alamat']; ?></td>
                   <td><?php echo $r['password']; ?></td>
                   <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $r['id_user'];?>"><i class="far fa-edit"></i> Edit</a> </td>
                 </tr>
                 <?php include 'model/modal.human.php'; ?>
               <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Jenis kelamin</th>
                  <th>Email</th>
                  <th>No telepon</th>
                  <th>Alamat</th>
                  <th>Password</th>
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
<?php require_once 'bawah.nav.php' ?>
