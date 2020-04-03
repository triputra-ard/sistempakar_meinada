<table id="data-table-basic" class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>ID Gejala</th>
        <th>Nama Gejala</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT * FROM hd_gejala";
      $mysql = mysqli_query($db,$sql);
      while ($r = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $nomor++ ?> </td>
         <td><?php echo $r['id_gejala_hd']; ?></td>
         <td><?php echo $r['nama_gejala_hd']; ?></td>
         <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $r['id_gejala_hd'];?>">
        <i class="far fa-trash-alt"></i> Hapus</a>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $r['id_gejala_hd'];?>"><i class="far fa-edit"></i> Edit</a> </td>
       </tr>
       <?php include 'model/modal.gejala.hard.php'; ?>
     <?php } ?>
    </tbody>
    <tfoot>
      <tr>
        <th>No.</th>
        <th>ID Gejala</th>
        <th>Nama Gejala</th>
        <th>Tindakan</th>
      </tr>
    </tfoot>
  </table>
