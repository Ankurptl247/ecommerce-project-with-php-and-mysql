<?php

include 'admin/db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="bg-d ">

    <main>
        <div class="1">
            <!-- first header nav -->
            <nav class="container-fluid bg-blue d-md-block d-none">
                <div class="row p-2">
                    <div class="col-md-9">
                        <span class="mx-5 navbar-text text-white">24/7 Customer service <b>1-800-234-5678</b></span>
                    </div>
                    <div class="col-md-3 text-white">
                        <span class="navbar-text">Shipping & return</span>
                        <span class="navbar-text ms-md-4">Track order</span>
                    </div>
                </div>
            </nav>
            <!-- ens first header nav  -->

            <!-- second header -->
            <nav class="navbar navbar-light d-md-block d-none bg-blue1 border-bottom border-dark-subtle border-0">
                <div class="container p-2">
                    <a class="navbar-brand"><img src="webimg/electronic-store-logo.svg " alt=""></a>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success text-white bg-dark" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <!-- end second header -->
            <!-- main navbar start -->
            <nav class="navbar navbar-expand-lg navbar-light bg-blue1">
                <div class="container-fluid mx-md-5 mx-3">
                    <a class="navbar-brand d-md-none d-block" href="#"><img src="webimg/electronic-store-logo.svg "
                            alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav nav me-auto mb-2 gap-4 mb-lg-0 fw-bold">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">Home appliances</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">audio & vedio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Refrigerator</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">New arrivals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Today's deal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Gift cards</a>
                            </li>
                        </ul>
                        <span class="navbar-text">
                            <a class="ms-md-4 text-white fs-5" href="">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                            </a>
                            <span><a class="fs-6 text-decoration-none text-white ms-md-3 sf fw-bold" href="">Log
                                    in</a></span>
                        </span>
                    </div>
                </div>

            </nav>
            <!-- main navbar end -->
        </div>

        <div class="bg1">
            <div class="container p-4">
                <div class="row">
                    <div class="h120"></div>
                    <div class="col-md-8"></div>
                    <div class="col-md-4 bg-white p-3">
                        <article class="p-3">
                            <img class="mb-3" src="webimg/electronic-store-brand-logo-00.png" alt="">
                            <h1 class="mb-3 fs-1 pf fw-bold lh-2">The best home entertainment system is here</h1>
                            <p class="mb-3 fs-6 text-secondary">Sit diam odio eget rhoncus volutpat est nibh velit
                                posuere egestas.</p>
                            <a class="fw-bold fs-6 text-decoration-none" href="">Shop now</a>
                        </article>
                    </div>
                </div>
                <div class="h50"></div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-md-5 mt-5 p-1">
                <div class="col-md-3 ms-md-5 ms-2 col-6 row bg-white p-md-3 p-3">
                    <div class="col-md-2">
                        <i class="fa fa-truck fs-3 text-dark-emphasis" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10">
                        <h4 class="fs-6">Free Shipping</h4>
                        <p class="info">When you spend $80 or more</p>
                    </div>
                </div>

                <div class="col-md-3 col-6 row bg-white p-3">
                    <div class="col-md-2">
                        <i class="fa fa-commenting fs-3 text-dark-emphasis" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10">
                        <h4 class="fs-6">Free Shipping</h4>
                        <p class="info">When you spend $80 or more</p>
                    </div>
                </div>

                <div class="col-md-3 col-6 ms-2 row bg-white p-3">
                    <div class="col-md-2">
                        <i class="fa fa-repeat fs-3 text-dark-emphasis" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10">
                        <h4 class="fs-6">Free Shipping</h4>
                        <p class="info">When you spend $80 or more</p>
                    </div>
                </div>

                <div class="col-md-3 col-6 row bg-white p-3">
                    <div class="col-md-2">
                        <i class="fa fa-credit-card-alt fs-3 text-dark-emphasis" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-10">
                        <h4 class="fs-6">Free Shipping</h4>
                        <p class="info">When you spend $80 or more</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row mt-md-5">
                <div class="col-md-6">
                    <img class="img-fluid" src="webimg/electronic-store-promotional-banner-2.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="webimg/electronic-store-promotional-banner-1.jpg" alt="">
                </div>
            </div>
            <div class="h70"></div>
        </div>

        <!--  today's best deal container  start-->
        <div class="container">
            <div class="border">
                <header>
                    <h1 class="fs-3 fw-bold p-3">Today’s best deal</h1>
                </header>

                <div class="row">
                    <?php

                    $sql = "SELECT * FROM product ORDER BY RAND() LIMIT 3,8;";

                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) {

                    ?>

                    <div class="col-md-3 col-6 p-3">
                        <div class="col-md-12 col-12 p-1">
                            <img class="col-md-12 col-12 img-fluid" src="admin/photos/<?php echo $row['img'] ?>"
                                style="height:260px" alt="">

                            <article class="text-dark mt-3">
                                <span class="text-warning">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                                <p class="mb-2"><b>
                                        <?php echo $row['pname'] ?>
                                    </b></p>
                                <span><del class="text-secondary fw-medium">$
                                        <?php echo $row['dprice'] ?>
                                    </del></span>
                                <span class="fw-medium">$
                                    <?php echo $row['oprice'] ?>
                                </span>
                            </article>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="h50"></div>
        <!--  today's best deal container -->

        <div class="container">
            <div class="col-md-12">
                <img class="img-fluid" src="webimg/electronic-store-promotional-banner-fwidth-1.jpg" alt="">
            </div>
            <div class="h50"></div>
        </div>

        <!--home alliance start  -->
        <div class="container">
            <div class="border">
                <header>
                    <h1 class="fs-3 fw-bold p-3">Home appliances
                    </h1>
                </header>
                <div class="row">

                    <?php

                    $sql = "SELECT * FROM `product` WHERE `categories`='h'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                        ?>

                    <div class="col-md-3 col-6 p-3">
                        <div class="col-md-12 col-12 p-1">
                            <img class="col-md-12 col-12 img-fluid" src="admin/photos/<?php echo $row['img'] ?>"
                                style="height:260px" alt="">

                            <article class="text-dark mt-3">
                                <span class="text-warning">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                                <p class="mb-2"><b>
                                        <?php echo $row['pname'] ?>
                                    </b></p>
                                <span><del class="text-secondary fw-medium">$
                                        <?php echo $row['dprice'] ?>
                                    </del></span>
                                <span class="fw-medium">$
                                    <?php echo $row['oprice'] ?>
                                </span>
                            </article>

                        </div>


                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="h50"></div>
        <!-- home alliance end -->

        <!-- tablet container -->
        <div class="container"> cl-6
            <div class="border">
                <header>
                    <h1 class="fs-3 fw-bold p-3">Tablet</h1>
                </header>
                <div class="row">

                    <?php

                    $sql = "SELECT * FROM `product` WHERE `categories`='t'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                        ?>

                    <div class="col-md-3 col-6 p-3">
                        <div class="col-md-12 col-12 p-1">
                            <img class="col-md-12 col-12 img-fluid" src="admin/photos/<?php echo $row['img'] ?>"
                                style="height:260px" alt="">

                            <article class="text-dark mt-3">
                                <span class="text-warning">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                                <p class="mb-2"><b>
                                        <?php echo $row['pname'] ?>
                                    </b></p>
                                <span><del class="text-secondary fw-medium">$
                                        <?php echo $row['dprice'] ?>
                                    </del></span>
                                <span class="fw-medium">$
                                    <?php echo $row['oprice'] ?>
                                </span>
                            </article>
                        </div>
                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="h50"></div>
        <!-- tablet container end -->

        <div class="container">
            <div class="col-md-12">
                <img class="img-fluid" src="webimg/electronic-store-promotional-banner-fwidth-2.jpg" alt="">
            </div>
            <div class="h50"></div>
        </div>

        <!-- Smart tv container start -->
        <div class="container">
            <div class="border">
                <header>
                    <h1 class="fs-3 fw-bold p-3">Smart TV</h1>
                </header>
                <div class="row">

                    <?php

                    $sql = "SELECT * FROM `product` WHERE `categories`='s'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                        ?>

                    <div class="col-md-3 col-6 p-3">
                        <div class="col-md-12 col-12 p-1">
                            <img class="col-md-12 col-12 img-fluid" src="admin/photos/<?php echo $row['img'] ?>"
                                style="height:260px" alt="">

                            <article class="text-dark mt-3">
                                <span class="text-warning">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                                <p class="mb-2"><b>
                                        <?php echo $row['pname'] ?>
                                    </b></p>
                                <span><del class="text-secondary fw-medium">$
                                        <?php echo $row['dprice'] ?>
                                    </del></span>
                                <span class="fw-medium">$
                                    <?php echo $row['oprice'] ?>
                                </span>
                            </article>

                        </div>


                    </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="h50"></div>
        <!-- Smart tv container end -->

        <!-- Laptop start container -->
        <div class="container">
            <div class="border">
                <header>
                    <h1 class="fs-3 fw-bold p-3">Best Laptop's</h1>
                </header>
                <div class="row">

                    <?php

                    $sql = "SELECT * FROM `product` WHERE `categories`='l'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                    ?>

                    <div class="col-md-3 col-6 p-3">
                        <div class="col-md-12 col-12 p-1">
                            <img class="col-md-12 col-12 img-fluid" src="admin/photos/<?php echo $row['img'] ?>"
                                style="height:260px" alt="">

                            <article class="text-dark mt-3">
                                <span class="text-warning">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                                <p class="mb-2"><b>
                                        <?php echo $row['pname'] ?>
                                    </b></p>
                                <span><del class="text-secondary fw-medium">$
                                        <?php echo $row['dprice'] ?>
                                    </del></span>
                                <span class="fw-medium">$
                                    <?php echo $row['oprice'] ?>
                                </span>
                            </article>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="h50"></div>
        <!-- laptop end container -->

        <div class="container">
            <div class="row p-3">
                <div class="col-md-6 bg-body-tertiary p-5">
                    <article class="">
                        <h6 class="text-secondary fw-bold sf mb-3">BRAND'S DEAL</h6>
                        <h1 class="text-dark fw-bold fs-2 pf mb-3 lh-2">Save up to $200 on select Samsung washing
                            machine</h1>
                        <p class="fs-6 text-body-secondary mb-3">Tortor purus et quis aenean tempus tellus fames.</p>
                        <p class="text-primary fw-bold">Shop Now</p>
                    </article>
                </div>
                <div class="col-md-6 p-0">
                    <img class="img-fluid" src="webimg/electronic-store-promotional-banner-hwidth-1.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="h90"></div>

        <div class="container">
            <h4 class="fw-bold fs-3 mb-4 p-0">Top brands</h4>
            <div class="row">
                <div class="col-md-2 border">
                    <center>
                        <img class="img-fluid align-content-center my-4"
                            src="webimg/electronic-store-top-brand-logo-6.svg" alt="">
                    </center>
                </div>
                <div class="col-md-2 border">
                    <center>
                        <img class="img-fluid align-content-center my-4"
                            src="webimg/electronic-store-top-brand-logo-5.svg" alt="">
                    </center>
                </div>
                <div class="col-md-2 border">
                    <center>
                        <img class="img-fluid align-content-center my-4"
                            src="webimg/electronic-store-top-brand-logo-4.svg" alt="">
                    </center>
                </div>
                <div class="col-md-2 border">
                    <center>
                        <img class="img-fluid align-content-center my-4"
                            src="webimg/electronic-store-top-brand-logo-3.svg" alt="">
                    </center>
                </div>
                <div class="col-md-2 border">
                    <center>
                        <img class="img-fluid align-content-center my-4"
                            src="webimg/electronic-store-top-brand-logo-2.svg" alt="">
                    </center>
                </div>
                <div class="col-md-2 border">
                    <center>
                        <img class="img-fluid align-content-center my-4"
                            src="webimg/electronic-store-top-brand-logo-1.svg" alt="">
                    </center>
                </div>

            </div>
        </div>
        <div class="h100"></div>


        <div class="container">
            <div class="row g-4">
                <h4 class="fw-bold fs-3 mb-4 p-0">What is everyone saying?</h4>

                <div class="col-md-4 col-">
                    <div class="col-md-12  bg-primary-subtle p-4">
                        <article>
                            <div class="rating mb-2 text-warning">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <p class="text-info-emphasis fw-medium">Dolores porro laboriosam molestias est quo. Et et
                                eos. Ab error modi labore
                                sed eaque est. Quaerat aut est fugiat.</p>
                            <img class="img-fluid rounded-5" src="webimg/electronic-store-reviewer-avatar-image-1.jpg"
                                alt="">
                            <span class="fw-bold text-info-emphasis">&nbsp;Rafael Stokes</span>

                        </article>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-md-12 bg-primary-subtle p-4">
                        <article>
                            <div class="rating mb-2 text-warning">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <p class="text-info-emphasis fw-medium">Dolores porro laboriosam molestias est quo. Et et
                                eos. Ab error modi labore
                                sed eaque est. Quaerat aut est fugiat.</p>
                            <img class="img-fluid rounded-5" src="webimg/electronic-store-reviewer-avatar-image-1.jpg"
                                alt="">
                            <span class="fw-bold text-info-emphasis">&nbsp;Rafael Stokes</span>

                        </article>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-md-12 bg-primary-subtle p-4">
                        <article>
                            <div class="rating mb-2 text-warning">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <p class="text-info-emphasis fw-medium">Dolores porro laboriosam molestias est quo. Et et
                                eos. Ab error modi labore
                                sed eaque est. Quaerat aut est fugiat.</p>
                            <img class="img-fluid rounded-5" src="webimg/electronic-store-reviewer-avatar-image-1.jpg"
                                alt="">
                            <span class="fw-bold text-info-emphasis">&nbsp;Rafael Stokes</span>

                        </article>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-md-12 bg-primary-subtle p-4">
                        <article>
                            <div class="rating mb-2 text-warning">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <p class="text-info-emphasis fw-medium">Dolores porro laboriosam molestias est quo. Et et
                                eos. Ab error modi labore
                                sed eaque est. Quaerat aut est fugiat.</p>
                            <img class="img-fluid rounded-5" src="webimg/electronic-store-reviewer-avatar-image-1.jpg"
                                alt="">
                            <span class="fw-bold text-info-emphasis">&nbsp;Rafael Stokes</span>

                        </article>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="col-md-12 bg-primary-subtle p-4">
                        <article>
                            <div class="rating mb-2 text-warning">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <p class="text-info-emphasis fw-medium">Dolores porro laboriosam molestias est quo. Et et
                                eos. Ab error modi labore
                                sed eaque est. Quaerat aut est fugiat.</p>
                            <img class="img-fluid rounded-5" src="webimg/electronic-store-reviewer-avatar-image-1.jpg"
                                alt="">
                            <span class="fw-bold text-info-emphasis">&nbsp;Rafael Stokes</span>

                        </article>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="col-md-12 bg-primary-subtle p-4">
                        <article>
                            <div class="rating mb-2 text-warning">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                            <p class="text-info-emphasis fw-medium">Dolores porro laboriosam molestias est quo. Et et
                                eos. Ab error modi labore
                                sed eaque est. Quaerat aut est fugiat.</p>
                            <img class="img-fluid rounded-5" src="webimg/electronic-store-reviewer-avatar-image-1.jpg"
                                alt="">
                            <span class="fw-bold text-info-emphasis">&nbsp;Rafael Stokes</span>

                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="h70"></div>

        <?php
        include 'footer.php';
        
        ?>

    </main>


</body>
</html>