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
                              <a href="">Detail Tanggungan Produksi</a>
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
                                  <i class="fa fa-gift"></i>Detail Tanggungan Produksi
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
                                <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/t_produksi/detail' ?>">
                                  <form action="#" id="form_sample_3" class="form-horizontal">
                                    <div class="form-body">

                                      <?php

                                      $parameter = $_GET['id_t_produksi'];
                                      $ambil_data = $this->db->query(" SELECT * FROM t_produksi where id= '$parameter' ");
                                      $hasil_ambil_data = $ambil_data->row();

                                      $idproject = $hasil_ambil_data->id_project;
                                      $idproduksi = $hasil_ambil_data->id;


                                      // $kode_form_review_klien = $this->uri->segment(4);
                                      // $get = $this->db->get_where('t_produksi',array('kode_tproduksi' => $kode_form_review_klien));
                                      // $hasil_ambil_data = $get->row();

                                      ?>

                                      <div class="form-group">
                                        <label class="control-label col-md-3">Kode Tanggungan Produksi<span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                          <?php echo @$hasil_ambil_data->kode_tproduksi; ?>
                                        </label>
                                      </div>

                                      <div class="form-group">
                                        <label class="control-label col-md-3">Nama Project<span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                          <?php echo $hasil_ambil_data->nama_project;?>
                                        </label>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Pic<span class="required">
                                          : </span>
                                        </label>

                                        <table border="1">

                                          <?php
                                          $pic = explode("|", $hasil_ambil_data->pic);
                                          for ($i=0; $i <count($pic) ; $i++) 
                                          {
                                            ?>  

                                            <tr> 

                                              <?php 


                                              $pic_id = $pic[$i];
                                              $ambil_pic = $this->db->query( "SELECT * FROM karyawan WHERE id = '$pic_id' " );
                                              $hasil_ambil_pic = $ambil_pic->row();

                                              ?>

                                              <td style="font-family:OCR A Extended ; font-size: 15px; "><?php echo @$hasil_ambil_pic->nama; ?></td>
                                              
                                              <?php

                                              $ambil_analisa = $this->db->query( "SELECT * FROM analisa WHERE idproject = '$idproject' and idproduksi = '$idproduksi' and idkaryawan = '$pic_id'  "  );
                                              $hasil_ambil_analisa = $ambil_analisa->result_array();


                                              if (!empty($hasil_ambil_analisa)) {
                                                foreach ($hasil_ambil_analisa as $hasil_ambil_analisa) {


                                                  ?>




                                                  <td style="padding: 5px;s"><a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'. $hasil_ambil_analisa['file']; ?>">
                                                    <i class="glyphicon glyphicon-cloud-download"></i>
                                                  </a>
                                                </td>



                                                <?php } ?>

                                              </tr>
                                              <?php
                                            } ?>

                                            <?php
                                          } ?>
                                        </table>













                                      </div>
                                 <!--      <div class="form-group">
                                        <label class="control-label col-md-3">Fitur<span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                         <textarea class="wysihtml5 form-control" type="textarea" readonly cols="3" class="form-control pesan" id="inputError" rows="7" style="width: 500px;" class="required" ">
                                            <?php echo $hasil_ambil_data->fitur;?>
                                          </textarea>
                                          <textarea  rows="6" cols="80" type="textarea" readonly class="form-control pesan" id="inputError" name="isi"
                                          ><?php echo $hasil_ambil_data->fitur;?></textarea>
                                        </label>
                                      </div> -->
                                      <div class="form-group">
                                        <label class="control-label col-md-3">In<span class="required">
                                          : </span>
                                        </label>
                                        <label class="control-label col-md-0" >
                                          <?php echo tanggalindo($hasil_ambil_data->in);?>
                                        </label>
                                      </div>
                                      <div class="form-group">
                                        <label class="control-label col-md-3">Keterangan <span class="required">
                                          : </span>
                                        </label>
                                        <div class="control-label col-md-9">
                                          <textarea readonly class="form-control" rows="6" name="keterangan" data-error-container="#editor1_error"><?php echo $hasil_ambil_data->keterangan;?></textarea>
                                          <div id="editor1_error">
                                          </div>
                                        </div>
                                      </div>
                                      <table id="tabel_daftar" class="table table-bordered table-striped">
                                        <thead>
                                          <tr>
                                            <th>No</th>      
                                            <th>Modul</th>
                                            <th>Submodul</th>
                                            <th>Fitur</th>
                                            <th>Status</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Keterangan</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                         <?php
             // $param = $this->uri->segment(3);
                                         $parameter = $hasil_ambil_data->kode_tproduksi;
                                         $ambil_data_opsi = $this->db->get_where('opsi_tproduksi',array('kode_tproduksi'  =>  $parameter));
                                         $hasil_ambil_data_opsi = $ambil_data_opsi->result();

                                         $no=1;
                                         foreach ($hasil_ambil_data_opsi as $list) { ?>

                                         <tr>
                                          <td><?php echo $no++; ?></td>      
                                          <td><?php echo $list->modul?></td>
                                          <td><?php echo $list->submodul?></td>
                                          <td><?php echo $list->fitur?></td>
                                          <td>
                                            <?php 
                                            if($list->status =='proses'){

                                              ?>
                                              <span class="label label-primary">proses </span>
                                              <label>&nbsp</label>

                                              <?php

                                            }
                                            elseif($list->status =='selesai'){
                                              ?>
                                              <span class="label label-success">selesai </span>
                                              <label>&nbsp</label>

                                              <?php 
                                            }
                                            elseif($list->status =='revisi'){
                                              ?>
                                              <span class="label label-danger">revisi </span>
                                              <label>&nbsp</label>

                                              <?php 
                                            }
                                            elseif($list->status =='pending'){
                                              ?>
                                              <span  class="label label-warning"> pending </span>
                                              <label>&nbsp</label>

                                              <?php 
                                            } 
                                            elseif($list->status =='lost'){
                                              ?>
                                              <span  class="label label-danger"> lost </span>
                                              <label >&nbsp</label>

                                              <?php 
                                            } 
                                            ?>
                                          </td>
                                          <td><?php echo tanggalindo($list->start)?></td>
                                          <td><?php echo tanggalindo($list->end)?></td>
                                          <td><?php echo $list->keterangan?></td>
                                        </tr>
                                        <?php  } ?>
                                      </tbody>
                                      <tfoot>

                                      </tfoot>
                                    </table>
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