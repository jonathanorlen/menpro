
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
                              <a href="">Ubah Data Tanggungan Produksi</a>
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
                                  <i class="fa fa-gift"></i>Ubah Data Tanggungan Produksi
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
                                $ambil_data = $this->db->query(" SELECT * FROM t_produksi where id = '$parameter' ");
                                $hasil_ambil_data = $ambil_data->row(); {


                                  ?>
                                  <form action="#" id="form_sample_3" class="form-horizontal">
                                    <div class="form-body">

                                      <div hidden=""  class="form-group">
                                        <label class="control-label col-md-3">ID<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">
                                          <input type="hidden" readonly="" class="form-control" name="paramopsi" id="paramopsi" value="<?php echo $paramopsi; ?>"/>
                                          <input type="hidden" readonly="" class="form-control" name="kode_tproduksi" id="kode_tproduksi" value="<?php echo $hasil_ambil_data->kode_tproduksi; ?>"/>
                                          <input type="text" id="id_pro" name="id_pro" value="<?php echo $parameter;?>" data-required="1" class="form-control"/>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="control-label col-md-3">Nama Project<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">
                                          <input type="hidden" name="untukproject" value="<?php echo $hasil_ambil_data->id_project;?>" data-required="1" class="form-control"/>
                                          <input readonly="" type="text" name="nama_project" value="<?php echo $hasil_ambil_data->nama_project;?>" data-required="1" class="form-control"/>
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="control-label col-md-3">Nama Programmer<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">


                                          <select id="pic" name="pic" class="form-control" required>
                                            <option value="">--Pilih Programmer--</option>
                                            <?php
                                            $get_pic = $this->db->get_where('karyawan', array('jabatan' =>'programer'));
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
                                        <label class="control-label col-md-3">Submodul<span class="required">
                                          * </span>
                                        </label>
                                        <div class="col-md-4">


                                          <select name="untukopsi[]" class="form-control select2" multiple="" required>
                                            <?php
                                            $get_opsi = $this->db->get_where('opsi_tproduksi', array('kode_tproduksi' =>$paramopsi));
                                            $hasil_opsi = $get_opsi->result();

                                            foreach ($hasil_opsi as $daftar) {
                                              ?>
                                              <option value="<?php echo $daftar->id; ?>"><?php echo $daftar->submodul; ?></option>
                                              <?php
                                            }
                                            ?>

                                          </select>




                                        </div>
                                      </div>

                                    </div>


                                    <div class="form-actions">
                                      <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                          <a style=""  class="btn green" id="cetak_surat"><i class="fa fa-print"></i> Print</a>
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
                        $("#cetak_surat").click(function(){
                          var idproject =$("#id_pro").val();
                          var kodeopsi =$("#paramopsi").val();
                          var pic =$("#pic").val();
                          $.ajax( {  
                            type :"post",  
                            url : "<?php echo base_url() . 'admin/t_produksi/update_opsi' ?>",
                            cache :false, 
                            data:$("#form_sample_3").serialize(),
                            success : function(data) {
                              window.open("<?php echo base_url().'admin/t_produksi/cetak_surat_tugas/'; ?>"+pic+"/"+idproject+"/"+kodeopsi);
                            }  

                          }); 

                        });

                      </script>

