<?php
  foreach ($dataMahasiswa as $mahasiswa) {
    ?>
    <tr>
      <td style="min-width:100px;"><?php echo $mahasiswa->nim; ?></td>
      <td><?php echo $mahasiswa->nama; ?></td>
      <td><?php  
      foreach ($dataKaprodi as $Kaprodi) {
          if($Kaprodi->id==$mahasiswa->id_prodi){
              echo $Kaprodi->nama_prodi;
          }
      } ?></td>
      <td><?php echo $mahasiswa->tgl_lahir; ?></td>
      <td><?PHP echo $mahasiswa->jenis_kelamin;?></td>
      <td><?PHP echo $mahasiswa->agama;?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataMahasiswa" data-id="<?php echo $mahasiswa->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-Mahasiswa" data-id="<?php echo $mahasiswa->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?> 