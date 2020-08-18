<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="btn-group">
          <a href="<?php echo base_url() . 'admin/kategori_project/tambah'?>" ><button id="sample_editable_1_new" class="btn green">
            Tambah<i class="fa fa-plus"></i>
          </button></a>
        </div>


        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box red">

          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-cogs"></i>Kategori Project
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
          <div class="portlet-body">
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <input id="input_karyawan" type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit"  class="btn blue">Submit</button>
            </form>
            <div class="table-scrollable">
              <div class="box_ajax">
                <table class="table table-hover">
                  <thead>
                    <tr id="pulsate-regular" style="padding:5px;">
                      <th>
                        Nama
                      </th>
                      <th>
                        Kategori
                      </th>
                      <th>
                        Keterangan
                      </th>
                      <th>
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>


                    <?php

                    $ambil_data = $this->db->get('kategori_project');
                    $hasil_ambil_data = $ambil_data->result_array();

                    foreach ($hasil_ambil_data as $item) {
                      ?> 
                      <tr>
                        <td>
                          <?php echo $item['nama'];?>
                        </td>
                        <td>
                          <?php echo $item['kategori'];?>
                        </td>
                        <td>
                          <?php echo $item['keterangan'];?>
                        </td>
                        <td>
                          <div class="actions">
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/kategori_project/detail?id_kategori_project='.$item['id'] ?>">
                              <i class="icon-note"></i>
                            </a>
                            <?php 
                            $user = $this->session->userdata('astrosession');

                            $id  = $user[0]->id; 

                            $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
                            $hasil = $get->row();
                            $jabatan = $hasil->jabatan;

                            if($jabatan!= 'leader')
                            {
                            ?>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/kategori_project/ubah?id_kategori_project='.$item['id'] ?>">
                              <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="<?php echo base_url() . 'admin/kategori_project/hapus?id='.$item['id'] ?>">
                              <i class="icon-trash"></i>
                            </a>
                          </div>
                        </td>
                      </tr>                
                      <?php } 
                      }  ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- END SAMPLE TABLE PORTLET-->
          </div>

        </div>
      </div>
    </div>
  </div>

  <script>
    $(function () {

      $("#input_karyawan").keyup(function()

        {var parameter = $(this).val();
          $.ajax( {  
            type :"post",  
            url : "<?php echo base_url() . 'admin/kategori_project/cari' ?>",  
            cache :false,  
data :({key:parameter}), //mengambil dari variable
//data :$(this).serialize(), // mengambil dari inputan form -> submit
success : function(data) {  
  $(".box_ajax").html(data);                    
},  
error : function() {  
  alert("Data gagal dimasukkan.");  
}  
});

          return false;   


        });
    });
  </script>
