<div class="container-fluid container">
	<h3><i class="fas fa-edit"></i>edit data barang</h3>

	<?php foreach ($barang as $brg) : ?>

		<form action="<?php echo base_url().'admin/data_barang/update'?>" method="post">
			<div class="form-group">
				<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
			</div>
			<div class="form-group">
				<label for="">Nama Barang</label>
				<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
			</div>
			<div class="form-group">
				<label for="">Keterangan</label>
				<select name="keterangan" id="">
					<option value="sepatu pria" name="keterangan" <?php
					if ($brg->keterangan=='sepatu pria'){
						echo "selected";
					}
						?>>sepatu pria</option>
					<option value="sepatu wanita" name="keterangan"
						<?php
						if ($brg->keterangan=='sepatu wanita'){
							echo "selected";
						}
						?>>sepatu wanita</option>
					<option value="sepatu anak" name="keterangan"
						<?php
						if ($brg->keterangan=='sepatu anak'){
							echo "selected";
						}
						?>
					>sepatu anak</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
			</div>
			<div class="form-group">
				<label for="">stock</label>
				<input type="text" name="stock" class="form-control" value="<?php echo $brg->stock ?>">
			</div>
			<div>
				<button type="submit" class="btn btn-primary btn-success btn-sm mt-3">simpan</button>
			</div>
		</form>


	<?php endforeach; ?>

</div>
<!--
 * Created by PhpStorm.
 * User: Heri
 * Date: 05/12/2019
 * Time: 00.48
 -->
