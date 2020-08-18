                    <?php 
                    $data=$this->input->post();
                    $key=$data['key'];
                    $ambil_data = $this->db->query("SELECT * FROM kategori_project where nama like '%$key%' ");
                    $hasil_ambil_data = $ambil_data->result_array();
                    ?> 
                    <table class="table table-hover">
                      <thead>
                        <tr id="pulsate-regular" style="padding:5px;">
                          <th>
                           Nama
                         </th>
                         <th>
                          Kategori
                         </th>
                         <th>
                           Keterangan
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
                            <?php echo $item['nama'];?>
                          </td>
                          <td>
                           <?php echo $item['kategori'];?>
                         </td>
                         <td>
                           <?php echo $item['keterangan'];?>
                         </td>  
                         <td>
                          <div class="actions">
                          <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/kategori_project/detail?id_kategori_project='.$item['id'] ?>">
                              <i class="icon-note"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/kategori_project/ubah?id_kategori_project='.$item['id'] ?>">
                              <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/kategori_project/hapus?id='.$item['id'] ?>">
                              <i class="icon-trash"></i>
                            </a>
                          </div>
                        </td>


                      </tr>

                      <?php } ?>
                    </tbody>
                  </table>