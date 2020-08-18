                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>
                               Nama Project
                             </th>
                             <th>
                               Tanggal
                             </th>
                             <th>
                               Versi
                             </th>
                             <th>
                               Update
                             </th>
                             <th>
                               Action
                             </th>
                           </tr>
                         </thead>
                         <tbody>
                          <?php

                          $data=$this->input->post();
                          $key=@$data['key'];
                          $filter=$data['filter'];
                          $tgl_awal=@$data['tgl_awal'];
                          $tgl_akhir=@$data['tgl_akhir'];

                          if($filter){
                            $this->db->like('nama_project',$filter,'BOTH');

                          }
                          if (!empty($tgl_awal) and !empty($tgl_akhir)) {
                            $this->db->where('tgl >=',$tgl_awal);
                            $this->db->where('tgl <=',$tgl_akhir);
                          }

                          $ambil_data = $this->db->get('h_project');


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
                               <?php echo $item['versi'];?>
                             </td>
                             <td>
                               <?php echo $item['update'];?>
                             </td>
                             <td>
                              <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/h_project/detail/'.$item['id'] ?>">
                                  <i class="icon-note"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/h_project/ubah/'.$item['id'] ?>">
                                  <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/h_project/hapus?id='.$item['id'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')">
                                  <i class="icon-trash"></i>
                                </a>
                              </div>
                            </td>


                          </tr>
                          <?php 

                          $parameter = $item['kode_histori'];
                          if($key){
                            $this->db->like('fitur',$key,'both');

                          }
                          $ambil_data_opsi = $this->db->get_where('opsi_hproject',array('kode_histori'  =>  $parameter));
                          $hasil_ambil_data_opsi = $ambil_data_opsi->result_array();

                          $no = 1;
                          ?>

                          <?php
                          if ($hasil_ambil_data_opsi){
                            ?>
                            <tr>
                             <th style="text-align:center; background: #eee " colspan="6">Detail</th>
                            </tr>
                            <tr>
                              <th>No.</th>
                              <th>Modul</th>
                              <th>Tanggal</th>
                              <th>File</th>
                             
                              <th>Keterangan</th>
                            </tr>
                            <?php
                          }
                          foreach ($hasil_ambil_data_opsi as $item_opsi) {

                            ?>

                            <tr>

                              <td><?php echo $no++?></td>

                              <td><?php echo $item_opsi['modul'];?></td>
                              <td><?php echo tanggalindo($item_opsi['tglopsi']);?></td>
                              <td align="">
                    <!--<img src="<?php echo base_url() . 'component/upload/file/uploads/'.$item_opsi['file'] ?>" width="50" height="50" >-->

                    <?php
                    $string_foto1 = $item_opsi['file'];
                    $file = explode('|', $string_foto1);
                    foreach ($file as $value) {
                      if(!empty($value)){
                        $gambar = explode('.',$value);
                        if($gambar[1]=='jpg' OR $gambar[1]=="jpeg" OR $gambar[1]=="png" OR $gambar[1]=="PNG"){
                          ?>
                          <a style="text-decoration: none;" target="_blank" href="<?php echo base_url().'component/upload/file/uploads/' ?><?php echo $value; ?>" >
                            <img style="height: 200px;width: auto;" src="<?php echo base_url().'component/upload/file/uploads/'.$value; ?>" />
                          </a><br />
                          <?php }else if($gambar[1]=='pdf') {?>
                          <a class="btn btn-warning green" target="_blank" href="<?php echo base_url().'component/upload/file/uploads/' ?><?php echo $value; ?>" ><i class="fa fa-search"> </i> View File
                          </a> <br/>
                          <?php } ?>
                          <a href="<?php echo base_url().'component/upload/file/uploads/' ?><?php echo $value; ?>" download ><img  style="height: 50px; width: 50px;" src="<?php echo base_url().'public/img/contact.png' ?>" /><br><?php echo $value; ?> </a>
                          <?php
                        }
                      }
                      ?>

                    </td>
                              <td><?php echo $item_opsi['keterangan'];?></td>
                            </tr>
                            <?php } ?>

                            <?php } ?>
                          </tbody>
                        </table>