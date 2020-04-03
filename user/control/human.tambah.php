<?php
include '../../include/koneksi.db.php';
if (isset($_POST['software'])) {
  $tipe = $_POST['tipe'];
  $kerusakan = $_POST['kerusakan'];
  $solusi = $_POST['solusi'];
  $id = $_POST['id'];

  $sql= "INSERT INTO riwayat_diagnosa
  VALUES(NULL, '$tipe', '$kerusakan', '$solusi', '$id', CURRENT_TIMESTAMP)";
  $mysql = mysqli_query($db,$sql);
  header('location:../human.history');
}elseif (isset($_POST['hardware'])) {
  $tipe = $_POST['tipe'];
  $kerusakan = $_POST['kerusakan'];
  $solusi = $_POST['solusi'];
  $id = $_POST['id'];

  $sql="INSERT INTO riwayat_diagnosa
  VALUES(NULL, '$tipe', '$kerusakan', '$solusi', '$id', CURRENT_TIMESTAMP)";
  $mysql = mysqli_query($db,$sql);
  header('location:../human.history');
}


 ?>
