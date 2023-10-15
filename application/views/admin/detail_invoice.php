<div class="container-fluid">
	<h3>Detail Pesanan <div class="btn btn-sm btn-success">No Invoice : <?php echo $invoice->id?></div></h3>
	<table class="table-striped table-bordered table table-hover">
		<tr>
			<th>ID barang</th>
			<th>Nama Produk</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>Sub Total</th>
			<th>Jasa Pengiriman</th>
		</tr>
		<?php
		$total=0;
		foreach ($pesanan as $pes):
			$subtotal =$pes->jumlah*$pes->harga;
		$total += $subtotal;
		?>
		<tr>
			<td><?= $pes->id_brg?></td>
			<td><?= $pes->nama_brg?></td>
			<td><?= $pes->jumlah?></td>
			<td>Rp. <?= number_format($pes->harga,0,',','.')?></td>
			<td>Rp. <?= number_format($subtotal,0,',','.')?></td>
			<td><?= $pes->pengiriman?></td>
		</tr>
		<?php endforeach;?>
		<tr>
			<td colspan="5" align="right"><b>TOTAL</b></td>
			<td>Rp. <?= number_format($total,0,',','.')?></td>
		</tr>
	</table>
<h5>Bukti transfer</h5>

	<div class="col-md-4">
		<img class="card-img-bottom mb-4" src="<?= base_url().'uploads/'.$invoice->gambar?>">
	</div>
	<?php echo anchor('admin/invoice','	<div class="btn btn-sm btn-outline-danger">kembali</div>')?>


</div>
<?php
/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 16/12/2019
 * Time: 12.35
 */
