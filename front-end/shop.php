<?php
include('./includes/config.php');
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
    <link href="css/product.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php include('./includes/topnav.php') ?>
    <?php include('./includes/middle_nav.php') ?>
    <?php include('./includes/primary_nav.php') ?>

    <section id="center" class="center_o pt-4 pb-4 bg-light">
        <div class="container-xl">
            <div class="row center_o1 text-center">
                <div class="col-md-12">
                    <h1>PRODUCT</h1>
                    <h6 class="d-inline-block  font_14 col_yell bg-white"><a class="col_light" href="#">Home</a> <span class="me-2 ms-2">/</span> Product</h6>
                </div>
            </div>
        </div>
    </section>

    <section id="prod_pg" class="pt-4 pb-4 bg_light_1">
        <div class="container-fluid">
            <div class="row prod_pg1">
                <div class="col-md-12 col-lg-3">
                    <div class="prod_pg1l">
                        <div class="prod_pg1l1 bg-white p-4">
                            <h6 class="mb-3">PRODUCT CATEGORIES</h6>
                            <?php
                            $select = "select * from product_categories order by category_name desc";
                            $result = mysqli_query($connection, $select);
                            $category_count = mysqli_num_rows($result);
                            if (mysqli_num_rows($result)) {
                                while ($data = mysqli_fetch_array($result)) {
                                    $category = $data['category_id'];
                            ?>

                                    <div class="prod_pg1l1i row mt-2">
                                        <div class="col-md-10 col-10">
                                            <div class="prod_pg1l1il">
                                                <h6 class="font_14 fw-normal mt-1"><a href="shop.php?category/=<?php echo $data['category_name'] ?>"><i class="fa fa-circle-o me-1 col_yell"></i><?php echo $data['category_name'] ?></a></h6>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-2">
                                            <div class="prod_pg1l1ir text-end">
                                                <h6 class="d-inline-block bg_light font_13">
                                                    <?php
                                                    $select = "select * from products where product_category = $category";
                                                    $res = mysqli_query($connection, $select);
                                                    $count = mysqli_num_rows($res);
                                                    echo $count;
                                                    ?>
                                                </h6>
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

                <div class="col-md-12 col-lg-9">
                    <div class="prod_pg1r">
                        <div class="prod_pg1r1 row">
                            <div class="col-md-9">
                                <div class="prod_pg1r1l">
                                    <p class="mt-3 mb-0">Products found
                                        <?php

                                        if (isset($_GET['category/'])) {
                                            $category_name = $_GET['category/'];
                                            $select = "SELECT * FROM products INNER JOIN product_categories ON product_category = category_id and category_name = '$category_name'";
                                            $result = mysqli_query($connection, $select);
                                            $product_count = mysqli_num_rows($result);
                                            echo $product_count;
                                        }
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="prod_pg1r1r">
                                    <select name="categories" style="height:50px;" class="form-select" required="">
                                        <option value="">Relevance</option>
                                        <option>Best sellers</option>
                                        <option>Name, A to Z</option>
                                        <option>Name, Z to A</option>
                                        <option>Price, high to low</option>
                                        <option>Price, low to high</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="prod_pg1r2 mt-4 row">

                            <?php
                            if (isset($_GET['category/'])) {
                                $category_name = $_GET['category/'];
                                $select = "SELECT * FROM products INNER JOIN product_categories ON product_category = category_id and category_name = '$category_name'";
                                $result = mysqli_query($connection, $select);
                                if (mysqli_num_rows($result) > 0) {
                                    while ($data = mysqli_fetch_array($result)) {
                            ?>
                                        <div class="col-md-4 mt-4">
                                            <div class="prodinm clearfix">
                                                <div class="prod_2im position-relative clearfix">
                                                    <div class="prod_2i1 clearfix">
                                                        <div class="grid clearfix">
                                                            <figure class="effect-jazz mb-0">
                                                                <a href="detail.html"><img src="../admin-panel/uploadimg/<?php echo $data['product_image'] ?>" class="w-100" alt="abc"></a>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <div class="prod_2in clearfix position-absolute bg-light w-100 p-3 text-center">
                                                        <ul class="mb-0">
                                                            <li class="d-inline-block me-3"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                            <li class="d-inline-block"><a href="detail.php?product/=<?php echo $data['product_name'] ?>"><i class="fa fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="prod_2i2 pt-4 pb-4 ps-3 pe-3 bg-white clearfix">
                                                    <h6 class="mt-2"><a href="detail.html"><?php echo $data['product_name'] ?></a></h6>
                                                    <h6 class="font_13"><a class="col_light" href="detail.html">New Product</a></h6>
                                                    <hr>
                                                    <h6 class="fw-normal mb-0"><span class="pull-left fw-bold col_yell">Rs. <?php echo $data['product_price'] ?></span></h6>
                                                </div>
                                            </div>
                                        </div>
                            <?php
                                    }
                                }
                            }
                            ?>




                        </div>

                        <div class="pages mt-4 row text-center bg_light ms-0 me-0 pt-4 pb-4">
                            <div class="col-md-12">
                                <ul class="mb-0">
                                    <li><a href="detail.html"><i class="fa fa-chevron-left"></i></a></li>
                                    <li class="act"><a href="detail.html">1</a></li>
                                    <li><a href="detail.html">2</a></li>
                                    <li><a href="detail.html">3</a></li>
                                    <li><a href="detail.html">4</a></li>
                                    <li><a href="detail.html">5</a></li>
                                    <li><a href="detail.html">6</a></li>
                                    <li><a href="detail.html"><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('./includes/footer.php') ?>

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