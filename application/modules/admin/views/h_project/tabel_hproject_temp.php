
<?php

if(@$kode){
  $t = $this->db->get_where('opsi_hproject_temp',array('kode_histori'=>$kode));
  $produksi = $t->result();
  
  $nomor = 1;  $total = 0;

  foreach($produksi as $daftar){
    echo $daftar->kode_histori; 
    ?> 
    <tr style="font-size: 15px;">
      <input type="hidden" id="id" name="id" value="<?php echo @$daftar->id; ?>" />
      <td><?php echo $nomor; ?></td>
      <td><?php echo @$daftar->modul; ?></td>
      <td><?php echo Tanggalindo(@$daftar->tglopsi); ?></td>
      <td align="center">
        <!--<img src="<?php echo base_url() . 'component/upload/file/uploads/'.$item_opsi['file'] ?>" width="50" height="50" >-->

        <?php
        $string_foto1 = $daftar->file;
        $file = explode('|', $string_foto1);
        foreach ($file as $value) {
          if(!empty($value)){
            $gambar = explode('.',$value);
            if($gambar[1]=='jpg' OR $gambar[1]=="jpeg" OR $gambar[1]=="png" OR $gambar[1]=="PNG"){
              ?>
              <a style="text-decoration: none;" target="_blank" href="<?php echo base_url().'component/upload/file/uploads/' ?><?php echo $value; ?>" >
                <img style="height: 200px;width: auto;" src="<?php echo base_url().'component/upload/file/uploads/'.$value; ?>" />
              </a><br />
              <?php }else if($gambar[1]=='pdf') {?>
              <a class="btn btn-warning green" target="_blank" href="<?php echo base_url().'component/upload/file/uploads/' ?><?php echo $value; ?>" ><i class="fa fa-search"> </i> View File
              </a> <br/>
              <?php } ?>
              <a href="<?php echo base_url().'component/upload/file/uploads/' ?><?php echo $value; ?>" download ><img  style="height: 50px; width: 50px;" src="<?php echo base_url().'public/img/contact.png' ?>" /><br><?php echo $value; ?> </a>
              <?php
            }
          }
          ?>

        </td>
        <td><?php echo @$daftar->keterangan; ?></td>
        <td align="center"><?php echo get_edit_del_id(@$daftar->id); ?></td>
      </tr>

      <?php 

      $nomor++; 
    } 
  }
  ?>

