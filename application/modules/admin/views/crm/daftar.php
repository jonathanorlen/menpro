<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="btn-group">
          <a href="<?php echo base_url() . 'admin/crm/tambah'?>" ><button id="sample_editable_1_new" class="btn green">
            Tambah<i class="fa fa-plus"></i>
          </button></a>
        </div>


        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box red">

          <div class="portlet-title">
            <div class="caption">

              <i class="fa fa-cogs"></i>CRM
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
              <div class="row">
            <div class="col-md-6">
             <select id="filter" name="filt" class="form-control" required="" >
              <option value="">-- filter by name --</option >
                <?php
                $this->db->group_by('nama_project');
                $get_project = $this->db->get_where('t_produksi');
                $hasil_project = $get_project->result();

                foreach ($hasil_project as $item) {
                  echo '<option value="'.$item->nama_project.'">'.$item->nama_project.'</option>';
                }
                ?>
              </select>
            </div>
            <?php

            $user = $this->session->userdata('astrosession');

            $id  = $user[0]->id; 

            $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
            $hasil = $get->row();
            $jabatan = $hasil->jabatan;

            if ($jabatan != 'programer')
            {
              ?>
              <div class="col-md-6">
                <div class="form-group">
                  <select id="kode_status"  class="form-control" required="" >
                    <option value="">-- filter by status --</option >
                      <option value="proses"> PROSES </option>
                      <option value="selesai"> SELESAI </option>
                    </select> 
                  </div>
                </div>
                </div>
                <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group" >
                    <span class="input-group-addon">Tanggal Awal</span>
                    <input type="date" name="tgl_awal" id="tgl_awal" class="form-control">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-group  " >
                    <span class="input-group-addon">Tanggal Akhir</span>
                    <input type="date" name="tgl_akhir" id="tgl_akhir" class="form-control" >
                  </div>
                </div>
              </div>



                <?php } ?>
              
                  
                </div>
                <div class="row">
                  <div class="col-md-3">
                   


                  <div class="form-group">
                    <input id="input_project" type="text" class="form-control" placeholder="Search Hari">
                  </div>
                 
                  </div>

                  <div class="col-md-4">
                   


                  <div class="form-group">
                    
                     <button type="submit" class="btn blue" id="btncari">Submit</button>
                  </div>
                 
                  </div>

                </div>
                <div class="table-scrollable">
                  <div class="box_ajax">
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
                          jam
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

                    $ambil_data = $this->db->query("SELECT * FROM crm WHERE status != 'selesai'");
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
                  </div>
                </div>
              </div>

              <!-- END SAMPLE TABLE PORTLET-->
            </div>

          </div>
        </div>
      </div>
    </div>


    <script>
      $(function () {

        $("#btncari").click(function()

        {
          var parameter = $('#input_project').val();
          var filter = $('#filter').val();
          var filter_status = $('#kode_status').val()
          var tgl_awal = $("#tgl_awal").val();
          var tgl_akhir = $("#tgl_akhir").val();
          $.ajax( {  
            type :"post",  
            url : "<?php echo base_url() . 'admin/crm/cari' ?>",  
            cache :false,  
          data :({key:parameter,filter:filter,filter_status:filter_status,tgl_akhir:tgl_akhir,tgl_awal:tgl_awal}), //mengambil dari variable
          //data :$(this).serialize(), // mengambil dari inputan form -> submit
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
