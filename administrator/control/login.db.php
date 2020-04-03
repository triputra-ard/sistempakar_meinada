<?php
if (isset($_POST['masuk'])) {
  include ('../../include/include.php');
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin Where username = '$username' And password = '$password'";
  $mysql = mysqli_query($db,$sql);
  $found = mysqli_num_rows($mysql);
  $fetch = mysqli_fetch_assoc($mysql);

  if ($found>0) {
    session_start();
    $_SESSION[id_admin] = $fetch['id_admin'];
    $_SESSION[username_admin] = $fetch['username'];
    $_SESSION[nama_admin] = $fetch['nama'];
    $_SESSION[password_admin] = $fetch['password'];
    header('location:../home');
  }else {
    echo "<script>alert('Data tidak ditemukan');
    window.location.href='../login'</script>";
  }
}



 ?>
