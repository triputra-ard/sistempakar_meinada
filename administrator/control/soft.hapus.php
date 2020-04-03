<?php
include ('../../include/koneksi.db.php');
if (isset($_GET['kerusakan'])) {
  $id = $_GET['kerusakan'];

  $sql = "DELETE FROM sf_kerusakan where id_kerusakan_sf = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../software.kerusakan.php');
}elseif (isset($_GET['gejala'])) {
  $id = $_GET['gejala'];

  $sql = "DELETE FROM sf_gejala where id_gejala_sf = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../software.gejala.php');
}elseif (isset($_GET['solusi'])) {
  $id = $_GET['solusi'];

  $sql = "DELETE FROM sf_solusi where id_solusi_sf = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../software.solusi.php');
}elseif (isset($_GET['relasi'])) {
  $id = $_GET['relasi'];

  $sql = "DELETE FROM relasi_gejala_sf where id_relasi_sf = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../software.relasi.php');
}

 ?>
