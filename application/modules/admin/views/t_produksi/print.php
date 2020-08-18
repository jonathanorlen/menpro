<!DOCTYPE html>
<html>
<head>
	<title>Print</title>
</head>
<body onload="window.print();">
	<table style="width: 100%;border-collapse: collapse;" border="1">
		<tr>
			<td rowspan="5" style="width: 20%;text-align: center;"><img src="<?php echo base_url() . 'component\upload\foto\uploads\logoastro.png'?>" style=" width: 150px;"></td>
			<td rowspan="5" style="text-align: center;font-weight: bold;width: 30%;">Formulir</td>
			<td style="border-right: none;width: 20%;">No. Dokumen</td>
			<td style="border-left:none;">: CA/FP-18/<?php echo date('m') ?>/<?php echo date('Y')?></td>
			<tr>
				<td style="border-right: none;">No. Revisi</td>
				<td style="border-left:none;width: 60%;">: - </td>
			</tr>
			<tr>
				<td style="border-right: none;">Tanggal</td>
				<td style="border-left:none;">: 30 Maret 2017</td>
			</tr>
			<tr>
				<td style="border-right: none;">Halaman</td>
				<td style="border-left:none;">: 1 </td>
			</tr>
			<tr>
				<td style="border-right: none;">Jenis</td>
				<td style="border-left:none;">: Publish</td>
			</tr>
		</tr>
	</table>
	<?php
	$pic = $this->uri->segment(4);
	$idproject = $this->uri->segment(5);

	$get_user = $this->db->get_where("karyawan",array('id'=>$pic));
	$hasil_user = $get_user->row();


	$get_project = $this->db->get_where("t_produksi",array('id'=>$idproject));
	$hasil_project = $get_project->row();

	?>
	<center>
		<p style="font-weight: bold;"><u>SURAT TUGAS</u></p></center>
		<center>
			<table width="95%">
				<tr>
					<td colspan="2">
						Yang bertanda tangan dibawah ini, SPV Cloud Astro memberikan tugas kepada : 
					</td>
				</tr>
				<tr>
					<td style="width: 20%">Nama</td>
					<td>:&nbsp<?php
					$nama_pekerja = $hasil_user->nama; echo $nama_pekerja;?></td>
				</tr>
				<tr>
					<td>Jabatan</td>
					<td>:&nbsp<?php echo $hasil_user->jabatan;?></td>
				</tr>
				<tr>
					<td>Unit Kerja</td>
					<td>:&nbspProduksi</td>
				</tr>
				<tr>
					<td colspan="2">Untuk melakukan implementasi proyek dengan spesifikasi sebagai berikut :</td>
				</tr>
				<tr>
					<td>Nama Proyek</td>
					<td>:&nbsp<?php echo $hasil_project->nama_project;?></td>
				</tr>
				
				<tr>
					<td>Keterangan lain</td>
					<td>:&nbsp</td>
				</tr>
			</table>
		</center>
		<center>
			<table border="1" style="border-collapse: collapse;" width="95%">
				<tr>
					<td style="text-align: center; width:20%;font-weight: bold;">Tanggal</td>
					<td style="text-align: center;font-weight: bold;">Modul</td>
					<td style="text-align: center;font-weight: bold;">Keterangan</td>
				</tr>
				<?php 


					$get = $this->db->get_where('opsi_tproduksi',array('id_karyawan'=>$pic));
					$hasil_get = $get->result();

					foreach ($hasil_get as $item) {
					

					?>
					<tr>
						<td>&nbsp<?php
							$sekarang = date("Y-m-d");
							echo tanggalindo($sekarang);?></td>
							<td>&nbsp <?php echo $item->submodul;?></td>
							<td>&nbsp</td>
						</tr>
						<?php } ?>

					</table>
				</center>
				<center>
					<table width="95%">
						<tr>
							<td>Demikian surat tugas ini diberikan untuk dapat dilakukan dengan penuh tanggung jawab dan setelah selesei mengikuti kegiatan dimohon untuk menyampaikan laporan secara tertulis.
							</td>
						</tr>

						<tr>
							<td style="float: right;width: 32%; margin-top:50px;">Malang,<?php echo tanggalindo(date('Y-m-d'));?></td>
						</tr>
						<tr>
							<td style="float: left;">PIC</td>
							<td style="float: right; width: 32%">Ass. Supervisor</td>
						</tr>
						<tr>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>&nbsp</td>
						</tr>
					</table>
					<table width="95%">
						<tr>
							<td style="float: left;width: 100%"><u><?php echo $nama_pekerja;?></u></td>
							<td style="width: 30%">&nbsp</td>
							<td style="float: right;width: 100%"><u>Ryan Yolanda V.</u></td>
						</tr>
						<tr>
							<td style="float: left;width: 100%">250114 3 030</td>
							<td style="width: 40%;text-align: center;">SPV Cloud Astro</td>
							<td style="float: right;width: 100%">250114 3 025</td>
						</tr>
						<tr>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td>&nbsp</td>
						</tr>
					</table>
				</center>
				<center>
					<table width="95%">
						<tr>
							<td style="text-align:center;width: 100%; vertical-align: bottom ;"><u>M. Irvan Charis, A.Md</u></td>
						</tr>
						<tr>
							<td style="text-align:center;width: 100% ">350114 3 026</td>
						</tr> 
					</table>
				</center>
				<p><input type="checkbox" />Briefing teknis</p>
				<p><input type="checkbox" />Analisa teknis</p>
				<p><input type="checkbox" />Tahapan teknis</p>
			</body>
			</html>
			<style type="text/css">
				body {
					font-family: arial;
				}
			</style>