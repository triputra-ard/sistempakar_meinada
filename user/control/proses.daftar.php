<?php
if (isset($_POST['daftar'])) {
  include '../../include/koneksi.db.php';
  $id_user = $_POST['id'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $nama = $_POST['nama'];
  $jk = $_POST['jenis_kelamin'];
  $no_tlp = $_POST['no_telepon'];
  $alamat = $_POST['alamat'];
  $password = $_POST['password'];


  if ($username != "") {

    $sql = "SELECT * FROM user where username = '$username' ";
    $mysql = mysqli_query($db,$sql);
    $check = mysqli_num_rows($mysql);
    if ($check > 0) {
      $sql = "INSERT INTO user VALUES('$id_user', NULL, '$email', '$nama', '$jk', '$no_tlp', '$alamat', '$password', CURRENT_TIMESTAMP)";
      $mysql = mysqli_query($db,$sql);

      session_start();
      $_SESSION[id_temp] = $id_user;
      header('location:../equal.daftar');
    }else {
    $sql = "INSERT INTO user values('$id_user', '$username', '$email', '$nama', '$jk', '$no_tlp', '$alamat', '$password', CURRENT_TIMESTAMP)";
    $mysql = mysqli_query($db,$sql);
    echo "<script>alert('Terdaftar');
    window.location.href='../../home';</script>";
    }
  }
}else {
  echo "<script>alert('Tidak dapat terhubung ke database, data tidak tersimpan !');
  window.location.href='../daftar';</script>";
}
 ?>
