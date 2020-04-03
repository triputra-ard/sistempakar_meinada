<?php
if (isset($_POST['masuk'])) {
  include ('../../include/include.php');
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM user Where username = '$username' And password = '$password'";
  $mysql = mysqli_query($db,$sql) or die (mysqli_error($db));
  $found = mysqli_num_rows($mysql);
  $fetch = mysqli_fetch_assoc($mysql);

  if ($found>0) {
    session_start();
    $_SESSION[id_user] = $fetch['id_user'];
    $_SESSION[username_user] = $fetch['username'];
    $_SESSION[nama_user] = $fetch['nama'];
    $_SESSION[jenis_kelamin_user] = $fetch['jenis_kelamin'];
    $_SESSION[no_tlp_user] = $fetch['no_tlp'];
    $_SESSION[alamat_user] = $fetch['alamat'];
    $_SESSION[email_user] = $fetch['email'];
    $_SESSION[password_user] = $fetch['password'];
    header('location:../home');
  }else {
    echo "<script>alert('Data tidak ditemukan');
    window.location.href='../login'</script>";
  }
}



 ?>
