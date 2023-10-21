<?php
include('./config.php');
if (isset($_POST['signup_btn'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $select = "select email from customers where email = '$email'";
    $res = mysqli_query($connection, $select);
    if (mysqli_num_rows($res) > 0) {
        $message[] = "email already exist";
    } else {
        $insert = "insert into customers (name, address, email, number, password)
        values ('$name', '$address', '$email', $number, '$password')";
        $result = mysqli_query($connection, $insert);
        header('location: login.php');
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



    <section id="checkout" style="background-color: #1d4289;" class="w-50 mx-auto text-white p-5 mt-5">
        <form class="container-xl" method="post">
            <div class="checkout_1 row">
                <?php
                if (isset($message)) {
                    foreach ($message as $msg) {
                        echo "<p class='text-danger fw-bold'> $msg </p>";
                    }
                }
                ?>
                <div class="col-md-12">

                    <div class="checkout_1l1 row">
                        <div class="col-md-6 ps-0">
                            <h6 class="font_13 fw-bold"> Name</h6>
                            <input class="form-control" type="text" required placeholder="name" name="name">
                        </div>
                        <div class="col-md-6 ps-0">
                            <h6 class="font_13 fw-bold"> Address</h6>
                            <input class="form-control" type="text" required placeholder="address" name="address">
                        </div>
                    </div>
                </div>

            </div>
            <div class="checkout_1 row">
                <div class="col-md-12">
                    <div class="checkout_1l1 row">
                        <div class="col-md-6 ps-0 my-3">
                            <h6 class="font_13 fw-bold"> Contact No.</h6>
                            <input class="form-control" type="text" required placeholder="number" name="number">
                        </div>
                        <div class="col-md-6 ps-0 my-3">
                            <h6 class="font_13 fw-bold"> Email</h6>
                            <input class="form-control" type="text" required placeholder="email" name="email">
                        </div>
                        <div class="col-md-6 ps-0 my-3">
                            <h6 class="font_13 fw-bold"> Password</h6>
                            <input class="form-control" type="text" required placeholder="password" name="password">
                        </div>
                        <div class="col-md-12 ps-0 my-3">
                            <input type="submit" name="signup_btn" class="button border-0 p-2 px-3 my-3">
                        </div>
                    </div>
                    <div class="checkout_1l">
                        <div class="">
                            <a href="#" class="text-white">already have an account?</a>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </section>




</body>

</html>