<?php
include '../../include/koneksi.db.php';
if (isset($_GET['kerusakan'])) {
  $id = $_GET['kerusakan'];

  $sql = "DELETE FROM hd_kerusakan where id_kerusakan_hd = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../hardware.kerusakan');
}elseif (isset($_GET['gejala'])) {
  $id = $_GET['gejala'];

  $sql = "DELETE FROM hd_gejala where id_gejala_hd = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../hardware.gejala');
}elseif (isset($_GET['solusi'])) {
  $id = $_GET['solusi'];

  $sql = "DELETE FROM hd_solusi where id_solusi_hd = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../hardware.solusi');
}elseif (isset($_GET['relasi'])) {
  $id = $_GET['relasi'];

  $sql = "DELETE FROM relasi_gejala_hd where id_relasi_hd = '$id'";
  $mysql = mysql_query($sql)or die (mysql_error());

  header('location:../hardware.relasi');
}

 ?>
