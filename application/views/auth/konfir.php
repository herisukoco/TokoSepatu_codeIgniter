<div class="container-fluid">
<div>
	<table class="table table-bordered">
		<tr>
			<th>Id invoice</th>
			<th>Nama Pemesan</th>
			<th>tanggal order</th>
			<th>babtas bayar</th>
			<th>status bayar</th>
			<th>status pesanan</th>
			<th>status pengiriman</th>
			<th>aksi</th>
		</tr>
		<?php foreach ($invoice as $inv):?>
		<tr>
			<td><?= $inv->id?></td>
			<td><?= $inv->nama?></td>
			<td><?= $inv->tgl_pesan?></td>
			<td><?= $inv->batas_bayar?></td>
			<td><?= $inv->status?></td>
			<td><?= $inv->status1?></td>
			<td><?= $inv->status2?></td>
			<td><button class="btn btn-success" data-toggle="modal" data-target="#tambah_barang<?=$inv->id?>">upload</button></td>
		</tr>



</div>
	<div class="modal fade" id="tambah_barang<?=$inv->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Upload bukti transfer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url().'dashboard/tambah_aksi/'.$inv->id?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?=$inv->id?>">
						<div class="form-group">
							<label for="">pilih file bukti transfer</label><br>
							<input type="file" name="gambar" class="form-control">
						</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">batalkan</button>
					<button type="submit" class="btn btn-primary">Konfirmasi</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php endforeach;?>
</table>
<?php
/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 19/12/2019
 * Time: 18.31
 */
