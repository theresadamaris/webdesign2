<?php
  foreach ($dataOperator as $Operator) {
    ?>
    <tr>
      <td style="min-width:100px;"><?php echo $Operator->id; ?></td>
      <td><?php echo $Operator->nama; ?></td>
      <td><?php echo $Operator->username; ?></td>
      <td><?php echo $Operator->password; ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataOperator" data-id="<?php echo $Operator->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-Operator" data-id="<?php echo $Operator->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?> 