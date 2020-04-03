<table id="data-table-basic" class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>No. & Relasi</th>
        <th>ID Kerusakan</th>
        <th>ID Gejala/Solusi</th>
        <th>Ya</th>
        <th>Tidak</th>
        <th>Mulai</th>
        <th>Selesai</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $nomor = 1;
      $sql = "SELECT * FROM relasi_gejala_hd";
      $mysql = mysqli_query($db,$sql);
      while ($rel = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $nomor++; ?> - <?php echo $rel['id_relasi_hd']; ?> </td>
         <td><?php echo $rel['kode_kerusakan_hd']; ?> <i class="fas fa-arrow-right"></i></td>
         <td><?php echo $rel['gejala_solusi_hd']; ?> <i class="fas fa-arrow-right"></i></td>
         <td><?php echo $rel['kode_ya_hd']; ?> <i class="<?php if($rel['mulai_hd'] == Y) echo 'fas fa-arrow-right'; else echo 'fas fa-times'; ?>"></i></td>
         <td><?php echo $rel['kode_tidak_hd']; ?></i></td>
         <td><?php echo $rel['mulai_hd']; ?></td>
         <td><?php echo $rel['selesai_hd']; ?></td>
         <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $rel['id_relasi_hd'];?>">
        <i class="far fa-trash-alt"></i> Hapus</a>
           <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $rel['id_relasi_hd'];?>"><i class="far fa-edit"></i> Edit</a> </td>
       </tr>
       <?php include 'model/modal.relasi.hard.php'; ?>
     <?php } ?>
    </tbody>
    <tfoot>
      <tr>
        <th>No.</th>
        <th>ID Kerusakan</th>
        <th>ID Gejala</th>
        <th>Ya</th>
        <th>Tidak</th>
        <th>Tindakan</th>
      </tr>
    </tfoot>
  </table>
