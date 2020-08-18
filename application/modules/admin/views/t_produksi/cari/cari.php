<style type="text/css" media="print">

  @media print
  {
    .tabel2{
      font-size:15px;border-collapse: collapse;
    }
    .tabel2 tr th{
      border: 1px solid #222;
    }
    .tabel2 tr td{
      border: 1px solid #222;
    }
  }

</style>
<table  style="width: 100%;border-collapse: collapse;"  class="table table-hover tabel2" id="tabel_daftar">
  <thead>
    <tr>

      <th >
        Nama Project
      </th>
      <th style="text-align:center;" colspan="4">
        In
      </th>
      <th style="text-align: center;">
        Analisa
      </th>
      <th style="text-align: center;">
        Tahapan
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
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAction
        </th>
        <?php }
        if ($jabatan == 'programer') { ?>




        <th>
          Upload
        </th>
        <th>
          Action
        </th>

        <?php } if ($jabatan == 'leader' || $jabatan =='admin') { ?> 

        <th>
          Action
        </th>
        <?php } ?>



      </tr>
    </thead>
    <tbody>
      <?php


      $data=$this->input->post();
      $key=$data['key'];
      $filter=$data['filter'];
      $filter_status = @$data['filter_status'];
      $tgl_awal=@$data['tgl_awal'];
      $tgl_akhir=@$data['tgl_akhir'];


// $ambil_data = $this->db->query("SELECT * FROM t_produksi where id_project = '$filter' and status = '$statusnot' and fitur like '%$key%' ORDER BY nama_project DESC ");

      if($filter){
        $this->db->where('nama_project',$filter);

      }

      if (!empty($tgl_awal) and !empty($tgl_akhir)) {
        $this->db->where('in >=',$tgl_awal);
        $this->db->where('out <=',$tgl_akhir);
      }

      $ambil_data = $this->db->get('t_produksi');


      $hasil_ambil_data = $ambil_data->result_array();
      $tglsekarang = date('Y-m-d');

      foreach ($hasil_ambil_data as $item) {  
        $get_pic = explode("|", $item['pic']);
        if(in_array($user[0]->id, $get_pic) || $user[0]->jabatan == 'spv' || $user[0]->jabatan == 'admin' || $user[0]->jabatan == 'leader' ){


          if ($item['status'] != 'selesai'){
            if ( date(@$item['end']) < $tglsekarang) {
              $id = $item['id'];
              $status['status'] = 'lost';
              $this->db->update( "t_produksi", $status, array('id' => $id) );

            } }?> 






            <tr <?php  if($item['status']=='lost') { ?>  style="background: #f1c6c6;"  <?php } ?> >

              <td>

                <?php echo $item['nama_project'];?>
              </td>
              <td style="text-align: center;" colspan="4">
                <?php echo tanggalindo($item['in']);?>
              </td>

              <td style="text-align: center;">
                <?php 
                if ($item['analisa']=='sudah'){
                  ?>
                  <img style="width: 27px; height: 27px;" src="<?php echo base_url() . 'component/admin/icons/sudah.png'?>";>

                  <?php }
                  else if ($item['analisa']=='belum'){
                    ?>
                    <img style="width: 27px; height: 27px;" src="<?php echo base_url() . 'component/admin/icons/belum.png'?>";>


                    <?php }
                    ?>

                  </td>
                  <td style="text-align: center;">
                    <?php 
                    if ($item['tahapan']=='sudah'){
                      ?>
                      <img style="width: 27px; height: 27px;" src="<?php echo base_url() . 'component/admin/icons/sudah.png'?>";>

                      <?php }
                      else if ($item['tahapan']=='belum'){
                        ?>
                        <img style="width: 27px; height: 27px;" src="<?php echo base_url() . 'component/admin/icons/belum.png'?>";>

                        <?php }
                        ?>
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
                          <div class="actions" style="width: 150px;">
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ; ?>">
                              <i class="icon-note"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/ubah/'.$item['id'].'/'.$item['kode_tproduksi']; ?>">
                              <i class="icon-wrench"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/hapus?id_t_produksi='.$item['id']; ?>">
                              <i class="icon-trash"></i>
                            </a>
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/surat_tugas/'.$item['id'].'/'.$item['kode_tproduksi']; ?>">
                              <i class="fa fa-print"></i>
                            </a>

                          </div>


                        </td>


                        <?php }
                        if ($jabatan == 'programer') { ?>
                        <td>  
                          <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/programer/tambah?id_t_produksi='.$item['id_project'] ?>">
                            <i class="glyphicon glyphicon-cloud-download"></i>
                          </a>
                        </td>
                        <td>
                          <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id']; ?>">
                            <i class="icon-note"></i>
                          </a>
                        </td>

                        <?php } if ($jabatan == 'leader' || $jabatan == 'admin') { ?> 
                        <td>
                          <div class="actions" style="width: 150px;">
                            <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ; ?>">
                              <i class="icon-note"></i>
                            </a>


                          </div>

                        </td>

                        <?php } ?>

                      </tr>

                      <?php 

                      $parameter = $item['kode_tproduksi'];

                      if($key){
                        $this->db->like('fitur',$key,'both');


                      }
                      if($filter_status){
                        $this->db->where('status',$filter_status );

                      }

                      $ambil_data_opsi = $this->db->get_where('opsi_tproduksi',array('kode_tproduksi'  =>  $parameter));
                      $hasil_ambil_data_opsi = $ambil_data_opsi->result_array();

                      $no = 1;
                      ?>

                      <?php
                      if ($hasil_ambil_data_opsi){
                        ?>
                        <tr>
                          <th style="text-align:center; background: #eee  " colspan="9">Detail Program</th>
                        </tr>
                        <tr>
                          <th>No.</th>
                          <th colspan="3">Modul</th>
                          <th>status</th>
                          <th colspan="2" style="text-align:center;">Timeline</th>

                          <th colspan="2">Keterangan</th>
                        </tr>
                        <?php
                      }
                      foreach ($hasil_ambil_data_opsi as $item_opsi) {

                        ?>

                        <tr>

                          <td><?php echo $no++?></td>

                          <td colspan="3"><?php echo $item_opsi['modul']; if (!empty($item_opsi['submodul'])) { ?>  - <?php } echo $item_opsi['submodul'];  if (!empty($item_opsi['fitur'])) { ?> - <?php } echo $item_opsi['fitur'];?></td>
                          <td>

                            <?php 
                            if($item_opsi['status']=='proses'){

                              ?>
                              <span class="label label-primary">proses </span>
                              <label>&nbsp</label>

                              <?php

                            }
                            elseif($item_opsi['status']=='selesai'){
                              ?>
                              <span class="label label-success">selesai </span>
                              <label>&nbsp</label>

                              <?php 
                            } 
                            elseif($item_opsi['status']=='revisi'){
                              ?>
                              <span class="label label-danger">revisi </span>
                              <label>&nbsp</label>

                              <?php 
                            }
                            elseif($item_opsi['status']=='pending'){
                              ?>
                              <span  class="label label-warning"> pending </span>
                              <label>&nbsp</label>

                              <?php 
                            } 
                            elseif($item_opsi['status']=='lost'){
                              ?>
                              <span  class="label label-danger"> lost </span>
                              <label >&nbsp</label>

                              <?php 
                            } 
                            ?>
                          </td>
                          <td colspan="2" style="text-align:center;"><?php echo tanggalindo($item_opsi['start']);?> - <?php echo tanggalindo($item_opsi['end']);?></td>
                          <td><?php echo $item_opsi['keterangan'];?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                          <th style="text-align:center; background:#eee; height:40px;" colspan="9">
                            <div class="progress">
                              <div class="progress-bar progress-bar-default" role="progressbar" style="width: 100%; height:125%;" >

                              </div>
                            </div>
                          </th>
                        </tr>
                        <?php } ?>





                        <?php }  ?>
                      </tbody>
                    </table>






                    <!-- TABEL 2 -->
                    <div class="table-scrollable">

                      <div id="cetak_project">


                        <div class="box_ajax">
                          <style type="text/css" media="print">

                            @media print
                            {
                              .tabel2{
                                font-size:15px;border-collapse: collapse;
                              }
                              .tabel2 tr th{
                                border: 1px solid #222;
                              }
                              .tabel2 tr td{
                                border: 1px solid #222;
                              }
                            }

                          </style>
                          <div id="tabel2">
                            <table style="width: 100%;border-collapse: collapse;" class="table table-hover tabel2" >
                              <div >
                                <center>
                                  <p style="font-weight: bold;text-decoration: none;">LIST KEKURANGAN PROJECT MEI 2017</p>
                                </center>
                              </br>


                            </div>
                            <thead>
                              <tr style="background-color: skyblue;">
                                <th colspan="">
                                  No.
                                </th>
                                <th colspan="">
                                  Nama Project
                                </th>

                                <th  style="text-align: center;" colspan="">
                                  Keterangan
                                </th>
                                <th   style="text-align: center;">
                                  Tahapan
                                </th>
                                <th   style="text-align: center;">
                                  Strategi
                                </th>
                                <th   style="text-align: center;">
                                  Timeline
                                </th>
                                <th   style="text-align: center;">
                                  PIC
                                </th>
                                <th   style="text-align: center;">
                                  Status
                                </th>

                                <?php 


                                if ($jabatan == 'spv'){


                                  ?>



                                  <?php }


                                  if ($jabatan == 'programer') { ?>
                                  <th>
                                    Upload
                                  </th>
                                  <th>
                                    <div class="hideaction">
                                      Action
                                    </div>
                                  </th>

                                  <?php } ?>

                                  <?php if ($jabatan == 'leader' || $jabatan =='admin') { ?> 

                                  <th>
                                    <div class="hideaction">
                                      Action
                                    </div>
                                  </th>

                                  <?php }  ?>



                                </tr>

                              </thead>
                              <tbody>
                                <?php


// $ambil_data = $this->db->query("SELECT * FROM t_produksi WHERE status != 'selesai' ORDER BY nama_project DESC");
                                if($filter){
                                  $this->db->where('nama_project',$filter);

                                }

                                if (!empty($tgl_awal) and !empty($tgl_akhir)) {
                                  $this->db->where('in >=',$tgl_awal);
                                  $this->db->where('out <=',$tgl_akhir);
                                }

                                $ambil_data = $this->db->get('t_produksi');


                                $hasil_ambil_data = $ambil_data->result_array();
                                $tglsekarang = date('Y-m-d');
                                $no=1;
                                foreach ($hasil_ambil_data as $item) {  
                                  $get_pic = explode("|", $item['pic']);
                                  if(in_array($user[0]->id, $get_pic) || $user[0]->jabatan == 'spv' || $user[0]->jabatan == 'admin' || $user[0]->jabatan == 'leader'  ){


                                    if ($item['status'] != 'selesai'){
                                      if ( date(@$item['end']) < $tglsekarang) {
                                        $id = $item['id'];
                                        $status['status'] = 'lost';
                                        $this->db->update( "t_produksi", $status, array('id' => $id) );


                                      } }?> 






                                      <tr  >

                                        <td colspan="" style="text-align: center;">

                                          <?php echo $no++;?>
                                        </td>

                                        <td colspan="" style="text-align: center;">

                                          <?php echo $item['nama_project'];?>
                                        </td>

                                        <td >
                                          <?php 
                                          $parameter = $item['kode_tproduksi'];
                                          $ambil_data_opsi_atas = $this->db->get_where('opsi_tproduksi',array('kode_tproduksi'  =>  $parameter));
                                          $hasil_ambil_data_opsi_atas = $ambil_data_opsi_atas->result_array();
                                          foreach($hasil_ambil_data_opsi_atas as $value){
                                            ?>
                                            <?php echo $value['modul']; if (!empty($value['submodul'])) { ?>  - <?php } echo $value['submodul'];  if (!empty($value['fitur'])) { ?> - <?php } echo $value['fitur'];?><br>
                                            <?php } ?>
                                          </td>

                                          <td   style="text-align: center;" >
                                            &nbsp

                                          </td>
                                          <td   style="text-align: center;">
                                            &nbsp
                                          </td>

                                        </td>
                                        <td   style="text-align: center;">
                                          <?php foreach($hasil_ambil_data_opsi_atas as $value){
                                            ?>
                                            <?php echo tanggalindo($item_opsi['start']);?> - <?php echo tanggalindo($item_opsi['end']);?><br> 
                                            <?php } ?>
                                          </td>

                                        </td>
                                        <td   style="text-align: center;">
                                          &nbsp
                                        </td>




                                        <?php 


                                        if ($jabatan == 'spv'){


                                          ?>


<!-- <td>
<div class="actions" style="width: 150px;">
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ?>">
<i class="icon-note"></i>
</a>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/ubah/'.$item['id'].'/'.$item['kode_tproduksi']; ?>">
<i class="icon-wrench"></i>
</a>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/hapus?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')">
<i class="icon-trash"></i>
</a>
<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/surat_tugas/'.$item['id'].'/'.$item['kode_tproduksi']; ?>">
<i class="fa fa-print"></i>
</a>

</div>

</td> -->







<?php } ?>

<!-- <tr>
<th style="text-align:center; background:#eee; height:40px;" colspan="9">
  <div class="progress">
  <div class="progress-bar progress-bar-default" role="progressbar" style="width: 100%; height:125%;" >
    
  </div>
</div>
</th>
</tr> -->

<?php }
if ($jabatan == 'programer') { ?>
<td>  
  <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/programer/tambah?id_t_produksi='.$item['id_project'] ?>">
    <i class="glyphicon glyphicon-cloud-download"></i>
  </a>
</td>
<td>
  <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ; ?>">
    <i class="icon-note"></i>
  </a>
</td>

<?php }?> 
<?php if ($jabatan == 'leader' || $jabatan == 'admin') { ?> 
<td>
  <div class="actions" style="width: 150px;">
    <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'].'/'.$item['kode_tproduksi']; ; ?>">
      <i class="icon-note"></i>
    </a>

  </div>

</td>

<?php }  ?>

</tr>




<?php } ?>





</tbody>

</table>
</div>
</div>
</div>
</div>
<!-- end table 2 -->
