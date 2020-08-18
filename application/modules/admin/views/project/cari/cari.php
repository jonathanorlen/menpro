                 

<table class="table table-hover">
  <thead>
    <tr id="pulsate-regular" style="padding:5px;">
      <th>
       Project
     </th>
     <th>
       PIC
     </th>
     <th>
       Alamat
     </th>
     <th>
       Telp
     </th>
     <th>
       status
     </th>
     <th>
       Status Project
     </th>
     <?php 
     $user = $this->session->userdata('astrosession');

     $id  = $user[0]->id; 

     $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
     $hasil = $get->row();
     $jabatan = $hasil->jabatan;

     if ($jabatan == 'spv'){


      ?>      
      <th>
       upload
     </th>
     <th>
       Action
     </th>                 


     <?php } if ( $jabatan == 'admin' || $jabatan =='leader') { ?>
     <th>
       Action
     </th>        


     <?php }    ?>

   </tr>
 </thead>
 <tbody>


  <?php
  $data=$this->input->post();
  $key =$data['key'];
  $filter_status = @$data['sts'];



  if($key){
    $this->db->like('project',$key,'both');

  }
  if($filter_status){
    $this->db->where('status',$filter_status);

  }

  $ambil_data = $this->db->get('project');
  $hasil_ambil_data = $ambil_data->result_array();



  foreach ($hasil_ambil_data as $item) {
    ?> 
    <tr>
      <td>
        <?php echo $item['project'];?>
      </td>
      <td>
       <?php echo $item['pic'];?>
     </td>
     <td>
       <?php echo $item['alamat'];?>
     </td>
     <td>
       <?php echo $item['telp'];?>
     </td>
     <td>

      <?php 

      if($item ['status']=='close'){
        ?>
        <span class="label label-success">close </span>
        <label>&nbsp</label>

        <?php 
      }
      else if($item['status']=='suspend'){
        ?>
        <span  class="label label-warning"> suspend </span>
        <label>&nbsp</label>

        <?php 
      } 
      else if($item['status']=='open'){
        ?>
        <div > 


          <span  class="label label-danger"> open </span>
          <label >&nbsp

          </label>

          <?php 
        } 
        else if($item['status']=='pending'){
          ?>
          <div > 


            <span  class="label label-primary"> pending </span>
            <label >&nbsp

            </label>

            <?php 
          } 
          ?>






        </td>
        <td>

          <?php 

          if($item ['status_project']=='ready'){
            ?>
            <span class="label label-success">ready </span>
            <label>&nbsp</label>

            <?php 
          }
          else if($item['status_project']=='unregister'){
            ?>
            <span  class="label label-warning"> unregister </span>
            <label>&nbsp</label>

            <?php 
          } 
          else if($item['status_project']=='Suspend'){
            ?>
            <div > 


              <span  class="label label-danger"> Suspend </span>
              <label >&nbsp

              </label>

              <?php 
            }?> 
          </td>
          <?php 
          $user = $this->session->userdata('astrosession');

          $id  = $user[0]->id; 

          $get = $this->db->query("SELECT * FROM karyawan where id='$id'");
          $hasil = $get->row();
          $jabatan = $hasil->jabatan;

          if ($jabatan == 'spv'){


            ?>                       

            <td>  

              <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'component/upload/file/uploads/'.$item['file'] ?>">
                <i class="glyphicon glyphicon-cloud-download" title="uploads"></i>
              </a>  

            </td>

            <td>
              <div class="actions">
                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/project/detail?id_project='.$item['id'] ?>">
                  <i class="icon-note" title="Detail"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/project/ubah?id_project='.$item['id'] ?>">
                  <i class="icon-wrench" title="Edit"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/project/detail_key?id_project='.$item['id'] ?>">
                  <i class="icon-key" title="Generate Key"></i>
                </a>
                <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/project/hapus?id='.$item['id'] ?>">
                  <i class="icon-trash" title="hapus"></i>
                </a>
              </div>
            </td>


          </tr>
          <?php } if ( $jabatan == 'admin' || $jabatan =='leader') { ?>
          <td>
            <div class="actions">
              <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/project/detail?id_project='.$item['id'] ?>">
                <i class="icon-note"></i>
              </a>
            </div>
          </td>

          <?php }    ?>
          <?php }    ?>

        </tbody>
      </table>