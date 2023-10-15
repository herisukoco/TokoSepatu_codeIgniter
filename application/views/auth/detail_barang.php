<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			Detail Produk
		</div>
		<div class="card-body">
			<?php  foreach ($barang as $brg):?>
				<div class="row">
					<div class="col-md-4">
						<img src="<?= base_url().'/uploads/'.$brg->gambar?> " class="card-img-top"  alt="">
					</div>
					<div class="col-md-8">
						<table class="table table-bordered">
							<tr>
								<th>Nama Produk</th>
								<td><?php echo "$brg->nama_brg"?></td>
							</tr>
							<tr>
								<th>Kategori</th>
								<td><?php echo "$brg->keterangan"?></td>
							</tr>
							<tr>
								<th>Stock</th>
								<td><?php echo "$brg->stock"?></td>
							</tr>
							<tr>
								<th>Harga</th>
								<td><div class="btn btn-sm btn-outline-primary">Rp. <?php echo number_format("$brg->harga",0,',','.')?></div></td>
							</tr>
						</table>
						<?php echo anchor('dashboard/tambahkan/'.$brg->id_brg,
							'<div class="btn btn-primary btn-sm">Tambahkan</div>')?>
						<?php echo anchor(base_url(),'<div class="btn btn-sm btn-outline-danger " align="right">Kembali</div>')?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 16/12/2019
 * Time: 15.06
 */
