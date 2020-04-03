<?php
include ('../../include/include.php');
if (isset($_POST['kerusakan'])) {
  $id = $_POST['id'];
  $edit = $_POST['editnama'];

  $sql = "UPDATE hd_kerusakan SET nama_kerusakan_hd = '$edit' Where id_kerusakan_hd = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../hardware.kerusakan.php');
}elseif (isset($_POST['gejala'])) {
  $id = $_POST['id'];
  $tanya = $_POST['pilihan'];
  $namagj = $_POST['editnama'];

  $sql = "UPDATE hd_gejala SET nama_gejala_hd = '$tanya $namagj' Where id_gejala_hd = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../hardware.gejala.php');
}elseif (isset($_POST['solusi'])) {
  $id = $_POST['id'];
  $namass = $_POST['editnama'];
  $deskripsi = $_POST['deskripsi_edit'];

  $sql = "UPDATE hd_solusi SET nama_solusi_hd = '$namass', deskripsi_hd = '$deskripsi' Where id_solusi_hd = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../hardware.solusi.php');
}
elseif (isset($_POST['relasi'])) {
  $id = $_POST['id'];
  $gejala_solusi = $_POST['edit_gejala/solusi'];
  $kerusakan = $_POST['edit_ks'];
  $ya = $_POST['edit_ya'];
  $tidak = $_POST['edit_tidak'];
  $mulai = $_POST['editmulai'];
  $selesai = $_POST['editselesai'];

  $sql = "UPDATE relasi_gejala_hd SET kode_kerusakan_hd = '$kerusakan', gejala_solusi_hd = '$gejala_solusi',
   kode_ya_hd = '$ya', kode_tidak_hd = '$tidak', mulai_hd = '$mulai' , selesai_hd='$selesai' where id_relasi_hd = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../hardware.relasi.php');
}



?>
