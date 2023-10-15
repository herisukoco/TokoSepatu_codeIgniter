<div class="container-fluid">
	<h4>invoice pemesanan produk</h4>
	<table class="table-hover table-bordered table table-striped mx-auto">
		<tr>
			<th>Id invoice</th>
			<th>Nama Pemesan</th>
			<th>alamat pengiriman</th>
			<th>tanggal pemesanan</th>
			<th>batas pembayaran</th>
			<th>status</th>
			<th colspan="2">aksi</th>
		</tr>

		<?php foreach ($invoice as $inv): ?>
			<form method="post">
		<tr>
			<td><?php echo $inv->id?></td>
			<td><?php echo $inv->nama?></td>
			<td><?php echo $inv->alamat?></td>
			<td><?php echo $inv->tgl_pesan?></td>
			<td><?php echo $inv->batas_bayar?></td>
			<td><?php echo $inv->status1?></td>
			<td><?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">detail</div>')?></td>
			<input type="hidden" value="<?=$inv->id?>" name="id">
			<td><?php echo anchor('admin/invoice/konfirmasi/'.$inv->id,'<div class="btn btn-sm btn-success">konfirmasi</div>')?></td>
		</tr>
			</form>

		<?php endforeach;?>
	</table>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 12/12/2019
 * Time: 23.57
 */
