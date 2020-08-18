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
                              <a href="<?php echo base_url().'admin/project'?>">Project</a>
                              <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                              <a href="">Tambah Project</a>
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
                                  <i class="fa fa-gift"></i>Tambah Project
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
                                <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/project/simpan_tambah' ?>"  enctype="multipart/form-data">
                                  <form action="#" id="form_sample_3" class="form-horizontal">
                                    <div class="form-body">

                                      <div class="form-group">
                                        <label class="control-label col-md-3">Kategori Project<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">
                                          <select name="kode_kategori"  class="form-control" required>
                                            <option value="">-- PILIH --</option>
                                            <?php
                                            $get_nama = $this->db->get('kategori_project');
                                            $hasil_nama = $get_nama->result();

                                            foreach ($hasil_nama as $item) {
                                              echo '<option value="'.$item->id.'">'.$item->nama.'</option>';
                                            }
                                            ?>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Project<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">
                                          <input type="text" name="project" data-required="1" class="form-control"/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                      <label class="control-label col-md-3">Project In<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">
                                          <input type="date" name="project_in" id="project_in" data-required="1" class="form-control"/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">PIC<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">
                                          <input type="text" name="pic" data-required="1" class="form-control"/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Alamat <span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-9">
                                          <textarea class="wysihtml5 form-control" rows="6" name="alamat" data-error-container="#editor1_error"></textarea>
                                          <div id="editor1_error">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Telepon<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">
                                          <input type="text" name="telp" data-required="1" class="form-control"/>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Keterangan <span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-9">
                                          <textarea class="wysihtml5 form-control" rows="6" name="keterangan" data-error-container="#editor1_error"></textarea>
                                          <div id="editor1_error">
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Status Project<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">
                                          <select name="status_project" class="form-control" required>
                                            <option value="">-- PILIH --</option>
                                            <option value="unread">Unregister</option>
                                            <option value="ready">Ready</option>
                                            <option value="suspend">suspend</option>
                                            <option value="process">process</option>
                                          </select>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Alur Sistem <span>
                                          * </span>
                                        </label>
                                        &nbsp
                                        <input  type="file" name="alur_sistem" value="" /><br>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Dokumen/Data Klien <span>
                                          * </span>
                                        </label>
                                        &nbsp
                                        <input  type="file" name="dokumen" value="" /><br>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Mockup <span>
                                          * </span>
                                        </label>
                                        &nbsp
                                        <input  type="file" name="mockup" value="" /><br>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Blue Print <span>
                                          * </span>
                                        </label>
                                        &nbsp
                                        <input  type="file" name="blue_print" value="" /><br>
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
                          // $(function () {


                          //   $("#upload_file").click(function () {
                          //     $.ajax({
                          //       type: "post",
                          //       url: "<?php echo base_url() . 'component/upload/file' ?>",
                          //       cache: false,
                          //       data: $(this).serialize(),
                          //       success: function (data) {
                          //         $(".box_upload").html(data);
                          //       },
                          //       error: function () {
                          //         alert("Data gagal dimasukkan.");
                          //       }
                          //     });
                          //     return false;
                          //   });
                          // });
                        </script>