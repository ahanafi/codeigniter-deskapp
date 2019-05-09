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
								<h4>Product</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Product</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="product-wrap">
					<div class="product-list">
						<ul class="row">
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img1.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce Black</a></h4>
										<div class="price">
											<del>$55.5</del><ins>$49.5</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img2.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce White</a></h4>
										<div class="price">
											<del>$75.5</del><ins>$50</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img3.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Contrast Lace-Up Sneakers</a></h4>
										<div class="price">
											<ins>$80</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img4.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Apple Watch Series 3</a></h4>
										<div class="price">
											<ins>$380</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>

							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img2.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce White</a></h4>
										<div class="price">
											<del>$75.5</del><ins>$50</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img4.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Apple Watch Series 3</a></h4>
										<div class="price">
											<ins>$380</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img1.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce Black</a></h4>
										<div class="price">
											<del>$55.5</del><ins>$49.5</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img3.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Contrast Lace-Up Sneakers</a></h4>
										<div class="price">
											<ins>$80</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>

							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img1.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce Black</a></h4>
										<div class="price">
											<del>$55.5</del><ins>$49.5</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img2.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Gufram Bounce White</a></h4>
										<div class="price">
											<del>$75.5</del><ins>$50</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img3.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Contrast Lace-Up Sneakers</a></h4>
										<div class="price">
											<ins>$80</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Add To Cart</a>
									</div>
								</div>
							</li>
							<li class="col-lg-4 col-md-6 col-sm-12">
								<div class="product-box">
									<div class="producct-img"><img src="<?php echo base_url("assets/vendors/images/product-img4.jpg") ?>" alt=""></div>
									<div class="product-caption">
										<h4><a href="#">Apple Watch Series 3</a></h4>
										<div class="price">
											<ins>$380</ins>
										</div>
										<a href="#" class="btn btn-outline-primary">Read More</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="blog-pagination mb-30">
						<div class="btn-toolbar justify-content-center mb-15">
							<div class="btn-group">
								<a href="#" class="btn btn-outline-primary prev"><i class="fa fa-angle-double-left"></i></a>
								<a href="#" class="btn btn-outline-primary">1</a>
								<a href="#" class="btn btn-outline-primary">2</a>
								<span class="btn btn-primary current">3</span>
								<a href="#" class="btn btn-outline-primary">4</a>
								<a href="#" class="btn btn-outline-primary">5</a>
								<a href="#" class="btn btn-outline-primary next"><i class="fa fa-angle-double-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>