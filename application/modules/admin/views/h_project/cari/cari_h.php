      
<?php


$param = $this->input->post();
              // $kode = $this->input->post('kode_transaksi');

            // if(@$param['tgl_awal'] && @$param['tgl_akhir'] && @$param['nama']){
            //   $nama = $param['nama'];
            //   $tgl_awal = $param['tgl_awal'];
            //   $tgl_akhir = $param['tgl_akhir'];
            // $this->db->where('nama', $nama);
            // $this->db->where('tanggal_order >=', $tgl_awal);
            // $this->db->where('tanggal_order <=', $tgl_akhir);
            // }

if(@$param['tgl_awal'] && @$param['tgl_akhir']){

  $tgl_awal = $param['tgl_awal'];
  $tgl_akhir = $param['tgl_akhir'];
              //$kode_unit = $param['kode_unit'];

  $this->db->where('tgl >=', $tgl_awal);
  $this->db->where('tgl <=', $tgl_akhir);
            //$this->db->where('position =', 'gudang');

}
$this->db->limit(50);
$this->db->select('*');
$this->db->order_by('id', 'desc');
$this->db->from('h_project');
$ambil = $this->db->get();
$hasil_ambil_data = $ambil->result();

$total=0;

?>                     
                        
                         <table class="table table-hover">
                  <thead>
                  <tr>
                    <th>
                       Nama Project
                    </th>
                    <th>
                       Tanggal
                    </th>
                    <th>
                       Versi
                    </th>
                    <th>
                       Update
                    </th>
                    <th>
                       Action
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php


                                           foreach ($hasil_ambil_data as $item) {
                            ?> 

                  <tr>
                    <td>
                       <?php echo $item->nama_project;?>
                    </td>

                    <td>
                       <?php echo $item->tgl;?>
                    </td>
                    <td>
                       <?php echo $item->versi;?>
                    </td>
                    <td>
                       <?php echo $item->update;?>
                    </td>
                    
                    <td>
                      <div class="actions">
                  <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/H_project/detail?id_hproject='.$item['id'] ?>">
                  <i class="icon-note"></i>
                  </a>
                  <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/h_project/ubah?id_hproject='.$item['id'] ?>">
                  <i class="icon-wrench"></i>
                  </a>
                  <a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/h_project/hapus?id='.$item['id'] ?>">
                  <i class="icon-trash"></i>
                  </a>
                </div>
                    </td>

                   
                  </tr>
                  
                            <?php } ?>
                  </tbody>
                  </table>