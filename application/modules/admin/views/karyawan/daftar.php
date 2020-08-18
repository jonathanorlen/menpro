<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="btn-group">
          <a href="<?php echo base_url() . 'admin/karyawan/tambah'?>" ><button id="sample_editable_1_new" class="btn green">
            Tambah<i class="fa fa-plus"></i>
          </button></a>
        </div>


        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box red">

          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-cogs"></i>karyawan
            </div>


            <div class="tools">
              <a href="javascript:;" class="collapse">
              </a>
              <a href="#portlet-config" data-toggle="modal" class="config">
              </a>
              <a href="javascript:;" class="reload">
              </a>
              <a href="javascript:;" class="remove">
              </a>
            </div>
          </div>
          <div class="portlet-body">
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input id="input_karyawan" type="text" class="form-control" placeholder="Search">
              </div>
            </form>
            <div class="table-scrollable">
              <div class="box_ajax">
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
                        Masa Bekerja
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php
                    $ambil_data = $this->db->get('karyawan');
                    $hasil_ambil_data = $ambil_data->result_array();

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
                          <?php 
                          $user = $this->session->userdata('astrosession');

                          $id  = $user[0]->id; 

                          $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
                          $hasil = $get->row();
                          $jabatan = $hasil->jabatan;

                          if ($jabatan == 'admin' || $jabatan == 'spv'){
                            ?>

                            <td>
                              <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/karyawan/detail?id_karyawan='.$item['id'] ?>">
                                  <i class="icon-note"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/karyawan/ubah?id_karyawan='.$item['id'] ?>">
                                  <i class="icon-wrench"></i>
                                </a>
                                <a class="btn btn-circle btn-icon-only btn-default" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="<?php echo base_url() . 'admin/karyawan/hapus?id='.$item['id'] ?>">
                                  <i class="icon-trash"></i>
                                </a>
                              </div>
                            </td>


                          </tr>
                          <?php }  if ($jabatan == 'leader') { ?>
                          <td>
                            <div class="actions">
                              <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/karyawan/detail?id_karyawan='.$item['id'] ?>">
                                <i class="icon-note"></i>
                              </a>
                            </div>
                          </td>
                          <?php } } ?>
                        </tbody>
                      </table>
                      
                </div>
              </div>
            </div>

            <!-- END SAMPLE TABLE PORTLET-->
          </div>

        </div>
      </div>
    </div>
  </div>
  </br>
  </br>
  </br>

  <script>
    $(function () {

      $("#input_karyawan").keyup(function()

        {var parameter = $(this).val();
          $.ajax( {  
            type :"post",  
            url : "<?php echo base_url() . 'admin/karyawan/cari' ?>",  
            cache :false,  
            data :({key:parameter}),
            success : function(data) {  
              $(".box_ajax").html(data);                    
            },  
            error : function() {  
              alert("Data gagal dimasukkan.");  
            }  
          });

          return false;   


        });
    });
  </script>