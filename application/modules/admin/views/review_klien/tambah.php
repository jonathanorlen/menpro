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
            <a href="<?php echo base_url().'admin/review_klien'?>">Review Client</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="">Input Review Client</a>
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
                <i class="fa fa-gift"></i>Input Review Client
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
             <?php 
             $user = $this->session->userdata('astrosession');

             $id  = $user[0]->id; 

             $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
             $hasil = $get->row();
             $jabatan = $hasil->jabatan;




             ?>

             <!-- BEGIN FORM-->
             <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/karyawan/simpan_tambah' ?>">
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
                          <label class="control-label">Kode Form Review Client</label>
                          <input type="hidden" id="id" name="id" value="<?php echo @$hasil_get_review->id; ?>" />
                          <?php
                          $this->db->select_max('id');
                          $get_max_mo = $this->db->get('form_review_klien');
                          $max_mo = $get_max_mo->row();

                          $this->db->where('id', $max_mo->id);
                          $get_mo = $this->db->get('form_review_klien');
                          $mo = $get_mo->row();
                          $nomor = substr(@$mo->kode_form_review_klien, -4);
                          $nomor = $nomor + 1;
                          $string = strlen($nomor);
                          if($string == 1){
                           $kode = 'RK_'.date("dmy").'_'.$hasil->id.'_000'.$nomor;
                         } else if($string == 2){
                           $kode = 'RK_'.date("dmy").'_'.$hasil->id.'_00'.$nomor;
                         } else if($string == 3){
                           $kode = 'RK_'.date("dmy").'_'.$hasil->id.'_0'.$nomor;
                         } else if($string == 4){
                           $kode = 'RK_'.date("dmy").'_'.$hasil->id.'_'.$nomor;
                         }
                         ?>
                         <input type="text" readonly="" class="form-control" name="kode_form_review_klien" id="kode_form_review_klien" value="<?php echo $kode; ?>"/>
                       </div>
                     </div>
                   </div> 

                   <div class="row">

                    <div class="col-md-6">
                      <label>Nama Proyek</label>
                      <select name="id_proyek" class="form-control" required id="nama_project">
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
                        <input type="date" value="<?php echo date("Y-m-d"); ?>"  name="tanggal" id="tanggal"  class="form-control" required/>
                      </div>



                    </div>
                    <div class="row">

                      <div class="col-md-6">
                        <label>Via</label>
                        <select name="via" id="via" class="form-control" required/>
                        <option>--PILIH Via Review--</option>
                        <option value="meetup">Meet up</option>
                        <option value="telepon">Telepon</option>
                        <option value="whatsapp">WhatsApp</option>
                      </select>
                    </div>

                    <div class="col-md-6">
                      <label>Operator</label>
                      <?php 
                      $user = $this->session->userdata('astrosession');

                      $id  = $user[0]->id; 

                      $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
                      $hasil = $get->row();
                      $jabatan = $hasil->jabatan;




                      ?>

                      <input value="<?php echo $hasil->nama;  ?>"   name="operator" id="operator" data-required="1" class="form-control" required/>

                    </div>






                  </div>
                  <div class="row">
                  </div><br><br><br>

                  <div class="row">
                    <div class="col-md-6">
                      <label>Uraian</label>
                      <input value=""  type="text" name="uraian"  id="uraian" class="form-control" required="data harus diisi !" />
                    </div>

                    <div class="col-md-6">
                      <label>Keterangan</label>
                      <input value=""  type="text" name="keterangan" id="keterangan" class="form-control" required="data harus diisi !" />
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
                            <th>Uraian</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody id="tabel_temp_data_review_klien">

                        </tbody>
                        <tfoot>

                        </tfoot>
                      </table>
                    </div>
                  </div>

                  <button type="button" class="btn btn-success pull-right" onclick="simpan_all()" >Simpan</button>

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
            <span style="font-weight:bold; font-size:14pt">Apakah anda yakin akan menghapus Data tersebut ?</span>
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
            <span style="font-weight:bold; font-size:14pt">Apakah anda yakin ingin menyimpan Data ? ?</span>
          </div>
          <div class="modal-footer" style="background-color:#eee">
            <button class="btn green" data-dismiss="modal" aria-hidden="true">Tidak</button>
            <button onclick="simpan_all()" class="btn red">Ya</button>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">

      $(document).ready(function(){
        $("#update").hide();
      });

      function add_item(){
        var kode_form_review_klien = $('#kode_form_review_klien').val();
        var uraian = $('#uraian').val();
        var keterangan = $('#keterangan').val();


        var url = "<?php echo base_url().'admin/review_klien/simpan_item_temp/'?> ";

        $.ajax({
          type: "POST",
          url: url,
          data: { 
            kode_form_review_klien:kode_form_review_klien,
            uraian:uraian,
            keterangan:keterangan 
          },
          beforeSend:function(){
            $(".tunggu").show();  
          },
          success: function(data)
          {
            $(".tunggu").hide();
            $('#uraian').val('');      
            $("#keterangan").val('');   
            $("#tabel_temp_data_review_klien").load("<?php echo base_url().'admin/review_klien/get_review_klien/'; ?>"+kode_form_review_klien);
          }
        });

      }

      function actEdit(id) {
        var id = id;
        var kode_form_review_klien = $('#kode_form_review_klien').val();
        var url = "<?php echo base_url().'admin/review_klien/get_temp_review_klien'; ?>";
        $.ajax({
          type: 'POST',
          url: url,
          dataType: 'json',
          data: {id:id},
          success: function(ini){
           $('#id').val(ini.id);
           $('#uraian').val(ini.uraian);
           $('#keterangan').val(ini.keterangan);
           $("#add").hide();
           $("#update").show();
           $("#tabel_temp_data_review_klien").load("<?php echo base_url().'admin/review_klien/get_review_klien/'; ?>"+kode_form_review_klien);
         }
       });
      }
      function update_item(){
        var id = $('#id').val();
        var kode_form_review_klien = $('#kode_form_review_klien').val();
        var uraian = $('#uraian').val();
        var keterangan = $('#keterangan').val();
        var url = "<?php echo base_url().'admin/review_klien/update_item_temp/'?> ";

        $.ajax({
          type: "POST",
          url: url,
          data: { 
            id:id,
            kode_form_review_klien:kode_form_review_klien,
            uraian:uraian,
            keterangan:keterangan,
          },
          beforeSend:function(){
            $(".tunggu").show();  
          },
          success: function(data)
          {
           $(".tunggu").hide();
           $("#update").hide();
           $("#add").show();
           $('#id').val(''); 
           $('#uraian').val('');
           $('#keterangan').val('');           
           $("#tabel_temp_data_review_klien").load("<?php echo base_url().'admin/review_klien/get_review_klien/'; ?>"+kode_form_review_klien);

         }
       });

      }
      function actDelete(Object) {
        $('#id-delete').val(Object);
        $('#modal-hapus').modal('show');
      }
      function delData() {
        var id = $('#id-delete').val();
        var kode_form_review_klien = $('#kode_form_review_klien').val();
        var url = '<?php echo base_url().'admin/review_klien/hapus_review_temp'; ?>/delete';
        $.ajax({
          type: "POST",
          url: url,
          data: { id:id },
          beforeSend:function(){
            $(".tunggu").show();  
          },
          success: function(msg) {
            $('#modal-hapus').modal('hide');
            $("#tabel_temp_data_review_klien").load("<?php echo base_url().'admin/review_klien/get_review_klien/'; ?>"+kode_form_review_klien);
            $(".tunggu").hide();

          }
        });
        return false;
      }

          function simpan_all(){
            var kode_form_review_klien = $('#kode_form_review_klien').val();
            var id_proyek = $('#id_proyek').val();
            var tanggal = $('#tanggal').val();
            var via = $('#via').val();
            var url = "<?php echo base_url().'admin/review_klien/simpan_all/'?> ";

            $.ajax({
              type: "POST",
              url: url,
              data: {kode_form_review_klien:kode_form_review_klien,
                     id_proyek:id_proyek,
                     tanggal:tanggal,
                     via:via,},
              beforeSend:function(){
                $(".tunggu").show();  
              },
              success: function(data)
              {
                window.location = "<?php echo base_url() . 'admin/review_klien/' ?>";   
                $(".tunggu").hide();
                $("#modal-confirm").modal('hide');
              }
            });
          }
    </script>