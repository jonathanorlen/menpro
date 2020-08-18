
<?php
if(@$kode){
  $testing = $this->db->get_where('opsi_form_testing_temp',array('kode_form_testing'=>$kode));
  $list_testing = $testing->result();

  $nomor = 1;  $total = 0;

  foreach($list_testing as $daftar){ 
    ?> 
    <tr style="font-size: 15px;">
      <td><?php echo $nomor; ?></td>
      <td><?php echo $daftar->modul; ?></td>
      <td><?php echo $daftar->sub_modul; ?></td>
      <td><?php echo $daftar->fitur; ?></td>
      <td><?php echo $daftar->keterangan ?></td>
      <td><?php echo $daftar->pic; ?></td>
      <td align="center"><?php echo get_edit_del_id(@$daftar->id); ?></td>
    </tr>

    <?php 

    $nomor++; 
  } 
}
?>

