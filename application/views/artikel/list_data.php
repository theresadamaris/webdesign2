<?php
$no=1;
  foreach ($dataArtikel as $Artikel) {
    ?>
    <tr>
      <td style="min-width:100px;"><?php echo $no; ?></td>
      <td><?php echo $Artikel->judul; ?></td>
      <td class="text-center" style="min-width:230px;">
        <a class="btn btn-warning" href="<?=base_url('Artikel/update');?>?id=<?=$Artikel->id;?>">
         <i class="glyphicon glyphicon-repeat"></i> Update</a>
        <button class="btn btn-danger konfirmasiHapus-Artikel" data-id="<?php echo $Artikel->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  $no++;}
?> 