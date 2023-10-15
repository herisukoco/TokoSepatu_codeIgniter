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
