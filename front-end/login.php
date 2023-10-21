<?php
include('./includes/config.php');
session_start();
if (isset($_POST['login_btn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['useremail'] = $email;

    $select = "select * from customers where email = '$email' and password = '$password'";
    $res = mysqli_query($connection, $select);
    if (mysqli_num_rows($res) > 0) {
        header('location: index.php');
    } else {
        $message[] = "Invalid email or password";
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

                <div class="col-md-12">

                    <div class="checkout_1l1 row">
                        <div class="col-md-12 ps-0">
                            <h6 class="font_13 fw-bold"> Email</h6>
                            <input class="form-control" type="text" required placeholder="name" name="email">
                        </div>
                        <div class="col-md-12 ps-0 my-4">
                            <h6 class="font_13 fw-bold"> Password</h6>
                            <input class="form-control" type="text" required placeholder="address" name="password">
                        </div>
                        <?php
                        if (isset($message)) {
                            foreach ($message as $msg) {
                                echo "<p class='text-danger fw-bold'> $msg </p>";
                            }
                        }
                        ?>
                        <div class="col-md-12 ps-0">
                            <input class="button border-0 py-2 px-4 my-4" type="submit" name="login_btn">
                        </div>
                    </div>
                </div>

            </div>
            <div class="checkout_1 row my-3">
                <div class="col-md-12">
                    <div class="checkout_1l">
                        <div class="">
                            <a href="signup.php" class="text-white">dont have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>




</body>

</html>