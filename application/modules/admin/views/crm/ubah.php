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
          <a href="<?php echo base_url().'admin/crm'?>">CRM</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="">Ubah Data CRM</a>
        </li>
      </ul>

    </div>

    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box green">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-gift"></i>Ubah data CRM
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

            $parameter = $_GET['id_crm'];
            $ambil_data = $this->db->query(" SELECT * FROM crm where id = '$parameter' ");
            $hasil_ambil_data = $ambil_data->row(); {


              ?>
              <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/crm/simpan_ubah' ?>" enctype="multipart/form-data">
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



                    <div hidden="" class="form-group">
                      <label class="control-label col-md-3">ID<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="id" hidden readonly value="<?php echo $hasil_ambil_data->id; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Nama Project<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="nama_project" hidden readonly value="<?php echo $hasil_ambil_data->nama_project; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Tanggal<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="date" name="tgl"  value="<?php echo $hasil_ambil_data->tgl; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Waktu<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="waktu"  value="<?php echo $hasil_ambil_data->waktu; ?>" data-required="1" class="form-control" readonly/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">hari <span class="required">
                        * </span>
                      </label>
                      <div class="col-md-9">
                        <select name="hari" class="form-control" value="">
                          <option value="" ><?php echo $hasil_ambil_data->hari;?></option>
                          <option value="senin">Senin</option>
                          <option value="selasa">Selasa</option>
                          <option value="rabu">Rabu</option>
                          <option value="kamis">Kamis</option>
                          <option value="jumat">Jum'at</option>
                          <option value="sabtu">Sabtu</option>
                          <option value="minggu">Minggu</option>


                        </select>
                        <div id="editor1_error">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Keterangan <span class="required">
                        * </span>
                      </label>
                      <div class="col-md-9">
                        <textarea class="wysihtml5 form-control" rows="6" name="keterangan" data-error-container="#editor1_error"><?php echo $hasil_ambil_data->keterangan; ?></textarea>
                        <div id="editor1_error">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Hasil <span class="required">
                        * </span>
                      </label>
                      <div class="col-md-9">
                        <textarea class="wysihtml5 form-control" rows="6" name="hasil" data-error-container="#editor1_error"><?php echo $hasil_ambil_data->hasil; ?></textarea>
                        <div id="editor1_error">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3">status <span class="required">
                        * </span>
                      </label>
                      <div class="col-md-9">
                        <select name="status" class="form-control" value="">
                          <option><?php echo $hasil_ambil_data->status;?></option>
                          <option value="pending">pending</option>
                          <option value="selesai">selesai</option>


                        </select>
                        <div id="editor1_error">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">File <span class="required">
                        * </span>
                      </label>
                      &nbsp
                      <input type="file" name="crmfile" value="" /><br>
                    </div>

                    <div class="form-actions">
                      <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                          <button type="submit" class="btn green">Submit</button>
                          <input type="button" class="btn default" value="Kembali" onclick="history.go(-1);">
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
      </script>