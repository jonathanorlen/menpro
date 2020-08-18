                    <?php 
                    $data=$this->input->post();
                    $key=$data['key'];
                    $ambil_data = $this->db->query("SELECT * FROM karyawan where nama like '%$key%' ");
                    $hasil_ambil_data = $ambil_data->result_array();
                    ?> 
                    <table class="table table-hover">
                      <thead>
                        <tr id="pulsate-regular" style="padding:5px;">
                          <th>
                           Nama
                         </th>
                         <th>
                           Jenis Kelamin
                         </th>
                         <th>
                           jabatan
                         </th>
                         
                         <th>
                           status
                         </th>
                         <th>
                          Massa Kerja
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
                         <?php echo $item['jekel'];?>
                       </td>
                       <td>
                         <?php echo $item['jabatan'];?>
                       </td>
                       
                       <td>

                         
                        

                        <?php

                        
                        if($item ['status']=='aktif'){
                          ?>
                          <span class="label label-success"> aktif </span>
                          <label>&nbsp</label>

                          <?php 
                        }
                        
                        else if($item['status']=='tidak aktif'){
                          ?>
                          <div > 


                            <span  class="label label-danger"> tidak aktif </span>
                            <label >&nbsp

                            </label>

                            <?php 
                          } 
                          ?>

                        </td>
                        <td>
                          <?php

                          $tanggal=date('Y-m-d');
                          $id=$item['id'];
                          $waktu=$this->db->query("SELECT DATEDIFF('$tanggal',tanggal_masuk) as selisih, nama FROM `karyawan` WHERE id='$id';");
                          $hasil=$waktu->row();
                          $selisih = $hasil->selisih;
                          $tahun=floor($selisih/365);
                          $bulan=floor(($selisih - ($tahun*365))/30);
                          $hari=$selisih - $bulan * 30 - $tahun * 365;
                          echo "$tahun  tahun -  $bulan bulan - $hari hari ";  
                          ?>
                        </td>
                        <td>
                          <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/karyawan/detail?id_karyawan='.$item['id'] ?>">
                              <i class="icon-note"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/karyawan/ubah?id_karyawan='.$item['id'] ?>">
                              <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/karyawan/hapus?id='.$item['id'] ?>">
                              <i class="icon-trash"></i>
                            </a>
                          </div>
                        </td>

                        
                      </tr>
                      
                      <?php } ?>
                    </tbody>
                  </table>