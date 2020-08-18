<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>Metronic | Admin Dashboard Template</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/global/plugins/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/global/plugins/simple-line-icons/simple-line-icons.min.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/global/plugins/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/global/plugins/uniform/css/uniform.default.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css'?>" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	<link href="<?php echo base_url() . 'component/template/assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/global/plugins/fullcalendar/fullcalendar.min.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/global/plugins/jqvmap/jqvmap/jqvmap.css'?>" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN PAGE STYLES -->
	<link href="<?php echo base_url() . 'component/template/assets/admin/pages/css/tasks.css'?>" rel="stylesheet" type="text/css"/>
	<!-- END PAGE STYLES -->
	<!-- BEGIN THEME STYLES -->
	<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css'?>' stylesheet instead of 'components.css'?>' in the below style tag -->
	<link href="<?php echo base_url() . 'component/template/assets/global/css/components.css'?>" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/global/css/plugins.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/admin/layout2/css/layout.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/admin/layout2/css/themes/grey.css'?>" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url() . 'component/template/assets/admin/layout2/css/custom.css'?>" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url() . 'component/template/assets/global/plugins/select2/select2.css '?>"  rel="stylesheet" type="text/css" />
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-fluid-width page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
	<!-- BEGIN HEADER -->
	<div class="page-header navbar navbar-fixed-top">
		<!-- BEGIN HEADER INNER -->
		<div class="page-header-inner">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<a href="index.html">
				</a>
				<div class="menu-toggler sidebar-toggler">
					<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
				</div>
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			</a>
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN PAGE ACTIONS -->
			<!-- DOC: Remove "hide" class to enable the page header actions -->
			<div class="page-actions hide">
				<div class="btn-group">
					<button type="button" class="btn btn-circle red-pink dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bar-chart"></i>&nbsp;<span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
					</button>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="javascript:;">
								<i class="icon-user"></i> New User </a>
							</li>
							<li>
								<a href="javascript:;">
									<i class="icon-present"></i> New Event <span class="badge badge-success">4</span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<i class="icon-basket"></i> New order </a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-flag"></i> Pending Orders <span class="badge badge-danger">4</span>
									</a>
								</li>
								<li>
									<a href="javascript:;">
										<i class="icon-users"></i> Pending Users <span class="badge badge-warning">12</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="btn-group">
							<button type="button" class="btn btn-circle green-haze dropdown-toggle" data-toggle="dropdown">
								<i class="icon-bell"></i>&nbsp;<span class="hidden-sm hidden-xs">Post&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="javascript:;">
										<i class="icon-docs"></i> New Post </a>
									</li>
									<li>
										<a href="javascript:;">
											<i class="icon-tag"></i> New Comment </a>
										</li>
										<li>
											<a href="javascript:;">
												<i class="icon-share"></i> Share </a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="javascript:;">
													<i class="icon-flag"></i> Comments <span class="badge badge-success">4</span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<i class="icon-users"></i> Feedbacks <span class="badge badge-danger">2</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- END PAGE ACTIONS -->
								<!-- BEGIN PAGE TOP -->
								<div class="page-top">
									<!-- BEGIN HEADER SEARCH BOX -->
									<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
									<form class="search-form search-form-expanded" action="extra_search.html" method="GET">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search..." name="query">
											<span class="input-group-btn">
												<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
											</span>
										</div>
									</form>
									<!-- END HEADER SEARCH BOX -->
									<!-- BEGIN TOP NAVIGATION MENU -->

									<?php 
									$ambil_data = $this->db->query('SELECT * FROM crm where tgl like CURDATE() ORDER BY tgl DESC');
									$hasil_ambil_data = $ambil_data->result_array();
									//echo $this->db->last_query();

									$tglsekarang = date('Y-m-d');
									?>
									<div class="top-menu">
										<ul class="nav navbar-nav pull-right">
											<!-- BEGIN NOTIFICATION DROPDOWN -->
											<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
											<?php 
											$user = $this->session->userdata('astrosession');

											$id  = $user[0]->id; 

											$get = $this->db->query("SELECT * FROM karyawan where id='$id'");
											$hasil = $get->row();
											$jabatan = $hasil->jabatan;

											if ($jabatan == 'admin'){ 


												?>
												<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
													<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
														<i class="icon-bell"></i>
														<span class="badge badge-default">
															<?php echo count($hasil_ambil_data )?> </span>
														</a>
														<ul class="dropdown-menu">
															<li class="external">
																<h3><span class="bold"><?php echo count($hasil_ambil_data);?> pending</span> notifications</h3>
																<a href="<?php echo base_url() . 'admin/crm' ?>">view all</a>
															</li>
															<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
																<?php


																foreach ($hasil_ambil_data as $item) {

																	if ($item['tgl'] == $tglsekarang){
																		?>
																		<li>
																			<a href="<?php echo base_url() . 'admin/crm/detail?id_crm='.$item['id'] ?>">
																				<span class="time"></span>
																				<span class="details">

																					<span class="label label-sm label-icon label-success">
																						<i class="fa fa-plus"></i>
																					</span>
																					<span class="subject">
																						<span style="font-weight:bold;color:#2196F3">
																							<?php echo $item['nama_project'];?></span>
																							<span class="time"><?php echo tanggalindo($item['tgl']);?></span>
																						</span>
																						<br>
																						<span style="font-size:12px;">
																							<?php echo $item['keterangan'];?>
																						</span>
																					</a>
																				</li>
																				<?php
																			}
																		}?>
																	</ul>
																</ul>
															</li>

															<?php
															$myDate = date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "+1 month" ) );
															$this->db->like("status","aktif");
															$ambil_data_karyawan = $this->db->query( 'SELECT * FROM karyawan WHERE tanggal_selesai_kontrak BETWEEN tanggal_masuk AND "' . $myDate . '" '  );
															$hasil_ambil_data_karyawan = $ambil_data_karyawan->result_array();
															?>
															<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
																<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																	<i class="icon-user"></i>
																	<span class="badge badge-default">
																		<?php echo count($hasil_ambil_data_karyawan);?></span>
																	</a>
																	<ul class="dropdown-menu">
																		<li class="external">
																			<h3>You have <span class="bold"><?php echo count($hasil_ambil_data_karyawan);?> New</span> Messages</h3>
																			<a href="<?php echo base_url() . 'admin/karyawan' ?>">view all</a>
																		</li>
																		<li>
																			<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
																				<?php


																				foreach ($hasil_ambil_data_karyawan as $item) {
																					?>
																					<li>
																						<a href="<?php echo base_url() . 'admin/karyawan/detail?id_karyawan='.$item['id'] ?>">
																							<span class="subject">
																								<span class="from">
																									<?php echo $item['nama'];?></span>
																									<span class="time"><?php echo @tanggalindo($item['tanggal_selesai_kontrak']);?></span>
																								</span>
																							</a>
																						</li>
																						<?php
																					}
																					?>

																				</ul>
																			</li>

																		</ul>
																	</li>
																	<!-- END NOTIFICATION DROPDOWN -->
																	<!-- BEGIN INBOX DROPDOWN -->
																	<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
																	<!-- <?php $ambil_data_t_produksi = $this->db->query("SELECT * FROM t_produksi WHERE status='lost'");
																	$hasil_ambil_data_t_produksi = $ambil_data_t_produksi->result_array();
																	?>
																	<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
																		<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																			<i class="icon-envelope-open"></i>
																			<span class="badge badge-default">
																				<?php echo count($hasil_ambil_data_t_produksi);?></span>
																			</a>
																			<ul class="dropdown-menu">
																				<li class="external">
																					<h3>You have <span class="bold"><?php echo count($hasil_ambil_data_t_produksi);?> New</span> Messages</h3>
																					<a href="<?php echo base_url() . 'admin/t_produksi' ?>">view all</a>
																				</li>
																				<li>

																					<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
																						<?php


																						foreach ($hasil_ambil_data_t_produksi as $item) {
																							?>
																							<li>
																								<a href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$item['id'] ?>">
																									<span class="subject">
																										<span class="from">
																											<?php echo $item['nama_project'];?></span>
																											<span class="time"><?php echo tanggalindo($item['end']);?></span>
																										</span>
																										<span class="message">
																											<?php echo $item['keterangan'];?></span>
																										</a>
																									</li>
																									<?php
																								}
																								?>

																							</ul>
																						</li>

																					</ul>
																				</li> -->
																				<?php } if ($jabatan == 'spv' || $jabatan == 'leader'){
																					?>

																					<?php $ambil_data_t_produksi = $this->db->query("SELECT * FROM opsi_tproduksi WHERE status='lost'");
																					$hasil_ambil_data_t_produksi = $ambil_data_t_produksi->result_array();
																					?>
																					<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
																						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																							<i class="icon-envelope-open"></i>
																							<span class="badge badge-default">
																								<?php echo count(@$hasil_ambil_data_t_produksi);?></span>
																							</a>
																							<ul class="dropdown-menu">
																								<li class="external">
																									<h3>You have <span class="bold"><?php echo count($hasil_ambil_data_t_produksi);?> New</span> Messages</h3>
																									<a href="<?php echo base_url() . 'admin/crm' ?>">view all</a>
																								</li>
																								<li>

																									<ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
																										<?php
																										$ambil_data_grup = $this->db->query("SELECT * FROM opsi_tproduksi GROUP BY kode_tproduksi");
																										$hasil_ambil_data_grup = $ambil_data_grup->result_array();


																										foreach ($hasil_ambil_data_grup as $item) {
																											$parameter = $item['kode_tproduksi'];



																											$ambil_data_opsi = $this->db->query("SELECT * FROM opsi_tproduksi WHERE kode_tproduksi = '$parameter' and status='lost'");
																											$hasil_ambil_data_opsi = $ambil_data_opsi->result_array();
														                                  #foreach ($hasil_ambil_data_opsi as $hit) {
																											$ambil_tpro = $this->db->query("SELECT * FROM t_produksi WHERE kode_tproduksi = '$parameter'");
																											$hasil_ambil_tpro = $ambil_tpro->row();
																											?>
																											<li>
																												<a href="<?php echo base_url() . 'admin/t_produksi/detail?id_t_produksi='.$hasil_ambil_tpro->id; ?>">
																													<span class="subject">
																														<span class="from">
																															<?php echo @$hasil_ambil_tpro->nama_project;?></span>
																															<span class="time"><?php echo @$hasil_ambil_tpro->end;?></span>
																														</span>
																														<?php #} ?>
																														<span class="badge badge-danger">
																															<?php echo count($hasil_ambil_data_opsi);?></span>
																														</a>
																													</li>
																													<?php
																												} 

																												?>

																											</ul>
																										</li>

																									</ul>
																								</li>


																								<?php }  ?>
																								<!-- END INBOX DROPDOWN -->
																								<!-- BEGIN TODO DROPDOWN -->
																								<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

																								<!-- END TODO DROPDOWN -->
																								<!-- BEGIN USER LOGIN DROPDOWN -->
																								<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
																								<li class="dropdown dropdown-user">
																									<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
																										<img alt="" class="img-circle" src="<?php echo base_url() . 'component/template/assets/admin/layout2/img/logo-astro.png'?>"/>
																										<span class="username username-hide-on-mobile">
																											<?php echo $hasil->nama;?> </span>
																											<i class="fa fa-angle-down"></i>
																										</a>
																										<ul class="dropdown-menu dropdown-menu-default">
																											<?php 
																											$user = $this->session->userdata('astrosession');

																											$id  = $user[0]->id;{
																												?> 
																												<li>
																													<a href="<?php echo base_url() . 'admin/karyawan/ubah?id_karyawan='.$id ?>">
																														<i class="icon-user"></i> My Profile </a>
																													</li>
																													<?php }
																													?>
																													<li>
																														<a href="<?php echo base_url() . 'authenticate/logout' ?>">
																															<i class="icon-key"></i> Log Out </a>
																														</li>
																													</ul>
																												</li>
																												<!-- END USER LOGIN DROPDOWN -->
																												<!-- BEGIN USER LOGIN DROPDOWN -->
																												<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

																												<!-- END USER LOGIN DROPDOWN -->
																											</ul>
																										</div>
																										<!-- END TOP NAVIGATION MENU -->
																									</div>
																									<!-- END PAGE TOP -->
																								</div>
																								<!-- END HEADER INNER -->
																							</div>
																							<!-- END HEADER -->
																							<div class="clearfix">
																							</div>

																							<script>
																								$(function () {

																									$("#notif").click(function()

																										{var parameter = $('#input_project').val();
																										var filter = $('#filter').val();
																										$.ajax( {  
																											type :"post",  
																											url : "<?php echo base_url() . 'admin/crm/notif' ?>",  
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

