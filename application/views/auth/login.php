<body class="bg-gradient-light">
<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-lg-5">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Login Page</h1>
								</div>
								<?php echo $this->session->flashdata('pesan')?>
								<form class="user" method="post" action="<?= base_url('auth')?>">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" name="username" id="username" name="username " placeholder="masukan username anda ">
										<?php echo form_error('username','<div class="text-danger small ml-2">','</div>')?>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" name="password" id="password" name="password" placeholder="Password">
										<?php echo form_error('password','<div class="text-danger small ml-2">','</div>')?>
									</div>
									<button type="submit" class="btn btn-primary btn-block form-control">
										Login
									</button>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="forgot-password.html">Forgot Password?</a>
								</div>
								<div class="text-center">
									<a class="small" href="<?= base_url('auth/registration')?>">Belum punya akun? Daftar!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>
<!--
 * Created by PhpStorm.
 * User: Heri
 * Date: 30/11/2019
 * Time: 02.08
 */
-->


