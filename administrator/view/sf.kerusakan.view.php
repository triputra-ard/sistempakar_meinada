<table id="data-table-basic" class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>ID Kerusakan</th>
        <th>Nama Kerusakan</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT * FROM sf_kerusakan";
      $mysql = mysqli_query($db,$sql);
      while ($r = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $nomor++ ?> </td>
         <td><?php echo $r['id_kerusakan_sf']; ?></td>
         <td><?php echo $r['nama_kerusakan_sf']; ?></td>
         <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $r['id_kerusakan_sf'];?>">
        <i class="far fa-trash-alt"></i> Hapus</a>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $r['id_kerusakan_sf'];?>"><i class="far fa-edit"></i> Edit</a> </td>
       </tr>
       <?php include 'model/modal.kerusakan.soft.php'; ?>
     <?php } ?>
    </tbody>
    <tfoot>
      <tr>
        <th>No.</th>
        <th>ID Kerusakan</th>
        <th>Nama Kerusakan</th>
        <th>Tindakan</th>
      </tr>
    </tfoot>
  </table>
