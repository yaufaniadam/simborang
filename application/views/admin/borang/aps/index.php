<link rel="stylesheet" href="<?= base_url() ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

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
				<p class="text-uppercase"><?=prodi($prodi)?></p>
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
					<li class="breadcrumb-item active">Dokumen <?=breadcrumb($kategori)?></li>
				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<h4>Dokumen
					<?=breadcrumb($kategori)?>
					<a href="<?= base_url('admin/aps/tambah/'.$prodi.'/'.$kategori)?>" class="btn btn-sm btn-default">
						Tambah baru
					</a>
				</h4>
			</div>

			<div class="col-sm-3 text-right">
			
				<select id="pilih_prodi" class="form-control">
					<option>Lihat Prodi Lain</option>
					<?php 
				foreach (prodi_lainnya($fakultas['id']) as $row) { ?>
					<option value="<?=base_url('admin/aps/prodi/'.$row['id'].'/'.$kategori); ?>">
						<?= $row['nama_prodi'] ?></option>
					<?php } ?>
				</select>
			</div>
			<div class="col-sm-3 text-right">
				<select id="pilih_dokumen" class="form-control">
					<option>Lihat Kategori Lain</option>
					<?php foreach (menu_category('aps') as $kategori) { ?>
					<option value="<?=base_url('admin/aps/prodi/'.$prodi.'/'.$kategori['id']); ?>">
						<?= $kategori['kategori_dokumen'] ?></option>
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
								<td class="text-center"> <?=$dokumen['tahun']?> </td>
								<td> <?=$dokumen['deskripsi']?> </td>
								<td class="text-center">
									<a class="btn btn-sm btn-warning"
										href="<?= base_url('admin/aps/edit/'.$dokumen['id'].'/'. $prodi) ?>"><i
											class="fas fa-pencil-alt"></i>
									</a>
									<a class="btn btn-sm btn-info" href="<?=base_url($dokumen['file'] ); ?>">
										<i class="fas fa-download"></i>
									</a>
									<a href="#" class="btn btn-sm btn-danger"
										data-href="<?=base_url('admin/aps/destroy/'.$dokumen['id'].'/'.$dokumen['id_prodi'].'/'.$dokumen['id_kategori_dokumen']); ?>"
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

<!-- page script -->
<script>
	$(function () {
		$("#tb_evaluasi").DataTable();
	});

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
