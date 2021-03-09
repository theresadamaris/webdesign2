<?php
  foreach ($dataBagian as $Bagian) {
    ?>
    <tr>
      <td style="min-width:100px;"><?php echo $Bagian->id; ?></td>
      <td><?php echo $Bagian->nama_bagian; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataBagian" data-id="<?php echo $Bagian->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-Bagian" data-id="<?php echo $Bagian->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?> 