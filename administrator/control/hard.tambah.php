<?php
if (isset($_POST['tambahks'])) {
  include ('../../include/koneksi.db.php');
  $id = $_POST['id'];
  $namaks = $_POST['nama_ks'];
  $sql = "INSERT INTO hd_kerusakan VALUES('$id', '$namaks')";
  $mysql = mysqli_query($db,$sql);
  if ($mysql) {
    echo "<script>alert('Data ditambahkan');
    window.location.href='../hardware.kerusakan.php';</script>";
  }else {
    echo "<script>alert('Data gagal ditambahkan');
    window.location.href='../hardware.kerusakan.php';</script>";
  }
}elseif (isset($_POST['tambahgj'])) {
  include ('../../include/koneksi.db.php');
  $id = $_POST['id'];
  $tanya = $_POST['pilihan'];
  $namagj = $_POST['nama_gj'];

  $sql = "INSERT INTO hd_gejala VALUES('$id','$tanya $namagj')";
  $mysql = mysqli_query($db,$sql);
  if ($mysql) {
    echo "<script>alert('Data ditambahkan');
    window.location.href='../hardware.gejala.php';</script>";
  }else {
    echo "<script>alert('Data gagal ditambahkan');
    window.location.href='../hardware.gejala.php';</script>";
  }

}elseif (isset($_POST['tambahss'])) {
  include ('../../include/koneksi.db.php');
  $id = $_POST['id'];
  $namass = $_POST['nama_ss'];
  $deskripsi = $_POST['deskripsi_hd'];

  $sql = "INSERT INTO hd_solusi VALUES('$id', '$namass' ,'$deskripsi')";
  $mysql = mysqli_query($db,$sql);
  if ($mysql) {
    echo "<script>alert('Data ditambahkan');
    window.location.href='../hardware.solusi.php';</script>";
  }else {
    echo "<script>alert('Data gagal ditambahkan');
    window.location.href='../hardware.solusi.php';</script>";
  }

}elseif (isset($_POST['relasi'])) {
  include ('../../include/koneksi.db.php');
  $id = $_POST['id'];
  $gejala_solusi = $_POST['gejala/solusi'];
  $kerusakan = $_POST['kode_ks'];
  $ya = $_POST['jika_ya'];
  $tidak = $_POST['jika_tidak'];
  $mulai = $_POST['cekmulai'];
  $selesai = $_POST['cekselesai'];

  $sql = "INSERT INTO relasi_gejala_hd VALUES('$id','$kerusakan', '$gejala_solusi' ,'$ya', '$tidak', '$mulai', '$selesai')";
  $mysql = mysqli_query($db,$sql);
  if ($mysql) {
    echo "<script>alert('Data ditambahkan');
    window.location.href='../hardware.relasi.php';</script>";
  }else {
    echo "<script>alert('Data gagal ditambahkan');
    window.location.href='../hardware.relasi.php';</script>";
  }
}else {
  echo "<script>alert('Data gagal ditambahkan, tidak terkoneksi ke database!');
  window.location.href='../home;</script>";
}
 ?>
