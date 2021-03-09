<?php
    $no=1;
  foreach ($dataSkripsi as $skripsi) {
    ?>
    <tr>
      <td style="min-width:50px;"><?php echo $no; ?></td>
      <td><?php echo $skripsi->judul; ?></td>
      <td><?php echo $skripsi->tahun; ?></td>
      <td><?php echo $skripsi->format; ?></td>
      <td><?php  
    foreach ($dataMahasiswa as $Mahasiswa) {
        if($Mahasiswa->id==$skripsi->id_mahasiswa){
            echo $Mahasiswa->nama;
        }
     } ?></td>
     <td><?php  
    foreach ($dataKaprodi as $Kaprodi) {
        if($Kaprodi->id==$skripsi->id_prodi){
            echo $Kaprodi->nama_prodi;
        }
     } ?></td>
      <td><?php echo $skripsi->dosbing; ?></td>
      <td class="text-center" style="min-width:230px;">
        <a href="<?=base_url();?>assets/doc/<?=$skripsi->dokumen;?>" target="_blank"class="btn btn-default">
        <i class="fa fa-download"></i> Download Skripsi</a >
        
        <!-- <button class="btn btn-danger konfirmasiHapus-skripsi" data-id="<?php echo $skripsi->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button> -->
      </td>
    </tr>
    <?php $no++;
  }
?> 