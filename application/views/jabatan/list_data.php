<?php
  foreach ($dataJabatan as $Jabatan) {
    ?>
    <tr>
      <td style="min-width:100px;"><?php echo $Jabatan->id_jabatan; ?></td>
      <td><?php echo $Jabatan->nama_jabatan; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataJabatan" data-id="<?php echo $Jabatan->id_jabatan; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-Jabatan" data-id="<?php echo $Jabatan->id_jabatan; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?> 