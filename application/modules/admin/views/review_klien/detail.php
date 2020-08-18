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
        <!-- <h3 class="page-title">
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
              <a href="">Detail Review Klien</a>
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
                  <i class="fa fa-gift"></i>Detail Data Review Client
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

                  <div class="box-body">

                  <div class="row">
                    <?php
             // $param = $this->uri->segment(3);
                    $kode_form_review_klien = $this->uri->segment(4);
                    $get = $this->db->get_where('form_review_klien',array('kode_form_review_klien' => $kode_form_review_klien));
                    $list_get = $get->row();

                    
                    ?>
                    <div class="col-md-6">
                      <div class="" style="background-color: #dfba49 ;width:auto;">
                        <a style="padding:13px; margin-bottom:10px;color:white;margin-left:0px;" class="btn">Kode Form Review Client :<span style="font-size:20px;"><?php echo @$list_get->kode_form_review_klien; ?></span></a>
                        <!-- <input readonly="true" type="hidden" value="<?php echo @$list_get->kode_stok_out; ?>" class="form-control" placeholder="Kode Transaksi" name="kode_aktifitas" id="kode_aktifitas" /> -->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="" style="background-color: #dfba49 ;width:auto;">
                        <a style="padding:13px; margin-bottom:10px;color:white;margin-left:0px;" class="btn">Tanggal :<span style="font-size:20px;"><?php echo tanggalIndo(@$list_get->tanggal); ?></span></a>
                      </div>
                    </div>
                  </div>
                </div> 
                <br><br>
                <div id="list_transaksi_pembelian">
                  <div class="box-body">
                    <table id="tabel_daftar" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>      
                          <th>Uraian</th>
                          <th>Keterangan</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $get_opsi_form_review_klien=$this->db->get_where('opsi_form_review_klien',array('kode_form_review_klien'=>$kode_form_review_klien));
                        $hasil=$get_opsi_form_review_klien->result();
                        $no=1;
                        foreach ($hasil as $list) { ?>

                        <tr>
                          <td><?php echo $no++; ?></td>      
                          <td><?php echo $list->uraian?></td>
                          <td><?php echo $list->keterangan?></td>
                          
                        </tr>
                        <?php  } ?>
                      </tbody>
                      <tfoot>

                      </tfoot>
                    </table>
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