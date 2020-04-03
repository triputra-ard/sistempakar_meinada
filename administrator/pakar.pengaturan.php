<?php
$titlePage = "Pakar";
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
                  <th>ID Pakar</th>
                  <th>Username</th>
                  <th>Nama</th>
                  <th>Password</th>
                  <th>Tindakan</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "SELECT * FROM admin";
                $mysql = mysqli_query($db,$sql);
                while ($r = mysqli_fetch_assoc($mysql)) {
                 ?>
                 <tr>
                   <td><?php echo $r['id_admin']; ?></td>
                   <td><a href="pakar.profil"><?php echo $r['username']; ?><a/></td>
                   <td><?php echo $r['nama']; ?></td>
                   <td><?php echo $r['password']; ?></td>
                   <td><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $r['id_admin'];?>"><i class="far fa-edit"></i> Edit</a> </td>
                 </tr>
                 <?php include 'model/modal.human.php'; ?>
               <?php } ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>ID Pakar</th>
                  <th>Username</th>
                  <th>Nama</th>
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
