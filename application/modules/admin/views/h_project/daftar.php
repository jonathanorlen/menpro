<div class="page-content-wrapper">
	<div class="page-content">
		<div class="row">
			<div class="col-md-12">
				<div class="btn-group">
					<a href="<?php echo base_url() . 'admin/h_project/tambah'?>" ><button id="sample_editable_1_new" class="btn green">
						Tambah<i class="fa fa-plus"></i>
					</button></a>
				</div>



				<!-- BEGIN SAMPLE TABLE PORTLET-->
				<div class="portlet box red">

					<div class="portlet-title">
						
						<div class="caption">

							<i class="fa fa-cogs"></i>History project
						</div>

<!-- <div class="tools">
<a href="javascript:;" class="collapse">
</a>
<a href="#portlet-config" data-toggle="modal" class="config">
</a>
<a href="javascript:;" class="reload">
</a>
<a href="javascript:;" class="remove">
</a>
</div> -->


</div>
<div class="portlet-body" >

	<div class="row">
		<!-- <div class="col-md-4" id="trx_penjualan">
			<div class="input-group">
				<span class="input-group-addon">Tanggal Awal</span>
				<input type="date" class="form-control tgl" id="tgl_awal" />
			</div>
		</div>
		<div class="col-md-4" id="trx_penjualan">
			<div class="input-group">
				<span class="input-group-addon">Tanggal Akhir</span>
				<input type="date" class="form-control tgl" id="tgl_akhir" />
			</div>
		</div> -->
		<div class="col-md-3">
			<div class="form-group">
				<input id="filter" type="text" class="form-control" placeholder="Search">
			</div>

		</div>
		<div class="col-md-1">
			<div class="form-group">
				<button type="button" class="btn btn-success" onclick="search_produksi()"><i class="fa fa-search"></i>Cari</button>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		
	</div>
	<div class="table-scrollable">
		<div class="box_ajax">
			<div id="search_produksi">
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

						$ambil_data = $this->db->get('h_project');
						$hasil_ambil_data = $ambil_data->result_array();

						foreach ($hasil_ambil_data as $item) {
							?> 

							<tr>
								<td>
									<?php echo $item['nama_project'];?>
								</td>

								<td>
									<?php echo tanggalIndo($item['tgl']);?>
								</td>
								<td>
									<?php echo $item['versi'];?>
								</td>
								<td>
									<?php echo substr($item['update'],0,350);?>
								</td>

								<td>
									<div class="actions">
										<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/h_project/detail/'.$item['id'] ?>">
											<i class="icon-note"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/h_project/ubah/'.$item['id'] ?>">
											<i class="icon-wrench"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default" href="<?php echo base_url() . 'admin/h_project/hapus?id='.$item['id'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')">
											<i class="icon-trash"></i>
										</a>
									</div>
								</td>
							</tr>
							<?php 

							$parameter = $item['kode_histori'];
							$ambil_data_opsi = $this->db->get_where('opsi_hproject',array('kode_histori'  =>  $parameter));
							$hasil_ambil_data_opsi = $ambil_data_opsi->result_array();

							$no = 1;
							?>

							<?php
							if ($hasil_ambil_data_opsi){
								?>
								<tr>
									<th style="text-align:center; background: #eee	" colspan="6">Detail</th>
								</tr>
								<tr>
									<th>No.</th>
									<th>Modul</th>
									<th>Tanggal</th>
									<th>File</th>
									<th>Keterangan</th>
								</tr>
								<?php
							}
							foreach ($hasil_ambil_data_opsi as $item_opsi) {

								?>

								<tr>

									<td><?php echo $no++?></td>

									<td><?php echo $item_opsi['modul'];?></td>
									<td><?php echo tanggalIndo($item_opsi['tglopsi']);?></td>
									<td align="">
										<!--<img src="<?php echo base_url() . 'component/upload/file/uploads/'.$item_opsi['file'] ?>" width="50" height="50" >-->

										<?php
										$string_foto1 = $item_opsi['file'];
										$file = explode('|', $string_foto1);
										foreach ($file as $value) {
											if(!empty($value)){
												$gambar = explode('.',$value);
												if($gambar[1]=='jpg' OR $gambar[1]=="jpeg" OR $gambar[1]=="png" OR $gambar[1]=="PNG"){
													?>
													<a style="text-decoration: none;" target="_blank" href="<?php echo base_url().'component/upload/file/uploads/' ?><?php echo $value; ?>" >
														<img style="height: 200px;width: auto;" src="<?php echo base_url().'component/upload/file/uploads/'.$value; ?>" />
													</a><br />
													<?php }else if($gambar[1]=='pdf') {?>
													<a class="btn btn-warning green" target="_blank" href="<?php echo base_url().'component/upload/file/uploads/' ?><?php echo $value; ?>" ><i class="fa fa-search"> </i> View File
													</a> <br/>
													<?php } ?>
													<a href="<?php echo base_url().'component/upload/file/uploads/' ?><?php echo $value; ?>" download ><img  style="height: 50px; width: 50px;" src="<?php echo base_url().'public/img/contact.png' ?>" /><br><?php echo $value; ?> </a>
													<?php
												}
											}
											?>

										</td>
										<td><?php echo $item_opsi['keterangan'];?></td>
									</tr>
									<?php } ?>
								</div>
								<tr>
									<th style="text-align:center; background:#eee; height:40px;" colspan="9">
										<div class="progress">
											<div class="progress-bar progress-bar-default" role="progressbar" style="width: 100%; height:125%;" >

											</div>
										</div>
									</th>
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
<script>


	function search_produksi(){

		var parameter = $('#input_project').val();
		var filter = $("#filter").val();
		var tgl_awal = $("#tgl_awal").val();
		var tgl_akhir = $("#tgl_akhir").val();
		$.ajax( {  
			type :"post",  
			url : "<?php echo base_url().'admin/h_project/cari_project/'; ?>",  
			cache :false,
			data : {key:parameter,tgl_awal:tgl_awal,tgl_akhir:tgl_akhir,filter:filter},
			beforeSend:function(){
				$(".tunggu").show();  
			},
			success : function(data) {
				$("#search_produksi").html(data);
				$(".tunggu").hide();  
			},  
			error : function(data) {  
				alert("das");  
			}  
		});
	}
</script>