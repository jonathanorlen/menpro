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
          <a href="<?php echo base_url().'admin/project'?>">Project</a>
          <i class="fa fa-angle-right"></i>
        </li>
        <li>
          <a href="">Ubah Data Project</a>
        </li>
      </ul>

    </div>

    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box green">
          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-gift"></i>Ubah data project
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

            $parameter = $_GET['id_project'];
            //echo $parameter;
            $ambil_data = $this->db->query(" SELECT * FROM project where id = '$parameter' ");
            $hasil_ambil_data = $ambil_data->row(); {


              ?>
              <form class="form-horizontal tasi-form" method="POST" action="<?php echo base_url() . 'admin/project/simpan_ubah' ?>" enctype="multipart/form-data">
                  <div class="form-body">


                    <div class="alert alert-danger display-hide">
                      <button class="close" data-close="alert"></button>
                      You have some form errors. Please check below.
                    </div>
                    <div class="alert alert-success display-hide">
                      <button class="close" data-close="alert"></button>
                      Your form validation is successful!
                    </div>
                    <div class="form-group hidden">
                      <label class="control-label col-md-3">ID<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="id" value="<?php echo $hasil_ambil_data->id; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
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
                          foreach ($hasil_nama as  $value) {
                            if($value->id == @$hasil_ambil_data->kode_kategori){
                              echo "<option selected value=".$value->id.">".$value->nama."</option>";
                            }else{
                              echo "<option value=".$value->id.">".$value->nama."</option>";
                            }
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
                        <input type="text" name="project" value="<?php echo $hasil_ambil_data->project; ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">Project In<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input readonly="" type="text" name="project_in" value="<?php echo tanggalindo($hasil_ambil_data->project_in); ?>" data-required="1" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3">PIC<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="pic"  value="<?php echo $hasil_ambil_data->pic; ?>" data-required="1" class="form-control"/>
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
                      <label class="control-label col-md-3">Telepon<span class="required">
                        * </span>
                      </label>
                      <div class="col-md-4">
                        <input type="text" name="telp"  value="<?php echo $hasil_ambil_data->telp; ?>" data-required="1" class="form-control"/>
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
                      <label class="control-label col-md-3">status <span class="required">
                        * </span>
                      </label>
                      <div class="col-md-9">
                       <select name="status" class="form-control" value="">
                        <option value="<?php echo $hasil_ambil_data->status;?>" ><?php echo $hasil_ambil_data->status;?></option>
                        <option value="open">open</option>
                        <option value="close">close</option>
                        <option value="suspend">suspend</option>
                        <option value="pending">pending</option>
                        <option value="process">process</option>


                      </select>
                      <div id="editor1_error">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">status Project<span class="required">
                      * </span>
                    </label>
                    <div class="col-md-9">
                     <select name="status_project" class="form-control" value="">
                      <option ><?php echo $hasil_ambil_data->status_project;?></option>
                      <option value="ready">Ready</option>
                      <option value="unregister">Unregister</option>
                      <option value="suspend">suspend</option>
                    </select>
                    <div id="editor1_error">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">Alur Sistem <span class="required">
                    * </span>
                  </label>
                  &nbsp
                  <input type="file" name="alur_sistem" /><br>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Dokumen/Data Klien <span>
                    * </span>
                  </label>
                  &nbsp
                  <input type="file" name="dokumen" /><br>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Mockup <span >
                    * </span>
                  </label>
                  &nbsp
                  <input type="file" name="mockup" /><br>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Blue Print <span >
                    * </span>
                  </label>
                  &nbsp
                  <input type="file" name="blue_print" /><br>
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

</script>