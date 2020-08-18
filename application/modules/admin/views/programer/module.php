                                  


                                          <select style="font-size: 1.5em;" name="idproduksi" class="form-control" >
                                          <option>-- pilih fitur --</option>
                                           <?php
                                           $data=$this->input->post();
                                          $key=$data['key'];
                                          $ambil_data = $this->db->query("SELECT * FROM t_produksi where id_project like '%$key%' ");
                                          $hasil_ambil_data = $ambil_data->result_array(); 
                                           
                                           foreach($hasil_ambil_data as $daftar){
                                            ?>

                                            <option
                                            
                                            value="<?php echo $daftar['id'];?>"><?php echo $daftar['fitur']; ?>
                                          </option>
                                          <?php } ?>
                                        </select>


