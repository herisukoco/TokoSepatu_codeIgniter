<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-4" data-toggle="modal" data-target="#tambah_barang"><i class="fas fa-plus fa-sm mr-3"></i>tambah barang</button>
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Stok</th>
			<th colspan="3">Aksi</th>

			<?php
			$no=1;
			foreach ($barang as $brg):
				?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $brg->nama_brg?></td>
			<td><?php echo $brg->keterangan?></td>
			<td><?php echo $brg->harga?></td>
			<td><?php echo $brg->stock?></td>
			<td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
			<td><?php echo anchor('admin/data_barang/edit/'.$brg->id_brg, '
				<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
			<td><?php echo anchor('admin/data_barang/hapus/'.$brg->id_brg, '
				<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
			</tr>

			<?php
			endforeach;
			?>

		</tr>

	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Barang</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url().'admin/data_barang/tambah_aksi'?>" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label for="">Nama Barang</label>
						<input type="text" name="nama_brg" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Keterangan</label>
						<select name="keterangan" id="">
							<?php
							$option =array('sepatu pria','sepatu wanita','sepatu anak');
							foreach ($option as $keterangan){
								$selected =@$_POST['keterangan']== $keterangan ? 'selected="selected"' :'';
								echo '<option value="'.$keterangan.'"'.$selected.'>'.$keterangan.'</option>';
							}
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="">Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Stock</label>
						<input type="text" name="stock" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Gambar Produk</label><br>
						<input type="file" name="gambar" class="form-control">
					</div>


			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
			</form>
		</div>
	</div>
</div>

<!--
 * Created by PhpStorm.
 * User: Heri
 * Date: 04/12/2019
 * Time: 01.38
 -->
