                    <?php 
                    $data=$this->input->post();
                    $key=$data['key'];
                    if($key){
                      $this->db->like('kode_form_testing',$key,'BOTH');
                    }

                    $ambil_data = $this->db->get('form_testing');
                    $hasil_ambil_data = $ambil_data->result_array();
                    
                    ?> 
                    <table class="table table-hover">
                      <thead>
                        <tr id="pulsate-regular" style="padding:5px;">
                          <th>
                           kode form testing
                         </th>
                         <th>
                           Nama Proyek
                         </th>
                         <th>
                           Tanggal
                         </th>
                         <th>
                           Git
                         </th>
                         <th>
                           Action
                         </th>


                       </tr>
                     </thead>
                     <tbody>
                      <?php
                      foreach ($hasil_ambil_data as $item) {
                        ?> 
                        <tr>
                          <td>
                            <?php echo $item['kode_form_testing'];?>
                          </td>
                          <td>
                           <?php echo $item['nama_proyek'];?>
                         </td>
                         <td>
                           <?php echo  tanggalIndo( $item['tanggal']);?>
                         </td>
                         <td>
                           <?php echo $item['git'];?>
                         </td>
                         <td>
                           <a class="btn btn-primary" href="<?php echo base_url().'admin/testing/detail/'.$item['kode_form_testing']?>"><i class="fa fa-search"></i> Detail</a>
                         </td>


                       </tr>
                       <?php } ?>

                     </tbody>
                   </table>