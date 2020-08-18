<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="theme-panel">
      <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
        <i class="icon-settings"></i>
      </div>
      <div class="toggler-close">
        <i class="icon-close"></i>
      </div>
      <div class="theme-options">
        <div class="theme-option theme-colors clearfix">
          <span>
            THEME COLOR </span>
            <ul>
              <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
              </li>
              <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
              </li>
              <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
              </li>
              <li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark">
              </li>
              <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
              </li>
            </ul>
          </div>
          <div class="theme-option">
            <span>
              Theme Style </span>
              <select class="layout-style-option form-control input-small">
                <option value="square" selected="selected">Square corners</option>
                <option value="rounded">Rounded corners</option>
              </select>
            </div>
            <div class="theme-option">
              <span>
                Layout </span>
                <select class="layout-option form-control input-small">
                  <option value="fluid" selected="selected">Fluid</option>
                  <option value="boxed">Boxed</option>
                </select>
              </div>
              <div class="theme-option">
                <span>
                  Header </span>
                  <select class="page-header-option form-control input-small">
                    <option value="fixed" selected="selected">Fixed</option>
                    <option value="default">Default</option>
                  </select>
                </div>
                <div class="theme-option">
                  <span>
                    Top Dropdown</span>
                    <select class="page-header-top-dropdown-style-option form-control input-small">
                      <option value="light" selected="selected">Light</option>
                      <option value="dark">Dark</option>
                    </select>
                  </div>
                  <div class="theme-option">
                    <span>
                      Sidebar Mode</span>
                      <select class="sidebar-option form-control input-small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected="selected">Default</option>
                      </select>
                    </div>
                    <div class="theme-option">
                      <span>
                        Sidebar Style</span>
                        <select class="sidebar-style-option form-control input-small">
                          <option value="default" selected="selected">Default</option>
                          <option value="compact">Compact</option>
                        </select>
                      </div>
                      <div class="theme-option">
                        <span>
                          Sidebar Menu </span>
                          <select class="sidebar-menu-option form-control input-small">
                            <option value="accordion" selected="selected">Accordion</option>
                            <option value="hover">Hover</option>
                          </select>
                        </div>
                        <div class="theme-option">
                          <span>
                            Sidebar Position </span>
                            <select class="sidebar-pos-option form-control input-small">
                              <option value="left" selected="selected">Left</option>
                              <option value="right">Right</option>
                            </select>
                          </div>
                          <div class="theme-option">
                            <span>
                              Footer </span>
                              <select class="page-footer-option form-control input-small">
                                <option value="fixed">Fixed</option>
                                <option value="default" selected="selected">Default</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <!-- END STYLE CUSTOMIZER -->
                        <!-- BEGIN PAGE HEADER-->
                        <div class="page-bar">
                          <ul class="page-breadcrumb">
                            <li>
                              <i class="fa fa-home"></i>
                              <a href="<?php echo base_url().'admin/'?>">Home</a>
                              <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                              <a href="<?php echo base_url().'admin/t_produksi'?>">Tanggungan Produksi</a>
                              <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                              <a href="">Tambah Tanggungan Produksi</a>
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
                                  <i class="fa fa-gift"></i>Tambah Tanggungan Produksi
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

                                <form action="#" id="form_sample_3" class="form-horizontal">
                                  <div class="form-body">  
                                   <div hidden="" class="form-group">					 							
                                     <label class="control-label col-md-3">Kode Tanggungan Produksi<span class="required">
                                       * </span>
                                       <div class="col-md-12 " width="100px"  style="position: relative; left: 278px; top:-30px;"> 
                                         <?php
                                         $this->db->select_max('id');
                                         $get_max_mo = $this->db->get('t_produksi');
                                         $max_mo = $get_max_mo->row();

                                         $this->db->where('id', $max_mo->id);
                                         $get_mo = $this->db->get('t_produksi');
                                         $mo = $get_mo->row();
                                         $nomor = substr(@$mo->kode_tproduksi, 3);
                                         $nomor = $nomor + 1;
                                         $string = strlen($nomor);
                                         if($string == 1){
                                          $kode = 'TP'.'_000'.$nomor;
                                        } else if($string == 2){
                                          $kode = 'TP'.'_00'.$nomor;
                                        } else if($string == 3){
                                          $kode = 'TP'.'_0'.$nomor;
                                        } else if($string == 4){
                                          $kode = 'TP'.'_'.$nomor;
                                        }
                                        ?>
                                        <div>
                                          <input type="text" readonly="" class="form-control" name="kode_tproduksi" id="kode_tproduksi" value="<?php echo $kode; ?>"/>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Nama Project<span class="required">
                                        * </span>
                                      </label>
                                      <div class="col-md-4">

                                       <select id="untukproject" name="untukproject" class="form-control select" required>
                                        <option value="">-- PILIH Nama Project --</option >
                                          <?php
                                          $get_project = $this->db->get_where('project', array('status' => 'open'));
                                          $hasil_project = $get_project->result();

                                          foreach ($hasil_project as $item) {
                                            echo '<option value="'.$item->id.'">'.$item->project.'</option>';
                                          }
                                          ?>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Nama pic<span class="required">
                                        * </span>
                                      </label>
                                      <div class="col-md-4">

                                        <select name="untukpic[]" id="karyawan[]" class="form-control select2" multiple="" required>
                                          <?php
                                          $get_pic = $this->db->get_where('karyawan', array('status' => 'aktif'));
                                          $hasil_pic = $get_pic->result();

                                          foreach ($hasil_pic as $daftar) {
                                            ?>
                                            <option value="<?php echo $daftar->id; ?>"><?php echo $daftar->nama; ?></option>
                                            <?php
                                          }
                                          ?>

                                        </select>



                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Keterangan <span class="required">
                                        * </span>
                                      </label>
                                      <div class="col-md-9">
                                        <textarea required class="wysihtml5 form-control" rows="6" id="keterangan" name="keterangan" data-error-container="#editor1_error"></textarea>
                                        <div id="editor1_error">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                    </div><br><br><br>

                                    <div class="row form-group">
                                    	<div class="col-md-3">
                                       <label>Modul</label>
                                       <input value=""  type="text" name="modul"  id="modul" class="form-control" required="data harus diisi !" />
                                       <input value=""  type="hidden" name="id"  id="id" class="form-control" />
                                     </div>

                                     <div class="col-md-3">
                                      <label>Submodul</label>
                                      <input value=""  type="text" name="submodul" id="submodul" class="form-control" required="data harus diisi !" />
                                    </div>

                                    <div class="col-md-3">
                                      <label>Fitur</label>
                                      <input value=""  type="text" name="fitur" id="fitur" class="form-control" required="data harus diisi !" />
                                    </div>

                                    <label class="col-md-3">Status
                                    </label>
                                    <div class="col-md-3">
                                     <select name="status2" class="form-control" id="status2">
                                      <option value="">-- pilih status --</option>
                                      <option value="pending">pending</option>
                                      <option value="proses">proses</option>
                                      <option value="selesai">selesai</option>
                                      <option value="lost">lost</option>


                                    </select>
                                  </div>

                                  <div class="col-md-3">
                                    <label>Start</label>
                                    <input value=""  type="date" name="start2" id="start2" class="form-control" required="data harus diisi !" />
                                  </div>

                                  <div class="col-md-3">
                                    <label>End</label>
                                    <input value=""  type="date" name="end2" id="end2" class="form-control" required="data harus diisi !" />
                                  </div>

                                  <div class="col-md-3">
                                    <label>Keterangan</label>
                                    <input value=""  type="text" name="keterangan2" id="keterangan2" class="form-control" required="data harus diisi !" />
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
                                         <th>status</th>
                                         <th>Start</th>
                                         <th>End</th>
                                         <th>Keterangan</th>
                                         <th>Action</th>
                                       </tr>
                                     </thead>
                                     <tbody id="tabel_temp_data_tproduksi">

                                     </tbody>
                                     <tfoot>

                                     </tfoot>
                                   </table>
                                 </div>
                               </div>
                               <div class="form-actions">
                                <div class="row">
                                  <div class="col-md-offset-3 col-md-9">
                                   <button type="button" class="btn green" onclick="simpan_all()" >Simpan</button>
                                   <input type="button" class="btn default" value="Kembali" onclick="history.go(-1);">
                                 </div>
                               </div>
                             </div>              

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
               <div id="modal-hapus" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header" style="background-color:grey">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                      <h4 class="modal-title" style="color:#fff;">Konfirmasi Hapus Data</h4>
                    </div>
                    <div class="modal-body">
                      <span style="font-weight:bold; font-size:14pt">Apakah anda yakin akan menghapus data tersebut ?</span>
                      <input id="id-delete" type="hidden">
                    </div>
                    <div class="modal-footer" style="background-color:#eee">
                      <button class="btn red" data-dismiss="modal" aria-hidden="true">Tidak</button>
                      <button onclick="delData()"  class="btn green">Ya</button>
                    </div>
                  </div>
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
                      <span style="font-weight:bold; font-size:14pt">Apakah anda yakin ingin menyimpan data tersebut ? ?</span>
                    </div>
                    <div class="modal-footer" style="background-color:#eee">
                      <button class="btn green" data-dismiss="modal" aria-hidden="true">Tidak</button>
                      <button onclick="simpan()" class="btn red">Ya</button>
                    </div>
                  </div>
                </div>
              </div>
              <script type="text/javascript">
                $(function(){
                  $('.select2').select2();
                });
                $(function () {


                  $("#upload_file").click(function () {
                    $.ajax({
                      type: "post",
                      url: "<?php echo base_url() . 'component/upload/file' ?>",
                      cache: false,
                      data: $(this).serialize(),
                      success: function (data) {
                        $(".box_upload").html(data);
                      },
                      error: function () {
                        alert("Data gagal dimasukkan.");
                      }
                    });
                    return false;
                  });
                });

                $(document).ready(function(){
                  $("#update").hide();
                });

                function add_item(){
                  var kode_tproduksi = $('#kode_tproduksi').val();
                  var modul = $('#modul').val();
                  var submodul = $('#submodul').val();
                  var fitur = $('#fitur').val();
                  var status = $('#status2').val();
                  var start = $('#start2').val();
                  var end = $('#end2').val();
                  var keterangan = $('#keterangan2').val();

                  var url = "<?php echo base_url().'admin/t_produksi/simpan_item_temp/'?> ";

                  $.ajax({
                    type: "POST",
                    url: url,
                    data: { 
                      kode_tproduksi:kode_tproduksi,
                      modul:modul,
                      submodul:submodul,
                      fitur:fitur,
                      status:status,
                      start:start,
                      end:end,
                      keterangan:keterangan
                    },
                    beforeSend:function(){
                      $(".tunggu").show();  
                    },
                    success: function(data)
                    {
                      $(".tunggu").hide();
                      $('#modul').val('');      
                      $("#submodul").val('');
                      $("#fitur").val('');
                      $("#status2").val('');
                      $("#start2").val(''); 
                      $("#end2").val(''); 
                      $("#keterangan2").val('');     
                      $("#tabel_temp_data_tproduksi").load("<?php echo base_url().'admin/t_produksi/get_tproduksi/'; ?>"+kode_tproduksi);
                    }
                  });

                }

                function actEdit(id) {
                  var id = id;
                  var kode_tproduksi = $('#kode_tproduksi').val();
                  var url = "<?php echo base_url().'admin/t_produksi/get_temp_tproduksi'; ?>";
                  $.ajax({
                    type: 'POST',
                    url: url,
                    dataType: 'json',
                    data: {id:id},
                    success: function(ini){
                     $('#id').val(ini.id);
                     $('#modul').val(ini.modul);
                     $('#submodul').val(ini.submodul);
                     $('#fitur').val(ini.fitur);
                     $('#status2').val(ini.status);
                     $("#start2").val(ini.start); 
                     $("#end2").val(ini.end); 
                     $("#keterangan2").val(ini.keterangan); 
                     $("#add").hide();
                     $("#update").show();
                     $("#tabel_temp_data_tproduksi").load("<?php echo base_url().'admin/t_produksi/get_tproduksi/'; ?>"+kode_tproduksi);
                   }
                 });
                }
                function update_item(){
                  var id = $('#id').val();
                  var kode_tproduksi = $('#kode_tproduksi').val();
                  var modul = $('#modul').val();
                  var submodul = $('#submodul').val();
                  var fitur = $('#fitur').val();
                  var status = $('#status2').val();
                  var start = $('#start2').val();
                  var end = $('#end2').val();
                  var keterangan = $('#keterangan2').val();
                  var url = "<?php echo base_url().'admin/t_produksi/update_item_temp/'?> ";

                  $.ajax({
                    type: "POST",
                    url: url,
                    data: { 
                      id:id,
                      kode_tproduksi:kode_tproduksi,
                      modul:modul,
                      submodul:submodul,
                      fitur:fitur,
                      status:status,
                      start:start,
                      end:end,
                      keterangan:keterangan
                    },
                    beforeSend:function(){
                      $(".tunggu").show();  
                    },
                    success: function(data)
                    {
                     $("#add").show();
                     $("#update").hide();
                     $(".tunggu").hide();
                     $('#id').val(''); 
                     $('#modul').val('');
                     $('#submodul').val(''); 
                     $('#fitur').val('');           
                     $('#status2').val('');
                     $("#start2").val(''); 
                     $("#end2").val(''); 
                     $("#keterangan2").val('');            
                     $("#tabel_temp_data_tproduksi").load("<?php echo base_url().'admin/t_produksi/get_tproduksi/'; ?>"+kode_tproduksi);

                   }
                 });

                }

                function actDelete(Object) {
                  $('#id-delete').val(Object);
                  $('#modal-hapus').modal('show');
                }
                function delData() {
                  var id = $('#id-delete').val();
                  var kode_tproduksi = $('#kode_tproduksi').val();
                  var url = '<?php echo base_url().'admin/t_produksi/hapus_temp'; ?>/delete';
                  $.ajax({
                    type: "POST",
                    url: url,
                    data: { id:id },
                    beforeSend:function(){
                      $(".tunggu").show();  
                    },
                    success: function(msg) {
                      $('#modal-hapus').modal('hide');
                      $("#tabel_temp_data_tproduksi").load("<?php echo base_url().'admin/t_produksi/get_tproduksi/'; ?>"+kode_tproduksi);
                      $(".tunggu").hide();

                    }
                  });
                  return false;
                }

                function simpan_all(){


                  var url = "<?php echo base_url().'admin/t_produksi/simpan_all/'?> ";

                  $.ajax({
                    type: "POST",
                    url: url,
                    data:$("#form_sample_3").serialize(),
                    beforeSend:function(){
                      $(".tunggu").show();  
                    },
                    success: function(data)
                    {
                      window.location = "<?php echo base_url() . 'admin/t_produksi/' ?>";   
                      $(".tunggu").hide();
                      $("#modal-confirm").modal('hide');
                    }
                  });
                }
              </script>