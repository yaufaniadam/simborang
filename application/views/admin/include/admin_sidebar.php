<!-- Brand Logo -->
<a href="<?= base_url() ?>admin/dashboard" class="brand-link navbar-success">
	<img src="<?= base_url() ?>public/dist/img/logo.png" alt="SIM Borang UMY" class="brand-image">
	<span class="brand-text font-weight-light">SIM Borang UMY</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-legacy" data-widget="treeview" role="menu"
			data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-item" id="beranda">
				<a href="<?= base_url() ?>admin/dashboard" class="nav-link">
					<i class="nav-icon fas fa-home"></i>
					<p>
						Beranda
					</p>
				</a>
			</li>


			<!-- Menu APT -->
			<li class="nav-header">AKREDITASI PERGURUAN TINGGI</li>
			<li class="nav-item has-treeview" id="apt">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-building"></i>
					<p>
						Akreditasi PT
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				
				<ul class="nav nav-treeview">
					<?php
					
					foreach(menu_category('apt') as $menu) { ?>
					<li class="nav-item sub-<?= $menu['id'] ?>">
						<a href="<?= base_url() ?>admin/apt/dokumen/<?= $menu['id'] ?> " class="nav-link">
							<i class="nav-icon far fa-circle"></i>
							<p>
								<?= $menu['kategori_dokumen']?>
							</p>
						</a>
					</li>
					<?php } ?>

				</ul>
			</li>
						
			<li class="nav-item has-treeview" id="ai">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-globe"></i>
					<p>
						Akreditasi Internasional
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>

				<ul class="nav nav-treeview">
					<?php foreach(menu_category('ai') as $menu) { ?>
					<li class="nav-item sub-<?= $menu['id'] ?>">
						<a href="<?= base_url() ?>admin/ai/dokumen/<?= $menu['id'] ?> " class="nav-link">
							<i class="nav-icon far fa-circle"></i>
							<p>
								<?= $menu['kategori_dokumen']?>
							</p>
						</a>
					</li>
					<?php } ?>

				</ul>
			</li>
			<li class="nav-item has-treeview" id="si">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-globe"></i>
					<p>
						Sertifikasi Internasional
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>

				<ul class="nav nav-treeview">
					<?php foreach(menu_category('si') as $menu) { ?>
					<li class="nav-item sub-<?= $menu['id'] ?>">
						<a href="<?= base_url() ?>admin/si/dokumen/<?= $menu['id'] ?> " class="nav-link">
							<i class="nav-icon far fa-circle"></i>
							<p>
								<?= $menu['kategori_dokumen']?>
							</p>
						</a>
					</li>
					<?php } ?>

				</ul>
			</li>


			<!-- /Menu APT -->

			<!-- Menu APS -->
			<li class="nav-header">AKREDITASI PROGRAM STUDI</li>

			<li class="nav-item has-treeview" id="fakultas">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-graduation-cap"></i>
					<p>
						Fakultas
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<?php foreach (menu_fakultas() as $fakultas) { ?>
				<ul class="nav nav-treeview">
					<li class="nav-item <?= $fakultas['singkatan'] ?>">
						<a href="<?= base_url() ?>admin/aps/fakultas/<?= $fakultas['singkatan'] ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>
								<?= $fakultas['nama_fakultas'] ?>
							</p>
						</a>
					</li>
				</ul>
				<?php } ?>
			</li>

			<li class="nav-item has-treeview" id="vokasi">
				<a href="<?= base_url() ?>admin/aps/fakultas/vokasi" class="nav-link">
					<i class="nav-icon fas fa-graduation-cap"></i>
					<p>
						Vokasi
					</p>
				</a>
			</li>

			<li class="nav-item has-treeview" id="pps">
				<a href="<?= base_url() ?>admin/aps/fakultas/pps" class="nav-link">
					<i class="nav-icon fas fa-graduation-cap"></i>
					<p>
						Pascasarjana
					</p>
				</a>
			</li>

			</li>
			<!-- /Menu APS -->

		
			

		

			<li class="nav-header">ADMINISTRATOR</li>
			<li class="nav-item has-treeview" id="pengguna">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-users"></i>
					<p>
						Pengguna
						<i class="fas fa-angle-left right"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item semua_pengguna">
						<a href="<?=base_url('admin/users'); ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Semua Pengguna</p>
						</a>
					</li>
					<li class="nav-item tambah_pengguna">
						<a href="<?=base_url('admin/users/add'); ?>" class="nav-link">
							<i class="far fa-circle nav-icon"></i>
							<p>Tambah Pengguna</p>
						</a>
					</li>

				</ul>
			</li>

			<li class="nav-header">KATEGORI</li>

			<li class="nav-item" id="kategori">
				<a href="<?= base_url() ?>admin/apt/kategori" class="nav-link">
					<i class="nav-icon fas fa-list-alt"></i>
					<p>
						Kategori
					</p>
				</a>
			</li>

		</ul>

	</nav>
	<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
