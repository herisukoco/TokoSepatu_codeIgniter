<!--<div class="container-fluid container">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-50" src="assets/img/images.jpeg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-50" src="assets/img/images.jpeg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-50" src="assets/img/images.jpeg" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>-->
<div class="container-fluid">
	<div class="row text-center ">
		<?php foreach ($barang as $brg) : ?>
			<div class="card mr-auto ml-auto mb-3 panel-body" style="width: 16rem; overflow: hidden; padding: 10px">
				<img class="card-img-bottom " src="<?= base_url().'uploads/'.$brg->gambar?>" alt="">
				<div class="card-body">
					<h5 class="card-title"><?= $brg->nama_brg?></h5>
					<p class="-medium"><?= $brg->keterangan?></p>
					<button class="btn-outline-secondary btn mb-2">Rp. <?= number_format($brg->harga, 0,',','.')?></button>
					<br>
					<?php echo anchor('dashboard/tambahkan/'.$brg->id_brg,
						'<div class="btn btn-primary btn-sm">Tambahkan</div>')?>
					<?php echo anchor('dashboard/detail/'.$brg->id_brg,
						'<div class="btn btn-success btn-sm">Detail</div>')?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<?php
/**
* Created by PhpStorm.
* User: Heri
* Date: 12/01/2019
* Time: 22.07
*/
