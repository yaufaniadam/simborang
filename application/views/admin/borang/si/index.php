<link rel="stylesheet" href="<?= base_url() ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

<?php 
	$last = $this->uri->total_segments();
	$kategori = $this->uri->segment($last);
?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6">
				<p class="text-uppercase">Sertifikasi Internasional</p>				
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?= base_url() ?>admin/dashboard"><i class="nav-icon fas fa-home"></i></a></li>
					<li class="breadcrumb-item">Sertifikasi Internasional</li>
					<li class="breadcrumb-item active"><?=breadcrumb($kategori)?></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">					
				<h4>Dokumen
				<?=breadcrumb($kategori)?> 
					<a href="<?= base_url('admin/si/tambah/'.$kategori)?>" class="btn btn-sm btn-default">
						Tambah baru
					</a>
				</h4>			
			</div>
			
			<div class="col-sm-2 text-right">
				<select id="pilih_dokumen" class="form-control">
					<option>Pilih Dokumen</option>
					<?php foreach (menu_category() as $row) { ?>
					<option value="<?=base_url('admin/si/dokumen/'.$row['id']); ?>">
						<?= $row['kategori_dokumen'] ?></option>
					<?php } ?>
				</select>
			</div>
			
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- Content Header (Page header) -->

<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-12">

			<div class="card">
				<div class="card-body">
 
					<?php if($this->session->flashdata('msg') != ''): ?>
					<div class="alert alert-success flash-msg alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4>Success!</h4>
						<?= $this->session->flashdata('msg'); ?>
					</div>
					<?php endif; ?>

					<table id="tb_evaluasi" class="table table-bordered table-striped">
						<thead>
						<tr>
								<th width="600"> Nama Dokumen </th>
								<th class="text-center"> Tahun </th>
								<th width="200"> Deskripsi </th>
								<th width="100" class="text-center"> Aksi </th>
							</tr>
						</thead>

						<tbody>
							<?php foreach($ambil_dokumen as $dokumen ) { ?>
							<tr>
								<td> <?=$dokumen['nama_dokumen']?> </td>
								<td> <?=$dokumen['tahun']?> </td>
								<td> <?=$dokumen['deskripsi']?> </td>
								<td class="text-center">
									<a class="btn btn-sm btn-warning"
										href="<?= base_url('admin/si/edit/'.$dokumen['id']) ?>"><i
											class="fas fa-pencil-alt"></i>
									</a>
									<a title="Unduh dokumen" class="btn btn-sm btn-info" href="<?=base_url($dokumen['file'] ); ?>">
										<i class="fas fa-download"></i>
									</a>
									<a title="Hapus dokumen" class="btn btn-sm btn-danger" href="#"
										data-href="<?=base_url('admin/si/destroy/'.$dokumen['id'].'/'.$dokumen['id_kategori_dokumen']); ?>"
										data-toggle="modal" data-target="#confirm-delete">
										<i class="fas fa-trash-alt"></i>
									</a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>

				</div>
			</div>

		</div>
	</div>
</section>
<!-- Main content -->

<!-- Modal delete confirmation -->
<div class="modal fade" id="confirm-delete">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Perhatian</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Tutuo">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Yakin ingin menghapus data ini?&hellip;</p>
			</div>
			<div class="modal-footer justify-content-between">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<a class="btn btn-danger btn-ok">Hapus</a>
			</div>
		</div> <!-- /.modal-content -->
	</div> <!-- /.modal-dialog -->
</div>
<!-- Modal delete confirmation -->

<!-- DataTables -->
<script src="<?= base_url() ?>public/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<!-- Modal delete conformation script -->
<script type="text/javascript">

	$(function () {
		$("#tb_evaluasi").DataTable();
	});

	$("#si").addClass('menu-open');
	$("#si .sub-<?=$kategori?> a.nav-link").addClass('active');
	

</script>
