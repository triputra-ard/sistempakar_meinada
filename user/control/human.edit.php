<?php
include ('../../include/koneksi.db.php');
if (isset($_POST['human'])) {
  $id = $_POST['id'];
  $nama = $_POST['editnama'];
  $jk = $_POST['jenis_kelamin_edit'];
  $no_tlp = $_POST['no_tlp_edit'];
  $alamat = $_POST['alamat_edit'];
  $email = $_POST['editemail'];
  $pass = $_POST['editpass'];

  $sql = "UPDATE user SET nama = '$nama', jenis_kelamin = '$jk', no_tlp = '$no_tlp'
  ,alamat = '$alamat' , email='$email', password = '$pass' Where id_user = '$id'";
  $mysql = mysqli_query($db,$sql);

  header('location:../human.pengaturan.php');
}
 ?>
