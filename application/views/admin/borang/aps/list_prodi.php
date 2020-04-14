<link rel="stylesheet" href="<?= base_url() ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

<?php 
	$last = $this->uri->total_segments();
	$prodi = $this->uri->segment($last); 

	if ($prodi == 'vokasi') {
		$id_menu = 'vokasi';
	} elseif ($prodi == 'pps') {
		$id_menu = 'pps';	
	} else {
		$id_menu = 'fakultas';
	}

	$id_prodi = $prodi;
	
?>

<!-- Content Header (Page header) -->
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
					<li class="breadcrumb-item"><a class="text-uppercase disabled"><?= $singkatan_fakultas ?></a></li>

				</ol>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<h4><?=$nama_fakultas; ?>
				</h4>
			</div>

		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">

	<div class="row">
		<div class="col-12 ">

			<div id="accordion" class="pl-5 pr-5">

				<?php foreach ($ambil_prodi as $prodi) { ?>
					
				<div class="card">
					<div class="card-header" id="heading-<?= $prodi['singkatan_prodi'] ?>">
						<h3 class="mb-0">
							<button class="btn" data-toggle="collapse"
								data-target="#prodi-<?= $prodi['singkatan_prodi'] ?>" aria-expanded="true"
								aria-controls="prodi-<?= $prodi['singkatan_prodi'] ?>"> <i class="fa fa-plus-circle"></i>
								 <?= $prodi['nama_prodi'];?>
							</button>
						</h3>
					</div>

					<div id="prodi-<?= $prodi['singkatan_prodi'] ?>" class="collapse<?=($id_prodi == $prodi['id']) ? ' show': ''; ?>"
						aria-labelledby="heading-<?= $prodi['singkatan_prodi'] ?>" data-parent="#accordion">
						<div class="card-body p-4">
							<p class="text-bold">Pilih Jenis Dokumen:</p> 
							<?php foreach (menu_category() as $kategori) { ?>
							<a class="btn btn-default btn-block text-left" href="<?= base_url() ?>admin/aps/prodi/<?php echo $prodi['id']?>/<?php echo $kategori['id']?>">
							<i class="far fa-circle "></i>
							<?= $kategori['kategori_dokumen'] ?></a>
							<?php } ?>
						</div>
					</div>
				</div>
				<?php } ?>

			</div>
		
		</div>
	</div>
</section>
<!-- Main content -->


<!-- page script -->
<script>
$(document).ready(function(){
	// Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus-circle").removeClass("fa-plus-circle");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus-circle").addClass("fa-minus-circle");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus-circle").addClass("fa-plus-circle");
    });
});

	$("#<?=$id_menu; ?>").addClass('menu-open');
	$("#<?=$id_menu; ?> .<?=$singkatan_fakultas?> a.nav-link").addClass('active');

</script>
