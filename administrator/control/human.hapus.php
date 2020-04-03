<?php
include ('../../include/koneksi.db.php');
if (isset($_GET['user'])) {
  $id = $_GET['user'];

  $sql = "DELETE FROM user where id_user = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../user.lihat.php');
}
 ?>
