<?php
include '../../include/koneksi.db.php';
if (isset($_POST['daftarlagi'])) {
    session_start();

    $username = $_POST['username_equal'];
    $id = $_POST['id'];

  if ($username != "") {
    $sql = "SELECT * From user where username = '$username' ";
    $mysql = mysqli_query($db,$sql);
    $check = mysqli_num_rows($mysql);
    if ($check>0) {
      echo "<script>alert('Oops ! Username sudah ada');
      window.location.href='../equal.daftar';</script>";
    }else {
      $sqlup = "UPDATE user SET username = '$username' Where id_user = '$id'";
      $mysqlup = mysqli_query($db,$sqlup);
      session_destroy();
      echo "<script>alert('Terdaftar');
      window.location.href='../../home';</script>";

    }
  }
}else {
  echo "<script>alert('Tidak dapat terhubung ke database, data tidak tersimpan !');
  window.location.href='../daftar';</script>";
}


 ?>
