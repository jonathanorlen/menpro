<div class="page-content-wrapper">
  <div class="page-content">

    <!-- BEGIN STYLE CUSTOMIZER -->

    <!-- END STYLE CUSTOMIZER -->
    <!-- BEGIN PAGE HEADER-->

    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->

    <div class="page-bar">
      <ul class="page-breadcrumb">
        <li>
          <i class="fa fa-home"></i>
          <a href="<?php echo base_url().'admin/'?>">Home</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/h_project'?>">History Project</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="">Ubah Data History Project</a>
        </li>
      </ul>

    </div>

    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box green">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-gift"></i>Ubah Data History Project
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

            $parameter = $this->uri->segment(4);
            $paramopsi = $this->uri->segment(5);
            $ambil_data = $this->db->query(" SELECT * FROM h_project where id = '$parameter' ");
            $hasil_ambil_data = $ambil_data->row(); {


              ?>
              <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/h_project/simpan_ubah' ?>">
                <form action="#" id="form_sample_3" class="form-horizontal">
                  <div class="form-body">


                    <div class="alert alert-danger display-hide">
                      <button class="close" data-close="alert"></button>
                      You have some form errors. Please check below.
                    </div>
                    <div class="alert alert-success display-hide">
                      <button class="close" data-close="alert"></button>
                      Your form validation is successful!
                    </div>
                    <div hidden=""  class="form-group">
                      <label class="control-label col-md-3">ID<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="hidden" readonly="" class="form-control" name="paramopsi" id="paramopsi" value="<?php echo $paramopsi; ?>"/>
                        <input type="hidden" readonly="" class="form-control" name="kode_histori" id="kode_histori" value="<?php echo $hasil_ambil_data->kode_histori; ?>"/>
                        <input type="text" id="idproject" name="id" value="<?php echo $parameter;?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Nama Project<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="namaproject" value="<?php echo $hasil_ambil_data->nama_project; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">tgl<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="pic"  value="<?php echo $hasil_ambil_data->tgl; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">versi <span class="required">
                        * </span>
                      </label>
                      <div class="col-md-9">
                        <textarea class="wysihtml5 form-control" rows="6"   name="alamat" data-error-container="#editor1_error"><?php echo $hasil_ambil_data->versi; ?></textarea>
                        <div id="editor1_error">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3">update <span class="required">
                        * </span>
                      </label>
                      <div class="col-md-9">
                        <textarea class="wysihtml5 form-control" rows="6" name="update" data-error-container="#editor1_error"><?php echo $hasil_ambil_data->update; ?></textarea>
                        <div id="editor1_error">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">keterangan <span class="required">
                        * </span>
                      </label>
                      <div class="col-md-9">
                        <textarea class="wysihtml5 form-control" rows="6" name="keterangan" data-error-container="#editor1_error">
                          <?php echo $hasil_ambil_data->keterangan; ?>
                        </textarea>
                        <div id="editor1_error">
                        </div>
                      </div>
                    </div>

                    <br><br><br>

                    <div class="row form-group">
                <div class="col-md-6">
                  <label>Modul</label>
                  <input value=""  type="text" name="modul"  id="modul" class="form-control" required="data harus diisi !" />
                </div>
                  <div class="col-md-6">
                 <label>Tanggal
                  </label>
                    <input type="date" name="tglopsi" id="tglopsi" data-required="1" class="form-control"/>
                  </div>
                
              </div>
              <div class="row form-group">
              <div class="col-md-12">
                  <label>Keterangan</label>
                  <textarea class="wysihtml5 form-control" cols="12" name="keterangan2" id="keterangan2" data-error-container="#editor1_error"></textarea>
                </div>
              </div>



             
                    <div class="row form-group">
                      

                      <div class="row">
                        <div class="col-md-12">
                          <label class="control-label col-md-3">File <span class="required">
                            * </span>
                          </label>
                          <div class="col-md-9">
                            <div class="box-footer clearfix" >
                              <a class="btn btn-app blue" id="upload_file" > 
                                <i class="fa fa-edit"></i> upload file
                              </a>
                            </div>

                            <div class="box_upload">

                            </div>
                            <br>
                            <div class="file_upload"></div>

                            <div>
                              <br>
                              <div id="editor1_error">
                              </div>
                            </div>
                          </div>
                        </div>
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
                              <th>Tanggal</th>
                              <th>File</th>
                              <th>Keterangan</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="tabel_temp_data_hproject">



                          </tbody>
                          <tfoot>

                          </tfoot>
                        </table>
                      </div>
                    </div>

                  </div>


                  <div class="form-actions">
                    <div class="row">
                      <div class="col-md-offset-3 col-md-9">
                        <button type="button" class="btn green" onclick="simpan_ubah()" >Simpan</button>
                        <input type="button" class="btn default" value="Kembali" onclick="history.go(-1);">
                      </div>
                    </div>
                  </div>

                </div>
              </form>
              <?php } ?>
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
  <script type="text/javascript">
    $(function(){
      $('.select2').select2();
    });
    $(document).ready(function(){
      var param = $('#kode_histori').val();
      $("#update").hide();
      $("#tabel_temp_data_hproject").load("<?php echo base_url().'admin/h_project/get_hproject_opsi/'; ?>"+param);
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
function add_item(){
  var kode_histori = $('#kode_histori').val();
  var idproject = $('#idproject').val();
  var modul = $('#modul').val();
  var tglopsi = $('#tglopsi').val();
  var file = $('#file_upload').val();
  var keterangan = $('#keterangan2').val();

  var url = "<?php echo base_url().'admin/h_project/simpan_item_opsi/'?> ";

  $.ajax({
    type: "POST",
    url: url,
    data: { 
      kode_histori:kode_histori,
      modul:modul,
      tglopsi:tglopsi,
      file:file,
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
      $("#tglopsi").val(''); 
      $("#keterangan2").val('');
      $("#tabel_temp_data_hproject").load("<?php echo base_url().'admin/h_project/get_hproject_opsi/'; ?>"+kode_histori);
      window.location = "<?php echo base_url() . 'admin/h_project/ubah/'?>"+idproject;
    }
  });

}

function actEdit(id) {
  var id = id;
  var kode_histori = $('#kode_histori').val();
  var url = "<?php echo base_url().'admin/h_project/get_opsi_hproject'; ?>";
  $.ajax({
    type: 'POST',
    url: url,
    dataType: 'json',
    data: {id:id},
    success: function(ini){
      $('#id').val(ini.id);
      $('#modul').val(ini.modul);
      $('#tglopsi').val(ini.tglopsi);
      $("#keterangan2").val(ini.keterangan);
      $("#add").hide();
      $("#update").show();

    }
  });
}
function update_item(){
  var id = $('#id').val();
  var idproject = $('#idproject').val();
  var kode_histori = $('#kode_histori').val();
  var modul = $('#modul').val();
  var tglopsi = $('#tglopsi').val();
  var file = $('#file_upload').val();
  var keterangan = $('#keterangan2').val();
  var url = "<?php echo base_url().'admin/h_project/update_item_opsi/'?> ";

  $.ajax({
    type: "POST",
    url: url,
    data: { 
      id:id,
      kode_histori:kode_histori,
      modul:modul,
      tglopsi:tglopsi,
      file:file,
      keterangan:keterangan
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
      $('#tglopsi').val(''); 
      $('#modul').val('');
      $("#keterangan2").val('');
      $("#tabel_temp_data_hproject").load("<?php echo base_url().'admin/h_project/get_hproject_opsi/'; ?>"+kode_histori); 
      window.location = "<?php echo base_url() . 'admin/h_project/ubah/'?>"+idproject;
    }
  });

}
function simpan_ubah(){


  var url = "<?php echo base_url().'admin/h_project/simpan_ubah/'?> ";

  $.ajax({
    type: "POST",
    url: url,

    data:$("#form_sample_3").serialize(),
    beforeSend:function(){
      $(".tunggu").show();  
    },
    success: function(data)
    {

      $(".tunggu").hide();
      window.location = "<?php echo base_url() . 'admin/h_project/'; ?>";   

    }
  });
}

function actDelete(Object) {
  $('#id-delete').val(Object);
  $('#modal-hapus').modal('show');
}
function delData() {
  var id = $('#id-delete').val();
  var kode_histori = $('#kode_histori').val();
  var url = '<?php echo base_url().'admin/h_project/hapus_temp_opsi'; ?>/delete';
  $.ajax({
    type: "POST",
    url: url,
    data: { id:id },
    beforeSend:function(){
      $(".tunggu").show();  
    },
    success: function(msg) {
      $('#modal-hapus').modal('hide');
      $("#tabel_temp_data_hproject").load("<?php echo base_url().'admin/h_project/get_hproject_opsi/'; ?>"+kode_histori);
      $(".tunggu").hide();

    }
  });
  return false;
}
</script>