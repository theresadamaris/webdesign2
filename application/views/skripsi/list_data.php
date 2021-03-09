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
      
      <?php
        if($userdata->akses=="kaprodi"){ ?>
      <td><?php echo $userdata->nama_prodi; ?></td>
      <?PHP }else{
              foreach ($dataKaprodi as $kaprodi) {
                  if($kaprodi->id==$userdata->id_prodi){
              ?>
            <td><?php echo $kaprodi->nama_prodi; ?></td>
              <?PHP 
              }
          }
        }?>
      <td><?php echo $skripsi->dosbing; ?></td>
      <td>
      <?php 
      if($skripsi->nilai==0){
        echo "-";
      }else{
      ?>
      <?=$skripsi->nilai;?>
      <?PHP if($skripsi->nilai>=85){
              echo "(A)";
            }else if($skripsi->nilai>=75){
              echo "(B)";
            }else if($skripsi->nilai>=60){
              echo "(C)";
            }else if($skripsi->nilai>=50){
              echo "(D)";
            }else{
                echo "(E)";
            }
      }
      ?>
      </td>
      <td class="text-center" style="min-width:230px;">
        <a href="<?=base_url();?>assets/doc/<?=$skripsi->dokumen;?>" target="_blank"class="btn btn-default">
        <i class="fa fa-book"></i> Lihat Skripsi</a >
        <?PHP 
          if($userdata->akses=="kaprodi"){
        ?>
        <button class="btn btn-success update-dataSkripsi" data-id="<?php echo $skripsi->id; ?>"><i class="fa fa-pencil"></i> Input Review</button>
          <?PHP } ?>
        <!-- <button class="btn btn-danger konfirmasiHapus-skripsi" data-id="<?php echo $skripsi->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button> -->
      </td>
    </tr>
    <?php $no++;
  }
?> 