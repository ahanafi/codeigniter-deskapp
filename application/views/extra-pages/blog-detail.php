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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/src/plugins/jvectormap/jquery-jvectormap-2.0.3.css") ?>">

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
	<div class="container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Blog Detail</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Blog Detail</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="blog-wrap">
					<div class="container pd-0">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="blog-detail mb-30">
									<div class="blog-img">
										<img src="<?php echo base_url("assets/vendors/images/img2.jpg") ?>" alt="">
									</div>
									<div class="blog-caption">
										<h4 class="mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
										<h5 class="mb-10">Lorem ipsum dolor sit amet, consectetur.</h5>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
										<h5 class="mb-10">Unordered List</h5>
										<ul>
											<li>Duis aute irure dolor in reprehenderit in voluptate.</li>
											<li>Sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
											<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
											<li>Duis aute irure dolor in reprehenderit in voluptate.</li>
											<li>Sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
											<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										</ul>
										<h5 class="mb-10">Ordered List</h5>
										<ol>
											<li>Duis aute irure dolor in reprehenderit in voluptate.</li>
											<li>Sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
											<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
											<li>Duis aute irure dolor in reprehenderit in voluptate.</li>
											<li>Sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
											<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
											<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="bg-white border-radius-4 box-shadow mb-30">
									<h5 class="pd-20">Categories</h5>
									<div class="list-group">
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">HTML <span class="badge badge-primary badge-pill">7</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">Css <span class="badge badge-primary badge-pill">10</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between active">Bootstrap <span class="badge badge-primary badge-pill">8</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">jQuery <span class="badge badge-primary badge-pill">15</span></a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">Design <span class="badge badge-primary badge-pill">5</span></a>
									</div>
								</div>
								<div class="bg-white border-radius-4 box-shadow mb-30">
									<h5 class="pd-20">Latest Post</h5>
									<div class="latest-post">
										<ul>
											<li>
												<h4><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a></h4>
												<span>HTML</span>
											</li>
											<li>
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
												<span>Css</span>
											</li>
											<li>
												<h4><a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a></h4>
												<span>jQuery</span>
											</li>
											<li>
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
												<span>Bootstrap</span>
											</li>
											<li>
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit</a></h4>
												<span>Design</span>
											</li>
										</ul>
									</div>
								</div>
								<div class="bg-white border-radius-4 box-shadow">
									<h5 class="pd-20">Archives</h5>
									<div class="list-group">
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">January 2018</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">February 2018</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">March 2018</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">April 2018</a>
										<a href="#" class="list-group-item d-flex align-items-center justify-content-between">May 2018</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>