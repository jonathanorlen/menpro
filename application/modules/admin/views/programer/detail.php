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
                <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/t_produksi/detail' ?>">
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

                    <?php

                          $parameter = $_GET['id_t_produksi'];
                          $ambil_data = $this->db->query(" SELECT * FROM t_produksi where id= '$parameter' ");
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
                      <label class="control-label col-md-3">Pic<span class="required">
                      : </span>
                      </label>
                      <table border="1">
                      <thead>
                      <tr>
                      <?php
                        $pic = explode("|", $hasil_ambil_data->pic);
                        for ($i=0; $i <count($pic) ; $i++) 
                        { 
                          $pic_id = $pic[$i];
                        $ambil_pic = $this->db->query( "SELECT * FROM karyawan WHERE id = '$pic_id' " );
                        $hasil_ambil_pic = $ambil_pic->row();
                        
                      ?>
                        
                        <th style="font-family:OCR A Extended ; font-size: 15px; "><center><?php echo $hasil_ambil_pic->nama; ?></center></th>
                        
                      <?php } ?>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                      <?php
                        $pic = explode("|", $hasil_ambil_data->pic);
                        for ($i=0; $i <count($pic) ; $i++) { 
                          
                        
                      ?>

                        
                          <td style="padding: 5px;s"><a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_ambil_data->file ?>">
                          <i class="glyphicon glyphicon-cloud-download"></i>
                        </a></td>
                          


                      <?php } ?>
                        </tr>
                      </tbody>
                        
                      </table>
                        
                        

                      
                      
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Fitur<span class="required">
                      : </span>
                      </label>
                      <label class="control-label col-md-0" >
                        <?php echo $hasil_ambil_data->fitur;?>
                      </label>
                    </div>
                     <div class="form-group">
                      <label class="control-label col-md-3">In<span class="required">
                      : </span>
                      </label>
                      <label class="control-label col-md-0" >
                        <?php echo tanggalindo($hasil_ambil_data->in);?>
                      </label>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3">Start<span class="required">
                      : </span>
                      </label>
                      <label class="control-label col-md-0" >
                        <?php echo tanggalindo($hasil_ambil_data->start);?>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">End<span class="required">
                      : </span>
                      </label>
                      <label class="control-label col-md-0" >
                        <?php echo tanggalindo($hasil_ambil_data->end);?>
                      </label>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Out<span class="required">
                      : </span>
                      </label>
                      <label class="control-label col-md-0" >
                        <?php echo tanggalindo($hasil_ambil_data->out);?>
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
                      <label class="control-label col-md-3">File <span class="required">
                      : </span>
                      </label>
                    <label class="control-label col-md-0" >
                        <?php echo $hasil_ambil_data->file;?>
                      </label>
                      &nbsp&nbsp&nbsp | &nbsp&nbsp&nbsp
                      <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$hasil_ambil_data->file ?>">
                          <i class="glyphicon glyphicon-cloud-download"></i>
                        </a>
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