<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box red">

          <div class="portlet-title">
            <div class="caption">

              <i class="fa fa-cogs"></i>Buat Menu Programer
            </div>

            <form class="navbar-form navbar-left" role="search">


              <div >

               <select id="filter" name="filt" class="form-control" required>
                <option value="">-- filter by name --</option >
                  <?php
                  $this->db->group_by('nama_project');
                  $get_project = $this->db->get_where('t_produksi');
                  $hasil_project = $get_project->result();

                  foreach ($hasil_project as $item) {
                    echo '<option value="'.$item->id_project.'">'.$item->nama_project.'</option>';
                  }
                  ?>
                </select>
              </div>

              <div class="form-group">
                <input id="input_project" type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn blue" id="btncari">Submit</button>
            </form>
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
            <div class="table-scrollable">
              <div class="box_ajax">
                <table class="table table-hover">
                  <thead>
                    <tr>

                      <th>
                        Nama Project
                      </th>
                      <th>
                       Fitur
                     </th>
                     <th>
                      In
                    </th>

                    <th>
                      Start
                    </th>
                    <th>
                      End
                    </th>
                    <th>
                     Out
                   </th>

                   <th>
                     Status
                   </th>
                   <th>File</th>
                   <th>
                     Action
                   </th>
                 </tr>
               </thead>
               <tbody>
                <?php

                $ambil_data = $this->db->query('SELECT * FROM t_produksi ORDER BY nama_project DESC  ');
                $hasil_ambil_data = $ambil_data->result_array();
                $tglsekarang = date('Y-m-d');

                foreach ($hasil_ambil_data as $item) {

                  if ($item['status'] != 'selesai'){
                    if ( date($item['end']) < $tglsekarang) {
                      $id = $item['id'];
                      $status['status'] = 'lost';
                      $this->db->update( "t_produksi", $status, array('id' => $id) );

                    } }?> 


                    <tr <?php  if($item['status']=='lost') { ?>  style="background: #ca7a7a;"  <?php } ?> >

                      <td>

                       <?php echo $item['nama_project'];?>
                     </td>
                     <td>
                       <?php echo $item['fitur'];?>
                     </td>
                     <td>
                       <?php echo tanggalindo($item['in']);?>
                     </td>
                     <td>
                       <?php echo tanggalindo($item['start']);?>
                     </td>
                     <td>
                       <?php echo tanggalindo($item['end']);?>
                     </td>
                     <td>
                       <?php echo tanggalindo($item['out']);?>
                     </td>

                     <td>

                      <?php 
                      if($item['status']=='proses'){

                        ?>
                        <span class="label label-primary">proses </span>
                        <label>&nbsp</label>

                        <?php

                      }
                      else if($item ['status']=='selesai'){
                        ?>
                        <span class="label label-success">selesai </span>
                        <label>&nbsp</label>

                        <?php 
                      }
                      else if($item['status']=='pending'){
                        ?>
                        <span  class="label label-warning"> pending </span>
                        <label>&nbsp</label>

                        <?php 
                      } 
                      else if($item['status']=='lost'){
                        ?>
                        <div > 


                          <span  class="label label-danger"> lost </span>
                          <label >&nbsp

                          </label>

                          <?php 
                        } 
                        ?>






                      </td>
                      <td>  

                        <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$item['file'] ?>">
                          <i class="glyphicon glyphicon-cloud-download"></i>
                        </a>

                      </td>
                      <td>
                        <div class="actions" style="width: 150px;">
                          <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'] ?>">
                            <i class="icon-note"></i>
                          </a>
                          <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/ubah?id_t_produksi='.$item['id'] ?>">
                            <i class="icon-wrench"></i>
                          </a>
                          <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/hapus?id_t_produksi='.$item['id'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')">
                            <i class="icon-trash"></i>
                          </a>

                        </div>

                      </td>


                    </tr>

                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- END SAMPLE TABLE PORTLET-->
      </div>

    </div>
  </div>




  <script>
    $(function () {

      $("#btncari").click(function()

        {var parameter = $('#input_project').val();
        var filter = $('#filter').val();
          $.ajax( {  
            type :"post",  
            url : "<?php echo base_url() . 'admin/t_produksi/cari' ?>",  
            cache :false,  
          data :({key:parameter,filter:filter}), //mengambil dari variable
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