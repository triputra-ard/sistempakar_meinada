<?php
include ('../../include/koneksi.db.php');
if (isset($_POST['kerusakan'])) {
  $id = $_POST['id'];
  $namaks = $_POST['editnama'];

  $sql = "UPDATE sf_kerusakan SET nama_kerusakan_sf = '$namaks' Where id_kerusakan_sf = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../software.kerusakan.php');
}elseif (isset($_POST['gejala'])) {
  $id = $_POST['id'];
  $tanya = $_POST['pilihan'];
  $namagj = $_POST['editnama'];

  $sql = "UPDATE sf_gejala SET nama_gejala_sf = '$tanya $namagj' Where id_gejala_sf = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../software.gejala.php');
}elseif (isset($_POST['solusi'])) {
  $id = $_POST['id'];
  $namass = $_POST['editnama'];
  $deskripsi = $_POST['deskripsi_edit'];

  $sql = "UPDATE sf_solusi SET nama_solusi_sf = '$namass', deskripsi_sf = '$deskripsi'  Where id_solusi_sf = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../software.solusi.php');
}elseif (isset($_POST['relasi'])) {
  $id = $_POST['id'];
  $gejala_solusi = $_POST['edit_gejala/solusi'];
  $kerusakan = $_POST['edit_ks'];
  $ya = $_POST['edit_ya'];
  $tidak = $_POST['edit_tidak'];
  $mulai = $_POST['editmulai'];
  $selesai = $_POST['editselesai'];

  $sql = "UPDATE relasi_gejala_sf SET kode_kerusakan_sf = '$kerusakan', gejala_solusi_sf = '$gejala_solusi',
   kode_ya_sf = '$ya', kode_tidak_sf = '$tidak', mulai_sf = '$mulai' , selesai_sf='$selesai' where id_relasi_sf = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../software.relasi.php');
}



?>
