
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
                        <h3 class="page-title">
                          Form Validation <small>form validation</small>
                        </h3>
                        <div class="page-bar">
                          <ul class="page-breadcrumb">
                            <li>
                              <i class="fa fa-home"></i>
                              <a href="index.html">Home</a>
                              <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                              <a href="#">Form Stuff</a>
                              <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                              <a href="#">Form Validation</a>
                            </li>
                          </ul>
                          <div class="page-toolbar">
                            <div class="btn-group pull-right">
                              <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true">
                                Actions <i class="fa fa-angle-down"></i>
                              </button>
                              <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                  <a href="#">Action</a>
                                </li>
                                <li>
                                  <a href="#">Another action</a>
                                </li>
                                <li>
                                  <a href="#">Something else here</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                  <a href="#">Separated link</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN PAGE CONTENT-->

                        <div class="row">
                          <div class="col-md-12">
                            <!-- BEGIN VALIDATION STATES-->
                            <div class="portlet box green">
                              <div class="portlet-title">
                                <div class="caption">
                                  <i class="fa fa-gift"></i>Advance Validation
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
                                <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/t_produksi/simpan_ubah' ?>">
                                  <?php

                                  $parameter = $_GET['id_t_produksi'];
                                  echo $parameter;
                                  $ambil_data = $this->db->query(" SELECT * FROM t_produksi where id = '$parameter' ");
                                  $hasil_ambil_data = $ambil_data->row(); {


                                    ?>
                                    <form action="#" id="form_sample_3" class="form-horizontal">
                                      <div class="form-body">
                                        <h3 class="form-section">Advance validation. <small>Custom radio buttons, checkboxes and Select2 dropdowns</small></h3>

                                        <div class="alert alert-danger display-hide">
                                          <button class="close" data-close="alert"></button>
                                          You have some form errors. Please check below.
                                        </div>
                                        <div class="alert alert-success display-hide">
                                          <button class="close" data-close="alert"></button>
                                          Your form validation is successful!
                                        </div>


                                        <div class="form-group">
                                          <label class="control-label col-md-3">ID<span class="required">
                                            * </span>
                                          </label>
                                          <div class="col-md-4">
                                            <input type="text" name="id" value="<?php echo $hasil_ambil_data->id;?>" data-required="1" class="form-control"/>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="control-label col-md-3">Nama Project<span class="required">
                                            * </span>
                                          </label>
                                          <div class="col-md-4">
                                            <input type="text" name="nama_project" value="<?php echo $hasil_ambil_data->nama_project;?>" data-required="1" class="form-control"/>
                                          </div>
                                        </div>


                                        <div class="form-group">
                                          <label class="control-label col-md-3">Nama pic<span class="required">
                                            * </span>
                                          </label>
                                          <div class="col-md-4">


                                          <select style="font-size: 1.5em;" name="untukpic[]" class="form-control select2" multiple>
                                           <?php
                                           $karyawan = $this->db->get_where('karyawan',array('status'=>'aktif'));
                                           $hasil_karyawan = $karyawan->result();
                                           foreach($hasil_karyawan as $daftar){
                                            ?>

                                            <option
                                            <?php 
                                            $pic = explode("|",@$hasil_ambil_data->pic);
                                            $allpic = count($pic);

                                            for($i=0; $i<$allpic;$i++){
                                              $undangan = $pic[$i];
                                              if($undangan==$daftar->id) { echo "selected"; }
                                            }
                                            ?>
                                            value="<?php echo $daftar->id ?>"><?php echo $daftar->nama; ?>
                                          </option>
                                          <?php } ?>
                                        </select>



                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Fitur<span class="required">
                                        * </span>
                                      </label>
                                      <div class="col-md-4">
                                        <input type="text" name="fitur" value="<?php echo $hasil_ambil_data->fitur;?>" data-required="1" class="form-control"/>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">IN<span class="required">
                                        * </span>
                                      </label>
                                      <div class="col-md-4">
                                        <input type="date" name="in" value="<?php echo $hasil_ambil_data->in;?>" data-required="1" class="form-control"/>
                                      </div>
                                    </div>

                                    <div class="form-group">
                                      <label class="control-label col-md-3">Start<span class="required">
                                        * </span>
                                      </label>
                                      <div class="col-md-4">
                                        <input type="date" name="start" value="<?php echo $hasil_ambil_data->start;?>" data-required="1" class="form-control"/>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">End<span class="required">
                                        * </span>
                                      </label>
                                      <div class="col-md-4">
                                        <input type="date" name="end" value="<?php echo $hasil_ambil_data->end;?>" data-required="1" class="form-control"/>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">OUT<span class="required">
                                        * </span>
                                      </label>
                                      <div class="col-md-4">
                                        <input type="date" name="out" value="<?php echo $hasil_ambil_data->out;?>" data-required="1" class="form-control"/>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Keterangan <span class="required">
                                        * </span>
                                      </label>
                                      <div class="col-md-9">
                                        <textarea class="wysihtml5 form-control" rows="6" cols="6" name="keterangan"  data-error-container="#editor1_error"><?php echo $hasil_ambil_data->keterangan; ?></textarea>
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
                                        <option ><?php echo $hasil_ambil_data->status;?></option>
                                        <option value="pending">pending</option>
                                        <option value="proses">proses</option>
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

                                    <div class="col-md-9">
                                      <div class="box-footer clearfix">
                                        <a class="btn btn-app blue" id="upload_file">
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