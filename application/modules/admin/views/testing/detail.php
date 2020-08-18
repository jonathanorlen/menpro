  <div class="page-content-wrapper">
      <div class="page-content">
        
        <!-- BEGIN STYLE CUSTOMIZER -->
        
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
              <a href="<?php echo base_url().'admin/testing'?>">Testing</a>
              <i class="fa fa-angle-right"></i>
            </li>
            <li>
              <a href="">Detail Testing</a>
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
                  <i class="fa fa-gift"></i>Detail Testing
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
                    $kode_form_testing = $this->uri->segment(4);
                    $get = $this->db->get_where('form_testing',array('kode_form_testing' => $kode_form_testing));
                    $list_get = $get->row();

                    
                    ?>
                    <div class="col-md-6">
                      <div class="" style="background-color: #dfba49 ;width:auto;">
                        <a style="padding:13px; margin-bottom:10px;color:white;margin-left:0px;" class="btn">Kode Form Testing :<span style="font-size:20px;"><?php echo @$list_get->kode_form_testing; ?></span></a>
                        <!-- <input readonly="true" type="hidden" value="<?php echo @$list_get->kode_stok_out; ?>" class="form-control" placeholder="Kode Transaksi" name="kode_aktifitas" id="kode_aktifitas" /> -->
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="" style="background-color: #dfba49 ;width:auto;">
                        <a style="padding:13px; margin-bottom:10px;color:white;margin-left:0px;" class="btn">Tanggal :<span style="font-size:20px;"><?php echo tanggalIndo(@$list_get->tanggal); ?></span></a>
                      </div>
                    </div>
                    <?php 
                    
                    ?>

                  </div>
                </div> 
                <br><br>
                <div id="list_transaksi_pembelian">
                  <div class="box-body">
                    <table id="tabel_daftar" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>      
                          <th>Modul</th>
                          <th>Sub Modul</th>
                          <th>Fitur</th>
                          <th>Keterangan</th>
                          <th>PIC</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $get_opsi_form_testing=$this->db->get_where('opsi_form_testing',array('kode_form_testing'=>$kode_form_testing));
                        $hasil=$get_opsi_form_testing->result();
                        $no=1;
                        foreach ($hasil as $list) { ?>

                        <tr>
                          <td><?php echo $no++; ?></td>      
                          <td><?php echo $list->modul ?></td>
                          <td><?php echo $list->sub_modul ?></td>
                          <td><?php echo $list->fitur ?></td>
                          <td><?php echo $list->keterangan ?></td>
                          <td><?php echo $list->pic ?></td>
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