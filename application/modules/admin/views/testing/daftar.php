<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <div class="btn-group">
         <?php 
       $user = $this->session->userdata('astrosession');

       $id  = $user[0]->id; 

       $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
       $hasil = $get->row();
       $jabatan = $hasil->jabatan;

       if ($jabatan == 'spv') {


        ?>
          <a style="padding:13px; margin-bottom:10px" class="btn btn-app green" href="<?php echo base_url().'admin/testing/tambah/'; ?>">
            <i class="fa fa-plus"></i> Tambah
          </a>
  <?php
      }
      ?>
          <a style="padding:13px; margin-bottom:10px" class="btn btn-app blue" href="<?php echo base_url().'admin/testing/'; ?>">
            <i class="fa fa-list"></i> Daftar
          </a>
        </div>


        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box red">

          <div class="portlet-title">
            <div class="caption">
              <i class="fa fa-cogs"></i>Testing
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
                <input id="input_testing" type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit"  class="btn blue">Submit</button>
            </form>
            <div class="table-scrollable">
              <div class="box_ajax">
                <table class="table table-hover">
                  <thead>
                    <tr id="pulsate-regular" style="padding:5px;">
                      <th>
                       kode form testing
                     </th>
                     <th>
                       Nama Proyek
                     </th>
                     <th>
                       Tanggal
                     </th>
                     <th>
                       Git
                     </th>
                     <th>
                       Action
                     </th>


                   </tr>
                 </thead>
                 <tbody>


                  <?php

                  $ambil_data = $this->db->get('form_testing');
                  $hasil_ambil_data = $ambil_data->result_array();

                  foreach ($hasil_ambil_data as $item) {
                    ?> 
                    <tr>
                      <td>
                        <?php echo $item['kode_form_testing'];?>
                      </td>
                      <td>
                       <?php echo $item['nama_proyek'];?>
                     </td>
                     <td>
                       <?php echo  tanggalIndo( $item['tanggal']);?>
                     </td>
                     <td>
                       <?php echo $item['git'];?>
                     </td>
                     <td>
                     <a class="btn btn-primary" href="<?php echo base_url().'admin/testing/detail/'.$item['kode_form_testing']?>"><i class="fa fa-search"></i> Detail</a>
                     </td>
                     
                     
                   </tr>
                   <?php } ?>

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

    $("#input_testing").keyup(function()

      {var parameter = $(this).val();
        $.ajax( {  
          type :"post",  
          url : "<?php echo base_url() . 'admin/testing/cari' ?>",  
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
