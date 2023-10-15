

<body class="bg-gradient-light">

<div class="container">

	<div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
		<div class="card-body p-0">
			<!-- Nested Row within Card Body -->
			<div class="row">
				<div class="col-lg">
					<div class="p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Buat akun anda!</h1>
						</div>
						<form class="user" method="post" action="<?php anchor('auth/registration')?>">
							<div class="form-group">
								<input type="text" class="form-control form-control-user" name="nama" id="nama" placeholder="Masukan nama..">
								<?php echo form_error('nama','<div class="text-danger small ml-2">','</div>')?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Masukan username..">
								<?php echo form_error('username','<div class="text-danger small ml-2">','</div>')?>
							</div>
							<div class="form-group row">
								<div class="col-md-6 mb-3 mb-sm-0">
									<input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukan password">
									<?php echo form_error('password1','<div class="text-danger small -sm ml-2">','</div>')?>
								</div>
								<div class="col-sm-6">
									<input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block">
								Daftarkan akun
							</button>
						</form>
						<hr>
						<div class="text-center">
							<a class="small" href="forgot-password.html">Lupa Password?</a>
						</div>
						<div class="text-center">
							<a class="small" href="<?= base_url('auth')?>">Sudah punya akun? Login!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
