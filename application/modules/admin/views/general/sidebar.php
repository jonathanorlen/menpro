<!-- BEGIN CONTAINER -->

<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start active ">
					<a href="<?php echo base_url().'admin/'?>">
						<i class="icon-home"></i>
						<span class="title">Dashboard</span>
						<span class="selected"></span>
					</a>
				</li>
				<?php 
				$user = $this->session->userdata('astrosession');

				$id  = $user[0]->id; 

				$get = $this->db->query("SELECT * FROM karyawan where id='$id'");
				$hasil = $get->row();

				$string_akses = $hasil->akses;
				$list_akses = (explode('|',$string_akses));  


				foreach ($list_akses as $item_akses) {
					?>


					<?php if ($item_akses == 'karyawan') { ?>
					<li >
						<a href="<?php echo base_url() . 'admin/karyawan' ?>">
							<i class="icon-paper-plane"></i>
							<span class="title">
								Karyawan </span>
							</a>
						</li>
						<?php } ?>
						<?php if ($item_akses == 'kategori_project') { ?>
						<li>
							<a href="<?php echo base_url().'admin/kategori_project'?>">
								<i class="icon-pencil"></i>
								<span class="title">Kategori Project</span>
								<span class="arrow "></span>
							</a>
						</li>
						<?php } ?>
						<?php if ($item_akses == 'project') { ?>
						<li>
							<a href="<?php echo base_url().'admin/project'?>">
								<i class="icon-basket"></i>
								<span class="title">Project</span>
								<span class="arrow "></span>
							</a>
						</li>
						<?php } ?>
						
						<?php if ($item_akses == 'h_project') { ?>
						<li>
							<a href="<?php echo base_url() . 'admin/h_project' ?>">
								<i class="icon-diamond"></i>
								<span class="title">History Project</span>
								<span class="arrow "></span>
							</a>

						</li>
						<?php } ?>
						<?php if ($item_akses == 't_produksi') { ?>
						<li>
							<a href="<?php echo base_url() . 'admin/t_produksi' ?>">
								<i class="icon-rocket"></i>
								<span class="title">Tanggungan Produksi</span>
								<span class="arrow "></span>
							</a>

						</li>
						<?php } ?>
						<?php if ($item_akses == 'crm') { ?>
						<li>
							<a href="<?php echo base_url() . 'admin/crm' ?>">
								<i class="icon-puzzle"></i>
								<span class="title">CRM</span>
								<span class="arrow "></span>
							</a>
						</li>
						<?php } ?>
						<!-- <?php if ($item_akses == 'testing') { ?>
						<li>
							<a href="<?php echo base_url() . 'admin/testing' ?>">
								<i class="icon-pencil"></i>
								<span class="title">Testing</span>
								<span class="arrow "></span>
							</a>
						</li>
						<?php } ?>
						<?php if ($item_akses == 'rev_klien') { ?>
						<li>
							<a href="<?php echo base_url() . 'admin/review_klien' ?>">
								<i class="icon-user"></i>
								<span class="title">Review Klien</span>
								<span class="arrow "></span>
							</a>
						</li>
						<?php } ?> -->


						<!-- BEGIN ANGULARJS LINK -->

						<!-- END ANGULARJS LINK -->

						<?php } ?>
					</ul>
					<!-- END SIDEBAR MENU -->
				</div>
			</div>
		<!-- END SIDEBAR -->