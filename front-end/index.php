<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eco Mart</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/global.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>


</head>

<body>
	<?php
	include('config.php');
	?>
	<?php include('./topnav.php') ?>

	<?php include('./middle_nav.php') ?>

	<?php include('./primary_nav.php') ?>

	<section id="center" class="center_home">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="" aria-current="true"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://images.unsplash.com/photo-1583209814683-c023dd293cc6?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="..." height="600">
					<div class="carousel-caption d-md-block">
						<h1 class="text-white fw-normal font_50 text-uppercase">Top Deal Today ! <br> <span class="fw-bold">Cosmetics</span></h1>
						<p class="fs-6 mt-4">Get up to <span class="col_yell fw-bold">50%</span> off Today Only</p>
						<h6 class="text-uppercase mt-4 mb-0"><a class="button" href="makeup.php">SHOP NOW</a></h6>
					</div>
				</div>
				<div class="carousel-item">
					<img src="https://images.unsplash.com/photo-1592317295760-5c1f677dfc78?auto=format&fit=crop&q=80&w=1615&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="..." height="600">
					<div class="carousel-caption d-md-block">
						<h1 class="text-white fw-normal font_50 text-uppercase">Top Deal Today ! <br> <span class="fw-bold">Jewelry</span></h1>
						<p class="fs-6 mt-4">Get up to <span class="col_yell fw-bold">50%</span> off Today Only</p>
						<h6 class="text-uppercase mt-4 mb-0"><a class="button" href="rings.php">SHOP NOW</a></h6>
					</div>
				</div>
				<div class="carousel-item">
					<img src="https://images.unsplash.com/photo-1588444968576-f8fe92ce56fd?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="..." height="600">
					<div class="carousel-caption d-md-block">
						<h1 class="text-white fw-normal font_50 text-uppercase">Best! <br> <span class="fw-bold">Necklace</span></h1>
						<p class="fs-6 mt-4">Get up to <span class="col_yell fw-bold">50%</span> off Today Only</p>
						<h6 class="text-uppercase mt-4 mb-0"><a class="button" href="necklace.php">SHOP NOW</a></h6>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</section>

	<section id="prod" class="pt-4 pb-4">
		<div class="container-xl">
			<div class="row prod_1 mb-4 text-center">
				<div class="col-md-12">
					<h4 class="h_line mb-0">Super Deals</h4>
				</div>
			</div>
			<div class="row prod_2 text-center">
				<?php
				$select = "select * from products limit 4";
				$result = mysqli_query($connection, $select);
				if (mysqli_num_rows($result) > 0) {
					while ($data = mysqli_fetch_array($result)) {
				?>
						<div class="col-md-3">
							<div class="prod_2im position-relative clearfix">
								<div class="prod_2i1 clearfix">
									<div class="grid clearfix">
										<figure class="effect-jazz mb-0">
											<a href="detail.html"><img src="../admin-panel/uploadimg/<?php echo $data['product_image'] ?>" class="w-100" alt="abc"></a>
										</figure>
									</div>
								</div>
								<div class="prod_2i2 pb-2 clearfix">
									<h6 class="mt-3"><a href="detail.php?product/=<?php echo $data['product_name'] ?>"><?php echo $data['product_name'] ?></a></h6>
									<h6 class="fw-normal mt-2">Rs. <?php echo $data['product_price'] ?></h6>
								</div>
								<div class="prod_2i3 clearfix position-absolute">
									<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW</h6>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>

			</div>

			<div class="row prod_2 text-center mt-4">
				<?php
				$select = "select * from products where product_category = 10 limit 4";
				$result = mysqli_query($connection, $select);
				if (mysqli_num_rows($result) > 0) {
					while ($data = mysqli_fetch_array($result)) {
				?>
						<div class="col-md-3">
							<div class="prod_2im position-relative clearfix">
								<div class="prod_2i1 clearfix">
									<div class="grid clearfix">
										<figure class="effect-jazz mb-0">
											<a href="detail.html"><img src="../admin-panel/uploadimg/<?php echo $data['product_image'] ?>" class="w-100" alt="abc"></a>
										</figure>
									</div>
								</div>
								<div class="prod_2i2 pb-2 clearfix">
									<h6 class="mt-3"><a href="detail.php?product/=<?php echo $data['product_name'] ?>"><?php echo $data['product_name'] ?></a></h6>
									<h6 class="fw-normal mt-2">Rs. <?php echo $data['product_price'] ?></h6>
								</div>
								<div class="prod_2i3 clearfix position-absolute">
									<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW</h6>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>

			</div>
		</div>
	</section>

	<section id="deal" class="pt-4 bg-light">
		<div class="container-fluid">
			<div class="row deal_1">
				<div class="col-md-8 col-lg-4">
					<div class="deal_1l position-relative clearfix">
						<div class="clearfix deal_1li">
							<div class="grid clearfix">
								<figure class="effect-jazz mb-0">
									<a href="detail.html"><img src="https://plus.unsplash.com/premium_photo-1674748385760-d846825598ab?auto=format&fit=crop&q=80&w=1374&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" height="584" class="w-100" alt="abc"></a>
								</figure>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12  col-lg-8">
					<div class="deal_1r">
						<div class="deal_1r1 row">
							<div class="col-md-6">
								<div class="deal_1r1l">
									<h4 class="mb-0">DEAL OF THE DAY</h4>
								</div>
							</div>
							<div class="col-md-6">
								<div class="deal_1r1r text-end">
									<h6 class="mb-0"><a class="col_yell" href="detail.html"><i class="fa fa-caret-right"></i> View All</a></h6>
								</div>
							</div>
						</div>
						<div class="row prod_2 text-center">
							<?php
							$select = "select * from products where product_category = 8 limit 4";
							$result = mysqli_query($connection, $select);
							if (mysqli_num_rows($result) > 0) {
								while ($data = mysqli_fetch_array($result)) {
							?>
									<div class="col-md-3">
										<div class="prod_2im position-relative clearfix">
											<div class="prod_2i1 clearfix">
												<div class="grid clearfix">
													<figure class="effect-jazz mb-0">
														<a href="detail.html"><img src="../admin-panel/uploadimg/<?php echo $data['product_image'] ?>" class="w-100" alt="abc"></a>
													</figure>
												</div>
											</div>
											<div class="prod_2i2 pb-2 clearfix">
												<h6 class="mt-3"><a href="detail.php?product/=<?php echo $data['product_name'] ?>"><?php echo $data['product_name'] ?></a></h6>
												<h6 class="fw-normal mt-2">Rs. <?php echo $data['product_price'] ?></h6>
											</div>
											<div class="prod_2i3 clearfix position-absolute">
												<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">50%</h6>
											</div>
										</div>
									</div>
							<?php
								}
							}
							?>

						</div>
						<div class="row prod_2 text-center mt-4">
							<?php
							$select = "select * from products where product_category = 9 limit 4";
							$result = mysqli_query($connection, $select);
							if (mysqli_num_rows($result) > 0) {
								while ($data = mysqli_fetch_array($result)) {
							?>
									<div class="col-md-3">
										<div class="prod_2im position-relative clearfix">
											<div class="prod_2i1 clearfix">
												<div class="grid clearfix">
													<figure class="effect-jazz mb-0">
														<a href="detail.html"><img src="../admin-panel/uploadimg/<?php echo $data['product_image'] ?>" class="w-100" alt="abc"></a>
													</figure>
												</div>
											</div>
											<div class="prod_2i2 pb-2 clearfix">
												<h6 class="mt-3"><a href="detail.php?product/=<?php echo $data['product_name'] ?>"><?php echo $data['product_name'] ?></a></h6>
												<h6 class="fw-normal mt-2">Rs. <?php echo $data['product_price'] ?></h6>
											</div>
											<div class="prod_2i3 clearfix position-absolute">
												<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">50%</h6>
											</div>
										</div>
									</div>
							<?php
								}
							}
							?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="prod_o" class="pt-4 pb-4">
		<div class="container-xl">
			<div class="row prod_1 mb-4 text-center">
				<div class="col-md-12">
					<h6 class="h_line font_13">EXCLUSIVE COLLECTION</h6>
					<h2 class="mb-0 col_yell mt-3">BEST SELLING PRODUCTS</h2>
				</div>
			</div>

			<div class="prod_o2 row mt-4">
				<div class="tab-content">
					<div class="tab-pane active" id="home">
						<div class="prod_o2i row">

							<?php
							$select = "select * from products where product_category = 7 limit 4";
							$result = mysqli_query($connection, $select);
							if (mysqli_num_rows($result) > 0) {
								while ($data = mysqli_fetch_array($result)) {
							?>
									<div class="col-md-3">
										<div class="prod_2im position-relative clearfix">
											<div class="prod_2i1 clearfix">
												<div class="grid clearfix">
													<figure class="effect-jazz mb-0">
														<a href="detail.html"><img src="../admin-panel/uploadimg/<?php echo $data['product_image'] ?>" class="w-100" alt="abc"></a>
													</figure>
												</div>
											</div>
											<div class="prod_2i2 pb-2 clearfix">
												<h6 class="mt-3"><a href="detail.php?product/=<?php echo $data['product_name'] ?>"><?php echo $data['product_name'] ?></a></h6>
												<h6 class="fw-normal mt-2">Rs. <?php echo $data['product_price'] ?></h6>
											</div>
											<div class="prod_2i3 clearfix position-absolute">
												<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">40%</h6>
											</div>
										</div>
									</div>
							<?php
								}
							}
							?>
						</div>
						<div class="prod_o2i row mt-4">

							<?php
							$select = "select * from products where product_category = 6 limit 4";
							$result = mysqli_query($connection, $select);
							if (mysqli_num_rows($result) > 0) {
								while ($data = mysqli_fetch_array($result)) {
							?>
									<div class="col-md-3">
										<div class="prod_2im position-relative clearfix">
											<div class="prod_2i1 clearfix">
												<div class="grid clearfix">
													<figure class="effect-jazz mb-0">
														<a href="detail.html"><img src="../admin-panel/uploadimg/<?php echo $data['product_image'] ?>" class="w-100" alt="abc"></a>
													</figure>
												</div>
											</div>
											<div class="prod_2i2 pb-2 clearfix">
												<h6 class="mt-3"><a href="detail.php?product/=<?php echo $data['product_name'] ?>"><?php echo $data['product_name'] ?></a></h6>
												<h6 class="fw-normal mt-2">Rs. <?php echo $data['product_price'] ?></h6>
											</div>
											<div class="prod_2i3 clearfix position-absolute">
												<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">40%</h6>
											</div>
										</div>
									</div>
							<?php
								}
							}
							?>
						</div>


					</div>
					<div class="tab-pane" id="profile">
						<div class="prod_o2i row">
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/19.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Sed Cursus Ante</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">New Product</a></h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/20.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Nulla Quis Sem</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">Trending Product</a>
										</h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/21.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Lorem Ipsum Dolor</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">Popular Product</a>
										</h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/22.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Integer Nec Odio</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">Demanded Product</a>
										</h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="settings">
						<div class="prod_o2i row">
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/6.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Sed Cursus Ante</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">New Product</a></h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/7.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Nulla Quis Sem</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">Trending Product</a>
										</h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/8.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Lorem Ipsum Dolor</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">Popular Product</a>
										</h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/9.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Integer Nec Odio</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">Demanded Product</a>
										</h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="product">
						<div class="prod_o2i row">
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/10.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Sed Cursus Ante</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">New Product</a></h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/11.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Nulla Quis Sem</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">Trending Product</a>
										</h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/12.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Lorem Ipsum Dolor</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">Popular Product</a>
										</h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="prod_2im position-relative clearfix">
									<div class="prod_2i1 clearfix">
										<div class="grid clearfix">
											<figure class="effect-jazz mb-0">
												<a href="detail.html"><img src="img/13.jpg" class="w-100" alt="abc"></a>
											</figure>
										</div>
									</div>
									<div class="prod_2i2 pt-4 pb-4 ps-3 pe-3  clearfix">
										<h6><a href="detail.html">Integer Nec Odio</a></h6>
										<h6 class="font_13"><a class="col_light" href="detail.html">Demanded Product</a>
										</h6>
										<hr>
										<h6 class="fw-normal mb-0"><span class="text-decoration-line-through col_light">$79.00</span> <span class="pull-right fw-bold col_yell">$68.00</span></h6>
									</div>
									<div class="prod_2i3 clearfix position-absolute w-100">
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3">NEW
										</h6>
										<h6 class="bg_yell d-inline-block pt-1 pb-1 font_13 text-white ps-3 pe-3 pull-right">
											40%</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="arrive row mt-4 me-0 ms-0 position-relative">
				<div class="arrive_m text-center col-md-12">
					<div class="position-absolute" style="inset: 0;">
						<img src="https://images.unsplash.com/photo-1583209814683-c023dd293cc6?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" width="100%" height="100%">
					</div>
					<h6 class="text-uppercase bg_blue ps-3 pe-3 pt-2 pb-2 d-inline-block text-white font_13">New Arrival
					</h6>
					<h1 class="text-uppercase mt-3 text-white"><span class="fw-normal">Top deal</span> <br> New
						Acceories</h1>
					<p class="mt-3 text-light">Get up to <span class="col_yell fw-bold">50%</span> off Today Only</p>
					<h6 class="text-uppercase mt-4 mb-0"><a class="button" href="detail.html">SHOP NOW</a></h6>
				</div>
			</div>
		</div>
	</section>


	<?php include('./footer.php') ?>

	<script>
		window.onscroll = function() {
			myFunction()
		};

		var navbar_sticky = document.getElementById("navbar_sticky");
		var sticky = navbar_sticky.offsetTop;
		var navbar_height = document.querySelector('.navbar').offsetHeight;

		function myFunction() {
			if (window.pageYOffset >= sticky + navbar_height) {
				navbar_sticky.classList.add("sticky")
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
				navbar_sticky.classList.remove("sticky");
				document.body.style.paddingTop = '0'
			}
		}
	</script>

</body>

</html>