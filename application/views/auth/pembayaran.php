<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php $gtotal=0;
				if ($keranjang =$this->cart->contents())
				{
				foreach ($keranjang as $item) {
					$gtotal = $gtotal + $item['subtotal'];
				}
				echo "Total belanja Rp. " . number_format($gtotal, 0, ',', '.');

				?>
			</div>
			<br><br>
			<h3>Input Plamat Pengiriman</h3>
			<form action="<?php echo base_url('dashboard/proses_pesanan') ?>" method="post">
				<div class="form-group">
					<label for="">Nama lengkap</label>
					<?php $nama=$this->session->userdata('username')?>
					<input type="text" name="nama" value="<?=$nama?>" placeholder="nama lengkap. . ." class="form-control">
				</div>
				<div class="form-group">
					<label for="">Alamat lengkap</label>
					<input type="text" name="alamat" placeholder="alamat lengkap. . ." class="form-control">
				</div>
				<div class="form-group">
					<label for="">No telephon</label>
					<input type="text" name="no_telp" placeholder="no telephon. . ." class="form-control">
				</div>
				<div class="form-group">
					<label for="">Jasa Pengiriman</label>
					<select name="pengiriman" id="" class="form-control">
						<option value="JNE">JNE</option>
						<option value="JNT">JNT</option>
						<option value="Tiki">Tiki</option>
						<option value="Pos_indonesia">Pos Indonesia</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">metode pembayaran</label>
					<select name="" id="" class="form-control">
						<option value="">BRI</option>
					</select>
				</div>

				<button type="submit" class="btn-sm btn btn-primary mb-3">pesan</button>

			</form>
			<?php
			}
			else
			{
				echo "keranjang belanja anda masih kosong";

			}

			?>
		</div>


		<div class="col-md-2"></div>
	</div>
</div>
<?php
/**
 * Created by PhpStorm.
 * User: Heri
 * Date: 12/12/2019
 * Time: 19.31
 */
