
<?php
if(@$kode){
  $review = $this->db->get_where('opsi_form_review_klien_temp',array('kode_form_review_klien'=>$kode));
  $review_klien = $review->result();
  
  $nomor = 1;  $total = 0;

  foreach($review_klien as $daftar){
  echo $daftar->kode_form_review_klien; 
    ?> 
    <tr style="font-size: 15px;">
      <td><?php echo $nomor; ?></td>
      <td><?php echo @$daftar->uraian; ?></td>
      <td><?php echo @$daftar->keterangan; ?></td>
      <td align="center"><?php echo get_edit_del_id(@$daftar->id); ?></td>
    </tr>

    <?php 

    $nomor++; 
  } 
}
?>

