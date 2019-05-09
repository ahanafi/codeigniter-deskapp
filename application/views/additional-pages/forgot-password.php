<!DOCTYPE html>
<html>
<head>
<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp Dashboard</title>

	<!-- Site favicon -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url("assets/vendors/styles/style.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/src/plugins/datatables/media/css/jquery.dataTables.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/src/plugins/datatables/media/css/dataTables.bootstrap4.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/src/plugins/datatables/media/css/responsive.dataTables.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/src/plugins/ion-rangeslider/css/ion.rangeSlider.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/src/plugins/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/src/plugins/plyr/dist/plyr.css") ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="<?php echo base_url("assets/vendors/images/login-img.png") ?>" alt="login" class="login-img">
			<h2 class="text-center mb-30">Forgot Password</h2>
			<form>
				<p>Enter your email address to reset your password</p>
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" placeholder="Email">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
							-->
							<a class="btn btn-primary btn-lg btn-block" href="<?php echo base_url("/") ?>">Submit</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="forgot-password"><a href="<?php echo base_url("additional-pages/login") ?>" class="btn btn-outline-primary btn-lg btn-block">Sign In</a></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>