<?php 
	$last = $this->uri->total_segments();
	$kategori = $this->uri->segment($last);
	$prodi = $this->uri->segment(count($this->uri->segment_array($last))-1);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<p class="text-uppercase">Akreditasi Program Studi</p>				
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dashboard"><i
								class="nav-icon fas fa-home"></i></a></li>
					<li class="breadcrumb-item"><a class="text-uppercase"
							href="<?=base_url('/admin/aps/fakultas/'. $fakultas['singkatan']); ?>"><?= $fakultas['singkatan'] ?></a>
					</li>
					<li class="breadcrumb-item"><a
							href="<?=base_url('/admin/aps/fakultas/'. $fakultas['singkatan'].'/'. $prodi); ?>"><?=prodi($prodi)?></a>
					</li>
					<li class="breadcrumb-item active">Tambah <?=breadcrumb($kategori)?></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">					
				<h4>Tambah <?=get_category_name($kategori); ?>
				</h4>			
			</div>			
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">
	<div class="row">

		<div class="col-12">
			<?php if(isset($msg) || validation_errors() !== ''): ?>
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="fa fa-exclamation"></i> Terjadi Kesalahan</h4>
				<?= validation_errors();?>
				<?= isset($msg)? $msg: ''; ?>
			</div>
			<?php endif; ?>
		</div>

		<div class="col-md-6">
			<div class="card card-success card-outline">
				<div class="card-body box-profile">

					<?php 
					$prodi = $this->uri->segment(4);	 
					$kategori = $this->uri->segment(5);	 
					echo form_open_multipart(base_url('admin/aps/store/'.$prodi.'/'.$kategori), '' )
					?>

					<div class="form-group">
						<div class="mt-3">
							<label class="control-label">Nama dokumen</label>
							<input type="text" name="nama" class="form-control" id="name" placeholder="">
						</div>

						<div class="mt-3">
							<label class="control-label">Deskripsi</label>
							<textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
						</div>

						<div class="mt-3">
							<label class="control-label">Tahun</label>
							<input type="number" name="tahun" class="form-control" id="tahun" placeholder="">
						</div>

						<div class="mt-3">
							<div class="form-group">
								<label for="foto_profil" class="control-label">File</label>
								<div>
									<input type="file" name="dokumen" class="form-control" id="dokumen">
								</div>
							</div>
						</div>

						<div class="form-group mt-2">
							<input type="submit" name="submit" value="Submit" class="btn btn-info">
						</div>
					</div>

					<?php echo form_close( ); ?>

				</div>
			</div>
		</div>

	</div>
</section>

<!-- page script -->
<script>	
	var fak_singkatan = "<?=$fakultas['singkatan']; ?>";

	if (fak_singkatan == 'vokasi') {
		$("#vokasi").addClass('menu-open');
	} else if (fak_singkatan == 'pps') {
		$("#pps").addClass('menu-open');
	} else {
		$("#fakultas").addClass('menu-open');
		$("#fakultas .<?=$fakultas['singkatan'];?> a.nav-link").addClass('active');
	}
</script> 
