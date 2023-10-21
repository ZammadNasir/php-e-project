<?php
include('./config.php');

//deleting the product from cart in this code below
if (isset($_GET['delete'])) {
	$delete_id = $_GET['delete'];

	$deleteproduct = "delete from cart where product_id = $delete_id";
	$result = mysqli_query($connection, $deleteproduct);
	header('location: cart.php');
}
//updating the quantity of cart products in this code below
if (isset($_POST['update'])) {
	$update_id = $_POST['update_id'];
	$quantity = $_POST['quantity'];

	$update_quantity = "update cart set quantity = $quantity where product_id = $update_id";
	$result = mysqli_query($connection, $update_quantity);
	if ($result) {
		header('location: cart.php');
	}
}
?>
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
	<link href="css/cart.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>

</head>

<body>

	<?php include('./topnav.php') ?>

	<?php include('./middle_nav.php') ?>

	<?php include('./primary_nav.php') ?>

	<section id="center" class="center_o pt-4 pb-4 bg-light">
		<div class="container-xl">
			<div class="row center_o1 text-center">
				<div class="col-md-12">
					<h1>SHOPPING CART</h1>
					<h6 class="d-inline-block  font_14 col_yell bg-white"><a class="col_light" href="index.php">Home</a> <span class="me-2 ms-2">/</span> Shopping Cart</h6>
				</div>
			</div>
		</div>
	</section>

	<section id="cart_page" class="cart pt-4 pb-4">
		<div class="container-xl">
			<div class="cart_2 row">
				<div class="col-md-6">
					<h5>MY CART</h5>
				</div>
				<div class="col-md-6">
					<h5 class="text-end text-uppercase"><a href="index.php">Continue Shopping</a></h5>
				</div>
			</div>
			<div class="cart_3 row mt-3">
				<div class="col-md-8">
					<div class="cart_3l">
						<h6>PRODUCT</h6>
					</div>
					<?php
					$cart_items = "select * from cart";
					$result = mysqli_query($connection, $cart_items);
					if (mysqli_num_rows($result) > 0) {
						while ($data = mysqli_fetch_array($result)) {
					?>
							<div class="cart_3l1 mt-3 row ms-0 me-0">
								<div class="col-md-3 ps-0 col-3">
									<input type="hidden" value="<?php echo $data['product_id'] ?>">
									<div class="cart_3l1i">
										<a href="#"><img src="../admin-panel/uploadimg/<?php echo $data['image'] ?>" alt="abc" class="w-100"></a>
									</div>
								</div>
								<div class="col-md-9 col-9">
									<div class="cart_3l1i1">
										<h6 class="fw-bold"><?php echo $data['name'] ?></h6>
										<h5 class="col_yell mt-3">Rs. <?php echo $data['price'] ?></h5>
										<h6 class="font_12 mt-3 mb-3">Quantity</h6>
									</div>
									<form class="cart_3l1i2" method="post">
										<input type="hidden" value="<?php echo $data['product_id'] ?>" name="update_id">
										<input type="number" name="quantity" min="1" value="<?php echo $data['quantity'] ?>" class="form-control" placeholder="Qty">
										<h6><a class="button_1 border-0" href="cart.php?delete=<?php echo $data['product_id'] ?>" onclick="return confirm('remove item from cart?')">REMOVE</a></h6>
										<input class="button border-0" type="submit" name="update" value="update cart">
									</form>
								</div>
							</div>

					<?php
						}
					} else {
						echo "<h5 class='mt-5 ms-2 text-uppercase'>No items in cart</h5>";
					}
					?>



				</div>
				<div class="col-md-4">
					<div class="cart_3r">
						<h6 class="head_1">SUBTOTAL</h6>
						<?php
						$select_cart = "select * from cart";
						$result = mysqli_query($connection, $select_cart);
						$total = 0;
						if (mysqli_num_rows($result) > 0) {
							while ($fetch_cart = mysqli_fetch_assoc($result)) {
								$total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
								$pattern = "/,/i";
								$total_price =  preg_replace($pattern, "", $total_price);
								$total = $total + $total_price;
							}
						}

						?>
						<h5 class="text-center col_yell mt-3">
							<?php echo 'Rs. ' . $total ?>
						</h5>
						<hr>
						<h6 class="font_13">Additional comments</h6>
						<textarea class="form-control"></textarea>
						<h6 class="text-center mt-3"><a class="button" href="checkout.php">PROCEED TO CHECKOUT</a></h6><br>
					</div>
				</div>
			</div>
	</section>

	<section id="subs" class="pt-5 pb-5 bg_blue">
		<div class="container-xl">
			<div class="row subs_1">
				<div class="col-md-6">
					<div class="subs_1l">
						<span class="d-inline-block col_yell font_50 float-start me-3"><i class="fa fa-envelope-o"></i></span>
						<h4 class="text-white">Newsletter & Get Updates</h4>
						<p class="mb-0 text-light">Sign up for our newsletter to get up-to-date from us</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="subs_1r">
						<div class="input-group p-2">
							<input type="text" class="form-control border-0 bg-transparent" placeholder="Enter Your Email">
							<span class="input-group-btn">
								<button class="btn btn-primary bg_yell border-0 fs-6" type="button">
									SUBSCRIBE </button>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="footer" class="pt-4 pb-4 bg_light">
		<div class="container-xl">
			<div class="row footer_1">
				<div class="col-md-4">
					<div class="footer_1i">
						<h3><a class="col_dark" href="index.html"><i class="fa fa-shopping-basket col_yell"></i> Eco Mart</a></h3>
						<p class="mt-3">Namkand sodales vel online best prices Amazon Check out ethnic wear, formal wear western wear Blood Pressure Rate Monito.</p>
						<ul class="social-network social-circle mb-0 mt-3">
							<li><a href="#" class="icoRss" title="Rss"><i class="fa fa-skype"></i></a></li>
							<li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer_1i">
						<h5 class="fs-6 mb-4">CUSTOMER SERVICE</h5>
						<div class="row">
							<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Help Center</a></h6>
							<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Returns</a></h6>
							<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Product Recalls</a></h6>
							<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Accessibility</a></h6>
							<h6 class="font_14 fw-normal mb-0 col-md-12 col-6"><a href="#">Contact Us</a></h6>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="footer_1i">
						<h5 class="fs-6 mb-4">QUICK LINKS</h5>
						<div class="row">
							<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Return Policy</a></h6>
							<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Terms Of Use</a></h6>
							<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Security</a></h6>
							<h6 class="font_14 fw-normal mb-3 col-md-12 col-6"><a href="#">Privacy</a></h6>
							<h6 class="font_14 fw-normal mb-0 col-md-12 col-6"><a href="#">Store Pickup</a></h6>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer_1i">
						<h5 class="fs-6 mb-4">CONTACT US</h5>
						<div class="footer_1i1 row">
							<div class="col-lg-1 col-md-2 col-1">
								<span class="col_yell fs-5"><i class="fa fa-map-marker"></i></span>
							</div>
							<div class="col-md-10 col-lg-11 col-11">
								<p class="mb-0">Z793 STower Suat, Suite 26 Knockland, DB 8513 United Kingdom</p>
							</div>
						</div>
						<div class="footer_1i1 row mt-3">
							<div class="col-lg-1 col-md-2 col-1">
								<span class="col_yell fs-5"><i class="fa fa-headphones"></i></span>
							</div>
							<div class="col-md-10 col-lg-11 col-11">
								<p class="mb-0">+(000) 345 67 89</p>
							</div>
						</div>
						<div class="footer_1i1 row mt-3">
							<div class="col-lg-1 col-md-2 col-1">
								<span class="col_yell fs-5"><i class="fa fa-envelope"></i></span>
							</div>
							<div class="col-md-10 col-lg-11 col-11">
								<p class="mb-0">info@gmail.com</p>
							</div>
						</div>
						<div class="footer_1i1 row mt-3">
							<div class="col-lg-1 col-md-2 col-1">
								<span class="col_yell fs-5"><i class="fa fa-phone"></i></span>
							</div>
							<div class="col-md-10 col-lg-11 col-11">
								<p class="mb-0">+(000) 345 67 89</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="footer_b" class="bg_blue">
		<div class="container-xl">
			<div class="row footer_b1 text-center">
				<div class="col-md-12">
					<p class="mb-0 text-light">© 2013 Your Website Name. All Rights Reserved | Design by <a class="col_yell fw-bold" href="http://www.templateonweb.com">TemplateOnWeb</a></p>
				</div>
			</div>
		</div>
	</section>

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