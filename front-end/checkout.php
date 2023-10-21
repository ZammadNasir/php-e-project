<?php
include('./config.php');
session_start();
if (!isset($_SESSION['useremail'])) {
	header('location: login.php');
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
	<link href="css/checkout.css" rel="stylesheet">
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
					<h1>CHECKOUT</h1>
					<h6 class="d-inline-block  font_14 col_yell bg-white"><a class="col_light" href="index.php">Home</a> <span class="me-2 ms-2">/</span> Checkout</h6>
				</div>
			</div>
		</div>
	</section>

	<section id="checkout">
		<div class="container-xl">
			<div class="checkout_1 row">
				<div class="col-md-8">
					<div class="checkout_1l">
						<h5>Make Your Checkout Here</h5>
						<p>Please register in order to checkout more quickly</p>
					</div>
					<div class="checkout_1l1 row">
						<div class="col-md-6 ps-0">
							<h6 class="font_13 fw-bold"> Name <span>*</span></h6>
							<input class="form-control" type="text" required>
						</div>
						<div class="col-md-6 ps-0">
							<h6 class="font_13 fw-bold"> Addres <span>*</span></h6>
							<input class="form-control" type="text" required>
						</div>
					</div>
					<div class="checkout_1l1 row">
						<div class="col-md-6 ps-0">
							<h6 class="font_13 fw-bold">Email Address <span>*</span></h6>
							<input class="form-control" type="text" required>
						</div>
						<div class="col-md-6 ps-0">
							<h6 class="font_13 fw-bold">Work Phone No. <span>*</span></h6>
							<input class="form-control" type="text" required>
						</div>
					</div>
					<div class="checkout_1l1 row">
						<div class="col-md-6 ps-0">
							<h6 class="font_13 fw-bold">Cell No. <span>*</span></h6>
							<input class="form-control" type="text" required>
						</div>
						<div class="col-md-6 ps-0">
							<h6 class="font_13 fw-bold">Date Of Birth <span>*</span></h6>
							<input class="form-control" type="text" required>
						</div>
					</div>
					<div class="checkout_1l1 row">
						<div class="col-md-6 ps-0">
							<h6 class="font_13 fw-bold"> <span></span></h6>
							<input class="form-control" type="hidden">
						</div>
					</div>
					<div class="checkout_1l1 row">
						<div class="col-md-12 ps-0">
							<h6 class="font_13 fw-bold">Remarks <span>*(optional)</span></h6>
							<textarea name="" class="form-control" cols="30" rows="10"></textarea>
						</div>
					</div>
					<div class="checkout_1l">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" id="customCheck1">
							<label class="form-check-label" for="customCheck1"><a href="#">Create an account?</a></label>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="checkout_1r">
						<h5>CART TOTALS</h5>
						<hr class="line">
						<table class="table">
							<thead>
								<tr>
									<th>Product</th>
									<th>Quantity</th>
								</tr>
							</thead>
							<?php
							$select = "select * from cart";
							$result = mysqli_query($connection, $select);
							if (mysqli_num_rows($result)) {
								while ($fetch_cart = mysqli_fetch_array($result)) {
							?>
									<tr>
										<td><?php echo $fetch_cart['name'] ?></td>
										<td class="text-center"><?php echo $fetch_cart['quantity'] ?></td>
									</tr>
							<?php
								}
							}
							?>
						</table>
						<?php
						$select_cart = "select * from cart";
						$result = mysqli_query($connection, $select_cart);
						$total = 0;
						$shipping = 250;
						if (mysqli_num_rows($result) > 0) {
							while ($fetch_cart = mysqli_fetch_assoc($result)) {
								$total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
								$pattern = "/,/i";
								$total_price =  preg_replace($pattern, "", $total_price);
								$total = $total + $total_price;
							}
						}

						?>
						<h6 class="fw-bold font_13">Sub Total <span class="pull-right">Rs. <?php echo $total ?></span></h6>
						<h6 class="fw-bold mt-3 font_13">(+) Shipping <span class="pull-right">Rs. <?php echo $shipping; ?></span></h6>
						<hr>
						<h6 class="fw-bold font_13">Total <span class="pull-right">Rs. <?php echo $total + $shipping ?></span></h6><br>
						<h6 class="mt-3"><a class="button" href="#">PLACE OREDER</a></h6>
					</div>
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