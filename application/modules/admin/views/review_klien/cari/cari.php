                    <?php 
                    $data=$this->input->post();
                    $key=$data['key'];
                    if($key){
                      $this->db->like('kode_form_review_klien',$key,'BOTH');
                    }

                    $ambil_data = $this->db->get('form_review_klien');
                    $hasil_ambil_data = $ambil_data->result_array();
                    
                    ?> 
                    <table class="table table-hover">
                      <thead>
                        <tr id="pulsate-regular" style="padding:5px;">
                          <th>
                           kode Form Review Client
                         </th>
                         <th>
                           Nama Proyek
                         </th>
                         <th>
                           Tanggal
                         </th>
                         <th>
                           Via
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
                            <?php echo $item['kode_form_review_klien'];?>
                          </td>
                          <td>
                           <?php echo $item['nama_proyek'];?>
                         </td>
                         <td>
                           <?php echo tanggalIndo($item['tanggal']);?>
                         </td>
                         <td>
                           <?php echo $item['via'];?>
                         </td>
                         <td>
                           <a class="btn btn-primary" href="<?php echo base_url().'admin/review_klien/detail/'.$item['kode_form_review_klien'] ?>">
                            <i class="fa fa-search"></i>Detail</a>
                          </td>

                        </tr>
                        <?php } ?>

                      </tbody>
                    </table>