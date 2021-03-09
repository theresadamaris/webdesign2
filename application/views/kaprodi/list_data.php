<?php
  foreach ($dataKaprodi as $Kaprodi) {
    ?>
    <tr>
      <td style="min-width:100px;"><?php echo $Kaprodi->id; ?></td>
      <td><?php echo $Kaprodi->nama_prodi; ?></td>
      <td><?php echo $Kaprodi->nama; ?></td>
      <td><?php echo $Kaprodi->username; ?></td>
      <td><?php echo $Kaprodi->password; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataKaprodi" data-id="<?php echo $Kaprodi->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-Kaprodi" data-id="<?php echo $Kaprodi->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?> 