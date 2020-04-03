<table id="data-table-basic" class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>Tipe diagnosa</th>
        <th>Kerusakan</th>
        <th>Solusi</th>
        <th>Deskripsi</th>
        <th>Waktu</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $id_user = @$_SESSION[id_user];
      $nomor = 1;
      $sql = "SELECT DISTINCT id_diagnosa, tipe, kerusakan, solusi, waktu, id_user ,kerusakan_nama, solusi_nama, deskripsi
        FROM(SELECT hi.id_diagnosa, hi.tipe, hi.kerusakan, hi.solusi, hi.waktu, hi.id_user, sf.nama_kerusakan_sf as kerusakan_nama , solusf.nama_solusi_sf as solusi_nama, solusf.deskripsi_sf as deskripsi
        FROM riwayat_diagnosa hi LEFT JOIN sf_kerusakan sf ON hi.kerusakan=sf.id_kerusakan_sf
        LEFT JOIN sf_solusi solusf ON hi.solusi=solusf.id_solusi_sf
        where hi.id_user='$id_user'
        UNION
        SELECT hi.id_diagnosa, hi.tipe, hi.kerusakan, hi.solusi, hi.waktu, hi.id_user, hd.nama_kerusakan_hd as kerusakan_nama, soluhd.nama_solusi_hd as solusi_nama, soluhd.deskripsi_hd as deskripsi
        FROM riwayat_diagnosa hi LEFT JOIN hd_kerusakan hd ON hi.kerusakan=hd.id_kerusakan_hd
        LEFT JOIN hd_solusi soluhd ON hi.solusi=soluhd.id_solusi_hd
        where hi.id_user='$id_user')
        riwayat_diagnosa where kerusakan_nama is not null and solusi_nama is not null and deskripsi is not null";

      $mysql = mysqli_query($db,$sql);
      while ($r = mysqli_fetch_assoc($mysql)) {
       ?>
       <tr>
         <td><?php echo $nomor++ ?> </td>
         <td><?php echo $r['tipe']; ?></td>
         <td><?php echo $r['kerusakan_nama']; ?></td>
         <td><?php echo $r['solusi_nama']; ?></td>
         <td><?php echo $r['deskripsi']; ?></td>
         <td><?php echo $r['waktu']; ?></td>
         <td><a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $r['id_diagnosa'];?>">
        <i class="far fa-trash-alt"></i> Hapus</a>
       </tr>
       <?php include 'model/modal.human.php'; ?>
     <?php } ?>
    </tbody>
    <tfoot>
      <tr>
        <th>No.</th>
        <th>Tipe diagnosa</th>
        <th>Kerusakan</th>
        <th>Solusi</th>
        <th>Deskripsi</th>
        <th>Waktu</th>
        <th>Tindakan</th>
      </tr>
    </tfoot>
  </table>
