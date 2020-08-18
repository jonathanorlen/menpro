                     
                    
                    <table class="table table-hover">
                      <thead>
                   
                          <tr>

                            <th>
                              Nama Project
                            </th>
                            <th>
                             Fitur
                           </th>
                           <th>
                            In
                          </th>
                          <th>
                           Out
                         </th>
                         <th>
                          Start
                        </th>
                        <th>
                          End
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
                    $ambil_data = $this->db->query("SELECT * FROM t_produksi where id_project = '$filter' and fitur like '%$key%' ORDER BY nama_project DESC ");
                    
                    $hasil_ambil_data = $ambil_data->result_array();
                    
                    
                    $tglsekarang = date('Y-m-d');

                    foreach ($hasil_ambil_data as $item) {
                      if ( date($item['end']) < $tglsekarang) { 
                        $id = $item['id'];
                        $status['status'] = 'lost';
                        $this->db->update( "t_produksi", $status, array('id' => $id) );
                      } ?> 


                      <tr <?php  if($item['status']=='lost') { ?>  style="background: #ca7a7a;"  <?php } ?> >

                        <td>

                         <?php echo $item['nama_project'];?>
                       </td>
                       <td>
                         <?php echo $item['fitur'];?>
                       </td>
                       <td>
                         <?php echo tanggalindo($item['in']);?>
                       </td>
                       <td>
                         <?php echo tanggalindo($item['out']);?>
                       </td>
                       <td>
                         <?php echo tanggalindo($item['start']);?>
                       </td>
                       <td>
                         <?php echo tanggalindo($item['end']);?>
                       </td>

                       <td>

                        <?php 
                        if($item['status']=='proses'){

                          ?>
                          <span class="label label-primary">proses </span>
                          <label>&nbsp</label>

                          <?php

                        }
                        else if($item ['status']=='selesai'){
                          ?>
                          <span class="label label-success">selesai </span>
                          <label>&nbsp</label>

                          <?php 
                        }
                        else if($item['status']=='pending'){
                          ?>
                          <span  class="label label-warning"> pending </span>
                          <label>&nbsp</label>

                          <?php 
                        } 
                        else if($item['status']=='lost'){
                          ?>
                          <div >


                            <span  class="label label-danger"> lost </span>
                            <label >&nbsp

                            </label>

                            <?php 
                          } 
                          ?>






                        </td>
                        <td>
                          <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'] ?>">
                              <i class="icon-note"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/ubah?id_t_produksi='.$item['id'] ?>">
                              <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/hapus?id_t_produksi='.$item['id'] ?>">
                              <i class="icon-trash"></i>
                            </a>
                          </div>
                        </td>


                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
