<?php
include ('../../include/koneksi.db.php');
if (isset($_POST['admin'])) {
  $id = $_POST['id'];
  $nama = $_POST['editnama'];
  $user = $_POST['edituser'];
  $pass = $_POST['editpass'];

  $sql = "UPDATE admin SET nama = '$nama', username='$user', password = '$pass' Where id_admin = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../pakar.pengaturan.php');
}
 ?>
