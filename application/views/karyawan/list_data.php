<?php
  foreach ($dataKaryawan as $Karyawan) {
    ?>
    <tr>
      <td style="min-width:100px;"><?php echo $Karyawan->nik; ?></td>
      <td><?php echo $Karyawan->nama_lengkap; ?></td>
      <td><?php echo $Karyawan->nama_panggilan; ?></td>
      <td><?php echo $Karyawan->jk; ?></td>
      <td><?php echo $Karyawan->gol_darah; ?></td>
      <td><?php echo $Karyawan->tempat_lahir; ?>/<?php echo $Karyawan->tgl_lahir; ?></td>
      <td><?php echo $Karyawan->tgl_masuk; ?></td>
      <td><?php echo $Karyawan->agama; ?></td>
      <td><?php echo $Karyawan->nama_bagian; ?></td>
      <td><?php echo $Karyawan->nama_jabatan; ?></td>
      <td class="text-center" style="min-width:230px;">
      <a class="btn btn-success" href="<?php echo base_url("Karyawan/folio?id=$Karyawan->nik"); ?>">
      <i class="fa fa-print"></i> Cetak Folio</a>
        <button class="btn btn-warning update-dataKaryawan" data-id="<?php echo $Karyawan->nik; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-Karyawan" data-id="<?php echo $Karyawan->nik; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?> 