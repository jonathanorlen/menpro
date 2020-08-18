<table class="table table-hover">
  <thead>
    <tr id="pulsate-regular" style="padding:5px;">
      <th>
       Nama Project
     </th>
     <th>
       Tanggal
     </th>
     <th>
       Hari
     </th>     
     <th>
       Jam
     </th>
     <th>
       Status
     </th>
     <th>
       Action
     </th>
   </tr>
 </thead>
 <tbody>


  <?php


  $data=$this->input->post();
  $key=$data['key'];
  $filter=$data['filter'];
  $filter_status = @$data['filter_status'];
  $tgl_awal=@$data['tgl_awal'];
  $tgl_akhir=@$data['tgl_akhir'];
  

  // $ambil_data = $this->db->query("SELECT * FROM t_produksi where id_project = '$filter' and status = '$statusnot' and fitur like '%$key%' ORDER BY nama_project DESC ");
  if($key){
    $this->db->like('nama_project',$key,'BOTH');

  }
  if($filter){
    $this->db->where('nama_project',$filter);

  }
  if($filter_status){
    $this->db->where('status',$filter_status );

  }
  if (!empty($tgl_awal) and !empty($tgl_akhir)) {
    $this->db->where('tgl >=',$tgl_awal);
    $this->db->where('tgl <=',$tgl_akhir);
  }

  $ambil_data = $this->db->get('crm');
  // echo $this->db->last_query();

  $hasil_ambil_data = $ambil_data->result_array();

  foreach ($hasil_ambil_data as $item) {
    ?> 
     <tr>
                        <td>
                          <?php echo $item['nama_project'];?>
                        </td>
                        <td>
                         <?php echo tanggalindo($item['tgl']);?>
                       </td>
                       <td>
                         <?php echo $item['hari'];?>
                       </td>
                       <td>
                         <?php echo $item['waktu'];?>
                       </td>
                       <td>
                        <?php 
                        if($item['status']=='pending'){

                          ?>
                          <span class="label label-warning">proses </span>
                          <label>&nbsp</label>

                          <?php

                        }
                        else if($item ['status']=='selesai'){
                          ?>
                          <span class="label label-success">selesai </span>
                          <label>&nbsp</label>



                          <?php 
                        } 
                        ?>
                      </td>
                      <?php 
                      $user = $this->session->userdata('astrosession');

                      $id  = $user[0]->id; 

                      $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
                      $hasil = $get->row();
                      $jabatan = $hasil->jabatan;

                      if ($jabatan == 'admin'){


                        ?>

                        <td>
                          <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/crm/detail?id_crm='.$item['id'] ?>">
                              <i class="icon-note"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/crm/ubah?id_crm='.$item['id'] ?>">
                              <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/crm/hapus?id='.$item['id'] ?>">
                              <i class="icon-trash"></i>
                            </a>
                          </div>
                        </td>


                      <?php } if ($jabatan == 'spv' || $jabatan == 'leader') { ?>
                      <td>
                        <div class="actions">
                          <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/crm/detail?id_crm='.$item['id'] ?>">
                            <i class="icon-note"></i>
                          </a>
                          <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/crm/ubah?id_crm='.$item['id'] ?>">
                            <i class="icon-wrench"></i>
                          </a>
                        </div>
                        <?php } ?>
                      </tr>

  <?php } ?>
</tbody>
</table>