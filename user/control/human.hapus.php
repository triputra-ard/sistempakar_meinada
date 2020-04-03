<?php
include '../../include/koneksi.db.php';
if (isset($_GET['human'])) {
  $id = $_GET['human'];

  $sql = "DELETE FROM riwayat_diagnosa where id_diagnosa = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../human.history');
}
 ?>
