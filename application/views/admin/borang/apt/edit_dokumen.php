<?php
	$last = $this->uri->total_segments();
	$id_prodi = $this->uri->segment($last);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<p class="text-uppercase">Akreditasi Perguruan Tinggi</p>				
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dashboard"><i class="nav-icon fas fa-home"></i></a></li>
					<li class="breadcrumb-item">Akreditasi Perguruan Tinggi</li>
					<li class="breadcrumb-item active"><?=breadcrumb($dokumen['id_kategori_dokumen'])?></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">					
				<h4>Edit Dokumen <?=get_category_name($dokumen['id_kategori_dokumen'] ); ?>
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
                    
					echo form_open_multipart(base_url('admin/apt/edit/'.$id_prodi.'/'. $dokumen['id_kategori_dokumen'] . '/'.$dokumen['id']), '' )
					?>

					<div class="form-group">
						<div class="mt-3">
							<label class="control-label">Nama dokumen</label>
							<input type="text" value="<?php if(validation_errors()) {echo set_value('nama'); } else { echo $dokumen['nama_dokumen']; }  ?>" name="nama" class="form-control" id="name" placeholder="">
						</div>

						<div class="mt-3">
							<label class="control-label">Deskripsi</label>
							<textarea class="form-control" name="deskripsi" id="deskripsi"><?php if(validation_errors()) {echo set_value('deskripsi'); } else { echo $dokumen['deskripsi']; }  ?></textarea>
						</div>

						<div class="mt-3">
							<label class="control-label">Tahun</label>
							<input type="number" min="2010" max="2030" name="tahun" class="form-control" id="tahun" placeholder="Contoh: 2020" value="<?php if(validation_errors()) {echo set_value('tahun'); } else { echo $dokumen['tahun']; }  ?>">
						</div>

						<div class="mt-3">
							<div class="form-group">
								<label for="foto_profil" class="control-label">Upload kembali File jika ingin diganti (pdf)</label>
								<div>
									<input type="file" name="dokumen" class="form-control" id="dokumen">
									<input type="hidden" name="dokumen_hidden" value="<?=$dokumen['file']; ?>">
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
	$("#apt").addClass('menu-open');
	$("#apt .sub-<?=$dokumen['id_kategori_dokumen']; ?> a.nav-link").addClass('active');
</script> 