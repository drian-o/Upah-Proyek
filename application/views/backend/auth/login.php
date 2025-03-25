<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description"
		  content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
	<meta name="keywords"
		  content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
	<meta name="author" content="ThemeSelect">
	<title><?=$title?> - Famma Nusantara-Konstruksi</title>
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets/images/ico/apple-icon-120.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/logo/loggo1.png">
	<link
		href="<?= base_url() ?>assets/css/fonts/css93c2.css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
		rel="stylesheet">

	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/vendors.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendors/css/forms/toggle/switchery.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/plugins/forms/switch.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/core/colors/palette-switch.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/plugins/animate/animate.min.css">
	<!-- END: Vendor CSS-->

	<!-- BEGIN: Theme CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap-extended.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/colors.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/components.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/feather/style.min.css">

	<!-- END: Theme CSS-->

	<!-- BEGIN: Page CSS-->
	<link rel="stylesheet" type="text/css"
		  href="<?= base_url() ?>assets/css/core/menu/menu-types/vertical-menu.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/core/colors/palette-gradient.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/pages/login-register.min.css">
	<!-- END: Page CSS-->

	<!-- BEGIN: Custom CSS-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
	<!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click"
	  data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-wrapper">
		<div class="content-wrapper-before"></div>
		<div class="content-header row">
		</div>
		<div class="content-body">
			<section class="flexbox-container">
				<div class="col-12 d-flex align-items-center justify-content-center">
					<div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">

						<div class="card border-grey border-lighten-3 px-1 py-1 m-0">
							<div class="card-header border-0">
								<div class="text-center mb-1">
									<img src="<?= base_url() ?>assets/images/logo/new2.png" alt="branding logo" height="90px">
								</div>
							</div>
							<br>
							<div class="font-large-1  text-center">
								Login
							</div>
							<div class="card-content">
								<div class="card-body">
									<?php
									if ($this->session->flashdata('alert') == 'login_gagal'):
										?>
										<div class="alert alert-danger alert-dismissible animated fadeInDown round" style="" id="feedback"
											 role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											Username atau password salah
										</div>
									<?php
									elseif ($this->session->flashdata('alert') == 'belum_login'):
										?>
										<div class="alert alert-warning alert-dismissible animated fadeInDown round" style="" id="feedback"
											 role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											Silahkan Login terlebih dahulu
										</div>
									<?php
									endif;
									?>
									<?= form_open('login') ?>
									<fieldset class="form-group position-relative has-icon-left">
										<input type="text" class="form-control round" id="user-name"
											   placeholder="Your Username" name="username" required autocomplete="off">
										<div class="form-control-position">
											<i class="ft-user"></i>
										</div>
									</fieldset>
									<fieldset class="form-group position-relative has-icon-left">
										<input type="password" class="form-control round" id="user-password"
											   placeholder="Enter Password" name="password" required autocomplete="off">
										<div class="form-control-position">
											<i class="ft-lock"></i>
										</div>
									</fieldset>
									<div class="form-group row">
										<div class="col-md-6 col-12 text-center text-sm-left">

										</div>
									</div>
									<div class="form-group text-center">
										<button type="submit"
												class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1"
												name="login">Login
										</button>
									</div>
									<?= form_close() ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div>
	</div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="<?= base_url() ?>assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?= base_url() ?>assets/vendors/js/forms/validation/jqBootstrapValidation.js"
		type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?= base_url() ?>assets/js/core/app-menu.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/js/core/app.min.js" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?= base_url() ?>assets/js/scripts/forms/form-login-register.min.js" type="text/javascript"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
