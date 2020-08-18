<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body onload="window.print()">
	<table style="width: 100%;border-collapse: collapse;" border="1">
		<tr>
			<td rowspan="5" style="width: 20%;text-align: center;">Gambar</td>
			<td rowspan="5" style="text-align: center;font-weight: bold;width: 30%;">Formulir</td>
			<td style="border-right: none;width: 20%;">No. Dokumen</td>
			<td style="border-left:none;">: ....../FM-CA/bln/2017</td>
			<tr>
				<td style="border-right: none;">No. Revisi</td>
				<td style="border-left:none;width: 60%;">:</td>
			</tr>
			<tr>
				<td style="border-right: none;">Tanggal</td>
				<td style="border-left:none;">: <?php echo tanggalindo(date('Y-m-d'));?></td>
			</tr>
			<tr>
				<td style="border-right: none;">Halaman</td>
				<td style="border-left:none;">:</td>
			</tr>
			<tr>
				<td style="border-right: none;">Jenis</td>
				<td style="border-left:none;">: No Publish</td>
			</tr>
		</tr>
		<tr>
			<td style="text-align: center;font-weight: bold;">JUDUL : </td>
			<td colspan="3" style="text-align: center;font-weight: bold;">FORM LIST TANGGUNGAN PRODUKSI</td>
		</tr>
	</table>

	<center>
		<p style="font-weight: bold;"><u>LIST TANGGUNGAN PRODUKSI</u></p>
	</center>

	<center>
		<table border="1" style="border-collapse: collapse;" width="100%">
			<tr>
				<td colspan="2" style="text-align: center;font-weight: bold;">Nama Project</td>
				<td style="text-align: center;font-weight: bold;">In</td>
				<td style="text-align: center;font-weight: bold;">Start</td>
				<td style="text-align: center;font-weight: bold;">End</td>	
				<td style="text-align: center;font-weight: bold;">Out</td>	
				<td style="text-align: center;font-weight: bold;">Analisa</td>	
				<td style="text-align: center;font-weight: bold;">Tahapan</td>	
			</tr>
			<?php 

			$get_tproduksi = $this->db->get("t_produksi");
			$hasil_get_t = $get_tproduksi->result();

			foreach ($hasil_get_t as $item) {
				?>
				<tr>
					<td colspan="2" style="text-align: center;"><?php echo $item->nama_project; ?></td>
					<td style="text-align: center;"><?php echo tanggalindo($item->in); ?></td>
					<td style="text-align: center;"><?php echo tanggalindo($item->start); ?></td>
					<td style="text-align: center;"><?php echo tanggalindo($item->end); ?></td>	
					<td style="text-align: center;"><?php echo tanggalindo($item->out);?></td>	
					<td style="text-align: center;"><?php echo $item->analisa; ?></td>	
					<td style="text-align: center;"><?php echo $item->tahapan; ?></td>	
				</tr>


			
			<?php 

                                              $parameter = $item->kode_tproduksi;
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
                                                  <th>Modul</th>
                                                  <th>SubModul</th>
                                                  <th>fitur</th>
                                                  <th>status</th>
                                                  <th>Start</th>
                                                  <th>End</th>
                                                  <th colspan="2" style="text-align:center;">Keterangan</th>
                                                </tr>
                                                <?php
                                              }
                                              foreach ($hasil_ambil_data_opsi as $item_opsi) {

                                                ?>

                                                <tr>

                                                  <td><?php echo $no++?></td>

                                                  <td><?php echo $item_opsi['modul'];?></td>
                                                  <td><?php echo $item_opsi['submodul'];?></td>
                                                  <td><?php echo $item_opsi['fitur'];?></td>
                                                  <td>

                                                    <?php 
                                                    if($item_opsi['status']=='proses'){

                                                      ?>
                                                      <span>proses </span>
                                                      <label>&nbsp</label>

                                                      <?php

                                                    }
                                                    elseif($item_opsi['status']=='selesai'){
                                                      ?>
                                                      <span>selesai </span>
                                                      <label>&nbsp</label>

                                                      <?php 
                                                    }
                                                    elseif($item_opsi['status']=='pending'){
                                                      ?>
                                                      <span> pending </span>
                                                      <label>&nbsp</label>

                                                      <?php 
                                                    } 
                                                    elseif($item_opsi['status']=='lost'){
                                                      ?>
                                                      <span> lost </span>
                                                      <label >&nbsp</label>

                                                      <?php 
                                                    } 
                                                    ?>
                                                  </td>
                                                  <td><?php echo tanggalindo($item_opsi['start']);?></td>
                                                  <td><?php echo tanggalindo($item_opsi['end']);?></td>
                                                  <td><?php echo $item_opsi['keterangan'];?></td>
                                                </tr>
                                                <?php } 
                                                 } ?>
                                                	


		</table>
	</center>

</body>
</html>
<style type="text/css">
	body {
		font-family: arial;
	}
</style>