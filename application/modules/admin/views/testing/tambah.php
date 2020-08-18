<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN STYLE CUSTOMIZER -->
   
                        <!-- END STYLE CUSTOMIZER -->
                        <!-- BEGIN PAGE HEADER-->
     <!--    <h3 class="page-title">
        Form Validation <small>form validation</small>
      </h3> -->
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li>
            <i class="fa fa-home"></i>
            <a href="<?php echo base_url().'admin/'?>">Home</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="<?php echo base_url().'admin/testing'?>">Testing</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="">Input Testing</a>
          </li>
        </ul>
      </div>
      <!-- END PAGE HEADER-->
      <!-- BEGIN PAGE CONTENT-->

      <div class="row">
        <div class="col-md-12">
          <!-- BEGIN VALIDATION STATES-->
          <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-gift"></i>Input Testing
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
            <div class="portlet-body form">
              <!-- BEGIN FORM-->
              <?php 
              $user = $this->session->userdata('astrosession');

              $id  = $user[0]->id; 

              $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
              $hasil = $get->row();
              $jabatan = $hasil->jabatan;




              ?>

              <form action="#" id="form_sample_3" class="form-horizontal">
                <div class="form-body">
                    <!-- <h3 class="form-section">Advance validation. <small>Custom radio buttons, checkboxes and Select2 dropdowns</small></h3>

                    <div class="alert alert-danger display-hide">
                      <button class="close" data-close="alert"></button>
                      You have some form errors. Please check below.
                    </div>
                    <div class="alert alert-success display-hide">
                      <button class="close" data-close="alert"></button>
                      Your form validation is successful!
                    </div> -->
                    <div class="box-body">

                      <div class="row">
                        <div class="col-md-6">
                          <label class="control-label">Kode Form Testing</label>
                          <!-- <input type="hidden" id="id" name="id" value="<?php echo @$hasil_get_obat->id; ?>" /> -->
                          <?php
                          $this->db->select_max('id');
                          $get_max_mo = $this->db->get('form_testing');
                          $max_mo = $get_max_mo->row();

                          $this->db->where('id', $max_mo->id);
                          $get_mo = $this->db->get('form_testing');
                          $mo = $get_mo->row();
                          $nomor = substr(@$mo->kode_form_testing, -4);
                          $nomor = $nomor + 1;
                          $string = strlen($nomor);
                          if($string == 1){
                            $kode = 'FT_'. date("dmy").'_'.$hasil->id.'_000'.$nomor;
                          } else if($string == 2){
                            $kode = 'FT_'.date("dmy").'_'.$hasil->id.'_00'.$nomor;
                          } else if($string == 3){
                            $kode = 'FT_'.date("dmy").'_'.$hasil->id.'_00'.$nomor;
                          } else if($string == 4){
                            $kode = 'FT_'.date("dmy").'_'.$hasil->id.'_'.$nomor;
                          }
                          ?>
                          <input type="text" readonly="" class="form-control" name="kode_form_testing" id="kode_form_testing" value="<?php echo $kode; ?>" placeholder="obat" />
                        </div>




                        
                      </div>
                    </div> 
                    <br><br>

                    <div class="row">

                      <div class="col-md-6">
                        <label>Nama Proyek</label>
                        <select id="untukproyek" class="form-control" required>
                          <option value="">-- PILIH Nama Project --</option >
                            <?php
                            $get_proyek = $this->db->get('project');
                            $hasil_proyek = $get_proyek->result();

                            foreach ($hasil_proyek as $item) {
                              echo '<option value="'.$item->id.'">'.$item->project.'</option>';
                            }
                            ?>
                          </select>

                        </div>


                        <div class="col-md-6">
                          <label>Tanggal </label>
                          <input type="date" value="<?php echo date("Y-m-d");?>"  id="tanggal"  class="form-control" required/>
                        </div>



                      </div>
                      <div class="row">

                        <div class="col-md-6">
                          <label>Operator</label>
                          
                          <input value="<?php echo $hasil->nama;  ?>"   id="operator" data-required="1" class="form-control" required/>

                        </div>


                        <div class="col-md-6">
                          <label>Git </label>
                          <input value=""  type="text" id="git" class="form-control" required/>
                        </div>



                      </div>
                      <div class="row">

                        <div class="col-md-6">
                          <label>Username</label>
                          <input value=""  type="text" id="uname" class="form-control" required/>
                          

                        </div>


                        <div class="col-md-6">
                          <label>Password </label>
                          <input value=""  type="text" id="upass" class="form-control" required/>
                        </div>



                      </div><br><br><br>

                      <div class="row">

                        <div class="col-md-2">
                          <label>Modul</label>
                          <input  value=""  type="hidden" id="id" class="form-control" required/>
                          <input value=""  type="text" id="modul" class="form-control" required/>
                          

                        </div>


                        <div class="col-md-2">
                          <label>Sub Modul </label>
                          <input value=""  type="text" id="submodul" class="form-control" required/>
                        </div>

                        <div class="col-md-2">
                          <label>fitur </label>
                          <input value=""  type="text" id="fitur" class="form-control" required/>
                        </div>

                        <div class="col-md-2">
                          <label>Keterangan </label>
                          <input value=""  type="text" id="keterangan" class="form-control" required/>
                        </div>

                        <div class="col-md-2">
                          <label>PIC </label>
                          <input value=""  type="text" id="pic" class="form-control" required/>
                        </div>


                        <div class="col-md-1 pull-right" ><br>
                          <div style="margin-top: 12px" onclick="add_item()" id="add"  class="btn btn-primary btn-block">Add</div>
                          <div style="margin-top: 12px" onclick="update_item()" id="update"  class="btn btn-primary btn-block">Update</div>
                        </div>

                        



                      </div>

                      <div >
                        <div class="box-body"><br>
                          <table id="tabel_daftar" class="table table-bordered table-striped" style="font-size:1.5em;">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Modul</th>
                                <th>Sub Modul</th>
                                <th>Fitur</th>
                                <th>Keterangan</th>
                                <th>PIC</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody id="tabel_temp_data_testing">

                            </tbody>
                            <tfoot>

                            </tfoot>
                          </table>
                        </div>
                      </div>

                      <button type="button" class="btn btn-success pull-right" onclick="confirm()" >Simpan</button>

                      <div class="box-footer clearfix"></div>



                    </form>
                    <!-- END FORM-->
                  </div>
                  <!-- END VALIDATION STATES-->
                </div>
              </div>
            </div>
            <!-- END PAGE CONTENT-->
          </div>
        </div>
        <div id="modal-confirm" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color:grey">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title" style="color:#fff;">Konfirmasi</h4>
              </div>
              <div class="modal-body">
                <span style="font-weight:bold; font-size:14pt">Apakah anda yakin ingin menyimpan Testing ? ?</span>
              </div>
              <div class="modal-footer" style="background-color:#eee">
                <button class="btn green" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <button type="submit" onclick="simpan()" class="btn red">Ya</button>
              </div>
            </div>
          </div>
        </div>
        <div id="modal-hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" style="background-color:grey">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title" style="color:#fff;">Konfirmasi Hapus Data</h4>
              </div>
              <div class="modal-body">
                <span style="font-weight:bold; font-size:14pt">Apakah anda yakin akan menghapus Testing tersebut ?</span>
                <input id="id-delete" type="hidden">
              </div>
              <div class="modal-footer" style="background-color:#eee">
                <button class="btn red" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <button onclick="delData()"  class="btn green">Ya</button>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">


          $(document).ready(function(){
            $("#update").hide();
          });
          function confirm(){
            $("#modal-confirm").modal('show');
          }

          function simpan(){
            var kode_form_testing = $('#kode_form_testing').val();
            var idproyek = $('#untukproyek').val();
            var tanggal = $('#tanggal').val();
            var username = $('#uname').val();
            var userpass = $('#upass').val();
            var git = $('#git').val();

            var url = "<?php echo base_url().'admin/testing/simpan_simpan/'?> ";

            $.ajax({
              type: "POST",
              url: url,
              data: {kode_form_testing:kode_form_testing,idproyek:idproyek,tanggal:tanggal,username:username,userpass:userpass,git:git},
              beforeSend:function(){
                $(".tunggu").show();  
              },
              success: function(data)
              {
                window.location = "<?php echo base_url() . 'admin/testing/' ?>";   
                $(".tunggu").hide();
                $("#modal-confirm").modal('hide');
              }
            });
          }

          function add_item(){
            var kode_form_testing = $('#kode_form_testing').val();
            var modul = $('#modul').val();
            var submodul = $('#submodul').val();
            var fitur = $('#fitur').val();
            var keterangan = $('#keterangan').val();
            var pic = $('#pic').val();
            var url = "<?php echo base_url().'admin/testing/simpan_item_temp/'?> ";

            $.ajax({
              type: "POST",
              url: url,
              data: { kode_form_testing:kode_form_testing,
                modul:modul,
                submodul:submodul,
                fitur:fitur,
                keterangan:keterangan,
                pic:pic,
              },
              beforeSend:function(){
                $(".tunggu").show();  
              },
              success: function(data)
              {
               $(".tunggu").hide(); 
               
               $('#modul').val('');
               $('#submodul').val('');
               $('#fitur').val('');
               $('#keterangan').val('');      
               $("#pic").val('');             
               $("#tabel_temp_data_testing").load("<?php echo base_url().'admin/testing/get_testing/'; ?>"+kode_form_testing);
               
             }
           });

          }
          function actDelete(Object) {
            $('#id-delete').val(Object);
            $('#modal-hapus').modal('show');
          }
          function delData() {
            var id = $('#id-delete').val();
            var kode_form_testing = $('#kode_form_testing').val();
            var url = '<?php echo base_url().'admin/testing/hapus_test_temp'; ?>/delete';
            $.ajax({
              type: "POST",
              url: url,
              data: {
                id:id
              },
              beforeSend:function(){
                $(".tunggu").show();  
              },
              success: function(msg) {
                $('#modal-hapus').modal('hide');
                $("#tabel_temp_data_testing").load("<?php echo base_url().'admin/testing/get_testing/'; ?>"+kode_form_testing);
                $(".tunggu").hide();

              }
            });
            return false;
          }
          function actEdit(id) {
            var id = id;
            var kode_form_testing = $('#kode_form_testing').val();
            var url = "<?php echo base_url().'admin/testing/get_temp_testing'; ?>";
            $.ajax({
              type: 'POST',
              url: url,
              dataType: 'json',
              data: {id:id},
              success: function(ini){
                $('#id').val(ini.id);
                $('#modul').val(ini.modul);
                $("#submodul").val(ini.sub_modul);
                $('#fitur').val(ini.fitur);
                $('#keterangan').val(ini.keterangan);
                $('#pic').val(ini.pic);
                $("#add").hide();
                $("#update").show();
                $("#tabel_temp_data_testing").load("<?php echo base_url().'admin/testing/get_testing/'; ?>"+kode_stok_out);
                
              }
            });
          }
          function update_item(){
            var id = $('#id').val();
            var kode_form_testing = $('#kode_form_testing').val();
            var modul = $('#modul').val();
            var submodul = $('#submodul').val();
            var fitur = $('#fitur').val();
            var keterangan = $('#keterangan').val();
            var pic = $('#pic').val();
            var url = "<?php echo base_url().'admin/testing/update_item_temp/'?> ";

            $.ajax({
              type: "POST",
              url: url,
              data: {id:id,kode_form_testing:kode_form_testing,
                modul:modul,
                submodul:submodul,
                fitur:fitur,
                keterangan:keterangan,
                pic:pic,
              },
              beforeSend:function(){
                $(".tunggu").show();  
              },
              success: function(data)
              {
               $(".tunggu").hide(); 
               $('#id').val('');
               $('#modul').val('');
               $('#submodul').val('');
               $('#fitur').val('');
               $('#keterangan').val('');      
               $("#pic").val('');             
               $("#tabel_temp_data_testing").load("<?php echo base_url().'admin/testing/get_testing/'; ?>"+kode_form_testing);
               $("#add").show();
               $("#update").hide();
             }
           });

          }
        </script>