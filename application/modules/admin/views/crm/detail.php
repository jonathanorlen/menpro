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
                              <a href="<?php echo base_url().'admin/crm'?>">CRM</a>
                              <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                              <a href="">Detail CRM</a>
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
                                  <i class="fa fa-gift"></i>Detail Project
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
                                <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/crm/simpan_tambah' ?>">
                                  <form action="#" id="form_sample_3" class="form-horizontal">
                                    <div class="form-body">
                                      

                                      <?php

                                      $parameter = $_GET['id_crm'];
                                      $ambil_data = $this->db->query(" SELECT * FROM crm where id= '$parameter' ");
                                      $hasil_ambil_data = $ambil_data->row();

                                      ?>


                                      <div class="form-group">
                                        <label class="control-label col-md-3">Nama Project<span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                          <?php echo $hasil_ambil_data->nama_project;?>
                                        </label>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Tanggal<span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                          <?php echo tanggalindo($hasil_ambil_data->tgl);?>
                                        </label>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Waktu<span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                          <?php echo ($hasil_ambil_data->waktu);?>
                                        </label>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Hari<span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                          <?php echo $hasil_ambil_data->hari;?>
                                        </label>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Keterangan <span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                          <?php echo $hasil_ambil_data->keterangan;?>
                                        </label>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Hasil <span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                          <textarea  rows="6" cols="80" type="textarea" readonly class="form-control pesan" id="inputError" name="isi"
                                          ><?php echo $hasil_ambil_data->hasil;?>
                                        </textarea>
                                      </label>
                                    </div>

                                    <div class="form-group">
                                      <label class="control-label col-md-3">Status<span class="required">
                                        : </span>
                                      </label>
                                      <label class="control-label col-md-0" >
                                        <?php echo $hasil_ambil_data->status;?>
                                      </label>
                                    </div>
                                    <div class="form-group">
                                      <label class="control-label col-md-3">Detail<span class="required">
                                        : </span>
                                      </label>
                                      <table border="1">
                                       <tr> 
                                        <?php
                                        $file = explode("|", $hasil_ambil_data->file);
                                        for ($i=0; $i <count($file) ; $i++) 
                                        {
                                          ?>  

                                          <td style="font-family:OCR A Extended ; font-size: 15px; "></td>
                                          <?php

                                          $ambil_analisa = $this->db->query( "SELECT * FROM crm WHERE id = '$parameter'"  );
                                          $hasil_ambil_analisa = $ambil_analisa->result_array();


                                          if (!empty($hasil_ambil_analisa)) {
                                            foreach ($hasil_ambil_analisa as $hasil_ambil_analisa) {


                                              ?>




                                              <td style="padding: 5px;s"><a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'. $hasil_ambil_analisa['file']; ?>" target="_blank">
                                                <i class="glyphicon glyphicon-cloud-download"></i>
                                              </a>
                                            </td>



                                            <?php } ?>


                                            <?php
                                          } ?>

                                          <?php
                                        } ?>
                                      </tr>
                                    </table>
                                  </div>




                                </div>
                                <div class="form-actions">
                                  <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
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