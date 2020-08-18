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
              <a href="<?php echo base_url().'admin/karyawan'?>">Karyawan</a>
              <i class="fa fa-angle-right"></i>
            </li>
            <li>
              <a href="">Ubah Data Karyawan</a>
            </li>
          </ul>
          
        </div>

        <div class="row">
          <div class="col-md-12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="portlet box green">
              <div class="portlet-title">
                <div class="caption">
                  <i class="fa fa-gift"></i>Ubah Data karyawan
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

                                $parameter = $_GET['id_karyawan'];
                                echo $parameter;
                                $ambil_data = $this->db->query(" SELECT * FROM karyawan where id = '$parameter' ");
                                $hasil_ambil_data = $ambil_data->row(); {
                                

                          ?>
                <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/karyawan/simpan_ubah' ?>">
                <form action="#" id="form_sample_3" class="form-horizontal">
                  <div class="form-body">
                    

                    <div class="alert alert-danger display-hide">
                      <button class="tidak aktif" data-tidak aktif="alert"></button>
                      You have some form errors. Please check below.
                    </div>
                    <div class="alert alert-success display-hide">
                      <button class="tidak aktif" data-tidak aktif="alert"></button>
                      Your form validation is successful!
                    </div>
                    <div class="form-group" hidden="">
                      <label class="control-label col-md-3">ID<span class="required">
                      * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text"  name="id" value="<?php echo $hasil_ambil_data->id; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3">Nama<span class="required">
                      * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="nama" value="<?php echo $hasil_ambil_data->nama; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Jenis kelamin <span class="required">
                      * </span>
                      </label>
                    <div class="col-md-9">
                         <select name="jekel" class="form-control" >
                                      <option><?php echo $hasil_ambil_data->jekel;?></option>
                                      <option value="laki - laki">laki - laki</option>
                                      <option value="perempuan">perempuan</option>
                                      


                                      </select>
                        <div id="editor1_error">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Alamat <span class="required">
                      * </span>
                      </label>
                    <div class="col-md-9">
                        <textarea class="wysihtml5 form-control" rows="6"   name="alamat" data-error-container="#editor1_error"><?php echo $hasil_ambil_data->alamat; ?></textarea>
                        <div id="editor1_error">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Tanggal Lahir<span class="required">
                      * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="date" name="ttl"  value="<?php echo $hasil_ambil_data->ttl; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Telepon<span class="required">
                      * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="telp"  value="<?php echo $hasil_ambil_data->telp; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Jabatan<span class="required">
                      * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="jabatan"  value="<?php echo $hasil_ambil_data->jabatan; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3">status <span class="required">
                      * </span>
                      </label>
                    <div class="col-md-9">
                         <select name="status" class="form-control" value="">
                                      <option ><?php echo $hasil_ambil_data->status;?></option>
                                      <option value="aktif">aktif</option>
                                      <option value="tidak aktif">tidak aktif</option>
                                      


                                      </select>
                        <div id="editor1_error">
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