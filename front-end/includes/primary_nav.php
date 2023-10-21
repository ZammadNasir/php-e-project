<section id="header" class="bg_light">
    <nav class="navbar navbar-expand-md navbar-light pt-0 pb-0" id="navbar_sticky">
        <div class="container-fluid">
            <a class="col_dark navbar-brand" href="index.html"><i class="fa fa-shopping-basket col_yell"></i> Eco
                Mart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle act_cat nav_hide bg_yell" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-navicon me-1"></i> ALL CATEGORIES
                        </a>
                        <ul class="dropdown-menu drop_cat" aria-labelledby="navbarDropdown">
                            <?php
                            $select = "select * from product_categories order by category_name desc";
                            $result = mysqli_query($connection, $select);
                            $category_count = mysqli_num_rows($result);
                            if (mysqli_num_rows($result)) {
                                while ($data = mysqli_fetch_array($result)) {
                                    $category = $data['category_id'];
                            ?>
                                    <li><a class="dropdown-item" href="shop.php?category/=<?php echo $data['category_name'] ?>"> <?php echo $data['category_name'] ?> </a></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu drop_2 drop_cat" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="product.html"><i class="fa fa-caret-right me-1 col_yell"></i> Product</a></li>
                            <li><a class="dropdown-item border-0" href="detail.html"><i class="fa fa-caret-right me-1 col_yell"></i> Product Detail</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</section>