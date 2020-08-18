<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">


        <div class="btn-group">
          <a href="<?php echo base_url() . 'admin/project/tambah'?>" ><button id="sample_editable_1_new" class="btn green">
            Tambah<i class="fa fa-plus"></i>
          </button></a>
        </div>
        
        

        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box red">

          <div class="portlet-title">
            <div class="caption">

              <i class="fa fa-cogs"></i>project
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
            <div class="form-group">
              <div class="col-md-4">
                <br>
                <select id="kode_status" name="kode_status" class="form-control" required="" style="margin-top: 10px">
                  <option value="">-- filter by status --</option >
                    <option value="open"> OPEN </option>
                    <option value="pending"> PENDING </option>
                    <option value="suspend"> SUSPEND </option>
                    <option value="close"> CLOSE </option>
                  </select>

                </div>
              </div>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input id="input_project" type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn blue" id="btncari">Submit</button>
              </form>
              <div class="table-scrollable">
                <div class="box_ajax">
                  <table class="table table-hover">
                    <thead>
                      <tr id="pulsate-regular" style="padding:5px;">
                        <th>
                         Project
                       </th>
                       <th>Project In</th>
                       <th>
                         PIC
                       </th>
                       <th>
                         Alamat
                       </th>
                       <th>
                         Telp
                       </th>
                       <th>
                         status
                       </th>
                       <th>
                         status Project
                       </th>
                       <?php 
                       $user = $this->session->userdata('astrosession');

                       $id  = $user[0]->id; 

                       $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
                       $hasil = $get->row();
                       $jabatan = $hasil->jabatan;

                       if ($jabatan == 'spv'){


                        ?>      
                        <th>
                         upload
                       </th>
                       <th>
                         Action
                       </th>                 


                       <?php } if ( $jabatan == 'admin' || $jabatan =='leader') { ?>
                       <th>
                         Action
                       </th>        


                       <?php }    ?>

                     </tr>
                   </thead>
                   <tbody>


                    <?php


                    $ambil_data = $this->db->query("SELECT * FROM project WHERE status = 'open' ");

                    $hasil_ambil_data = $ambil_data->result_array();

                    foreach ($hasil_ambil_data as $item) {
                      ?> 
                      <tr>
                        <td>
                          <?php echo $item['project'];?>
                        </td>
                         <td>
                          <?php echo tanggalindo($item['project_in']);?>
                        </td>
                        <td>
                         <?php echo $item['pic'];?>
                       </td>
                       <td>
                         <?php echo $item['alamat'];?>
                       </td>
                       <td>
                         <?php echo $item['telp'];?>
                       </td>
                       <td>

                        <?php 

                        if($item ['status']=='close'){
                          ?>
                          <span class="label label-success">close </span>
                          <label>&nbsp</label>

                          <?php 
                        }
                        else if($item['status']=='suspend'){
                          ?>
                          <span  class="label label-warning"> suspend </span>
                          <label>&nbsp</label>

                          <?php 
                        } 
                        else if($item['status']=='open'){
                          ?>
                          <div > 


                            <span  class="label label-danger"> open </span>
                            <label >&nbsp

                            </label>

                            <?php 
                          } 
                          else if($item['status']=='pending'){
                            ?>
                            <div > 


                              <span  class="label label-primary"> pending </span>
                              <label >&nbsp

                              </label>

                              <?php 
                            } 
                            ?>






                          </td>
                          <td>

                            <?php 

                            if($item ['status_project']=='ready'){
                              ?>
                              <span class="label label-success">ready </span>
                              <label>&nbsp</label>

                              <?php 
                            }
                            else if($item['status_project']=='unregister'){
                              ?>
                              <span  class="label label-warning"> unregister </span>
                              <label>&nbsp</label>

                              <?php 
                            } 
                            else if($item['status_project']=='suspend'){
                              ?>
                              <div > 


                                <span  class="label label-danger"> Suspend </span>
                                <label >&nbsp

                                </label>

                                <?php 
                              }?> 
                            </td>
                            <?php 
                            $user = $this->session->userdata('astrosession');

                            $id  = $user[0]->id; 

                            $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
                            $hasil = $get->row();
                            $jabatan = $hasil->jabatan;

                            if ($jabatan == 'spv'){


                              ?>                       

                              <td>  

                                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$item['pid_alur_sistem'] ?>" target="_blank" title="Alur Sistem">
                                  <i class="glyphicon glyphicon-cloud-download"></i>
                                </a>
                                 <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$item['pid_dokumen'] ?>" target="_blank" title="Dokumen">
                                  <i class="glyphicon glyphicon-cloud-download"></i>
                                </a>
                                 <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$item['pid_mockup'] ?>" target="_blank" title="Mockup">
                                  <i class="glyphicon glyphicon-cloud-download"></i>
                                </a>
                                 <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$item['pid_blueprint'] ?>" target="_blank" title="Blue Print">
                                  <i class="glyphicon glyphicon-cloud-download"></i>
                                </a>

                              </td>

                              <td>
                                <div class="actions">
                                  <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/project/detail?id_project='.$item['id'] ?>" title="Detail">
                                    <i class="icon-note"></i>
                                  </a>
                                  <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/project/ubah?id_project='.$item['id'] ?>" title="Edit">
                                    <i class="icon-wrench"></i>
                                  </a>
                                  <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/project/detail_key?id_project='.$item['id'] ?>" Title="Generate Key">
                                  <i class="icon-key"></i>
                                  </a>
                                  <a class="btn btn-circle btn-icon-only btn-default" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="<?php echo base_url() . 'admin/project/hapus?id='.$item['id'] ?>" Title="Hapus">
                                    <i class="icon-trash"></i>
                                  </a>
                                </div>
                              </td>


                            </tr>
                            <?php } if ( $jabatan == 'admin' || $jabatan =='leader') { ?>
                            <td>
                              <div class="actions">
                                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/project/detail?id_project='.$item['id'] ?>">
                                  <i class="icon-note"></i>
                                </a>
                              </div>
                            </td>

                            <?php }    ?>
                            <?php }    ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- END SAMPLE TABLE PORTLET-->
              </div>

            </div>
          </div>




          <script>
            $(function () {

              $("#btncari").click(function()

              {
                var parameter = $('#input_project').val();
                var sts = $('#kode_status').val();

                $.ajax( {  
                  type :"post",  
                  url : "<?php echo base_url() . 'admin/project/cari' ?>",  
                  cache :false,  
                  data :({key:parameter,sts:sts}),
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
