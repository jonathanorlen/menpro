
<?php

if(@$kode){
  $t = $this->db->get_where('opsi_tproduksi_temp',array('kode_tproduksi'=>$kode));
  $produksi = $t->result();
  
  $nomor = 1;  $total = 0;

  foreach($produksi as $daftar){
    echo $daftar->kode_tproduksi; 
    ?> 
    <tr style="font-size: 15px;">
      <input type="hidden" id="id" name="id" value="<?php echo @$daftar->id; ?>" />
      <td><?php echo $nomor; ?></td>
      <td><?php echo @$daftar->modul; ?></td>
      <td><?php echo @$daftar->submodul; ?></td>
      <td><?php echo @$daftar->fitur; ?></td>
      <td>
        <?php 
        if($daftar->status=='proses'){

          ?>
          <span class="label label-primary">proses </span>
          <label>&nbsp</label>

          <?php

        }
        elseif($daftar->status=='selesai'){
          ?>
          <span class="label label-success">selesai </span>
          <label>&nbsp</label>

          <?php 
        }
        elseif($daftar->status=='revisi'){
          ?>
          <span class="label label-danger">revisi </span>
          <label>&nbsp</label>

          <?php 
        }
        elseif($daftar->status=='pending'){
          ?>
          <span  class="label label-warning"> pending </span>
          <label>&nbsp</label>

          <?php 
        } 
        elseif($daftar->status=='lost'){
          ?>
          <span  class="label label-danger"> lost </span>
          <label >&nbsp</label>

          <?php 
        } 
        ?>
      </td>
      <td><?php echo @$daftar->start; ?></td>
      <td><?php echo @$daftar->end; ?></td>
      <td><?php echo @$daftar->keterangan; ?></td>
      <td align="center"><?php echo get_edit_del_id(@$daftar->id); ?></td>
    </tr>

    <?php 

    $nomor++; 
  } 
}
?>

