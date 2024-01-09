<?php

include 'db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <title>Show you products</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

  <!-- start loader -->
  <div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
      <div class="loader-wrapper-inner">
        <div class="loader"></div>
      </div>
    </div>
  </div>
  <!-- end loader -->

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <?php
    include 'design/sidenav.php';
    include 'design/header.php';

    ?>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->

    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                    type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home items</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-laptop-tab" data-bs-toggle="pill" data-bs-target="#pills-laptop"
                    type="button" role="tab" aria-controls="pills-laptop" aria-selected="false">Laptop</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-tablet-tab" data-bs-toggle="pill" data-bs-target="#pills-tablet"
                    type="button" role="tab" aria-controls="pills-tablet" aria-selected="false">Tablet</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-mobile"
                    type="button" role="tab" aria-controls="pills-mobile" aria-selected="false">Mobile</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-smarttv-tab" data-bs-toggle="pill" data-bs-target="#pills-smarttv"
                    type="button" role="tab" aria-controls="pills-smarttv" aria-selected="false">Smart TV</button>
                </li>
              </ul>
              
              <div class="tab-content" id="pills-tabContent">


<!-- home items -->
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <h5 class="card-title">Hover Table</h5>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Id</th>
                          <th scope="col">Img</th>
                          <th scope="col">Product name</th>
                          <th scope="col">Delete Price</th>
                          <th scope="col">Orignel price</th>
                          <th scope="col">categories</th>
                          <th scope="col">Delete</th>
                          <th scope="col">update</th>
                          <th scope="col">update Image</th>
                        </tr>
                      </thead>

                      <?php

                      $sql = "SELECT * FROM `product` WHERE `categories`='h'";
                      $result = mysqli_query($con, $sql);

                      while ($row = mysqli_fetch_array($result)) {

                        ?>

                        <tr>
                          <td>
                            <?php echo $row['id'] ?>
                          </td>
                          <td><img src="photos/<?php echo $row['img']; ?>" alt="" height="100px" width="100px"></td>
                          <td>
                            <?php echo $row['pname']; ?>
                          </td>
                          <td>
                            <?php echo $row['dprice'] ?>
                          </td>
                          <td>
                            <?php echo $row['oprice'] ?>
                          </td>
                          <td>
                            <?php echo $row['categories'] ?>
                          </td>
                          <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                          <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">update</a></td>
                          <td><a href="upimg.php?id=<?php echo $row['id']; ?>" class="btn btn-info">update image</a></td>
                        </tr>

                        <?php
                      }
                      ?>

                    </table>
                  </div>
              </div>
<!-- home items end -->

<!-- laptop div start -->
              <div class="tab-pane fade" id="pills-laptop" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h5 class="card-title">Hover Table</h5>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Img</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Delete Price</th>
                        <th scope="col">Orignel price</th>
                        <th scope="col">categories</th>
                        <th scope="col">Delete</th>
                        <th scope="col">update</th>
                        <th scope="col">update Image</th>
                      </tr>
                    </thead>

                    <?php

                    $sql = "SELECT * FROM `product` WHERE `categories`='l'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                      ?>

                      <tr>
                        <td>
                          <?php echo $row['id'] ?>
                        </td>
                        <td><img src="photos/<?php echo $row['img']; ?>" alt="" height="100px" width="100px"></td>
                        <td>
                          <?php echo $row['pname']; ?>
                        </td>
                        <td>
                          <?php echo $row['dprice'] ?>
                        </td>
                        <td>
                          <?php echo $row['oprice'] ?>
                        </td>
                        <td>
                          <?php echo $row['categories'] ?>
                        </td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">update</a></td>
                        <td><a href="upimg.php?id=<?php echo $row['id']; ?>" class="btn btn-info">update image</a></td>
                      </tr>

                      <?php
                    }
                    ?>

                  </table>

                </div>
              </div>
              
<!-- laptop div end -->

<!-- tablet div start -->
              <div class="tab-pane fade" id="pills-tablet" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h5 class="card-title">Hover Table</h5>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Img</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Delete Price</th>
                        <th scope="col">Orignel price</th>
                        <th scope="col">categories</th>
                        <th scope="col">Delete</th>
                        <th scope="col">update</th>
                        <th scope="col">update Image</th>
                      </tr>
                    </thead>

                    <?php

                    $sql = "SELECT * FROM `product` WHERE `categories`='t'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                      ?>

                      <tr>
                        <td>
                          <?php echo $row['id'] ?>
                        </td>
                        <td><img src="photos/<?php echo $row['img']; ?>" alt="" height="100px" width="100px"></td>
                        <td>
                          <?php echo $row['pname']; ?>
                        </td>
                        <td>
                          <?php echo $row['dprice'] ?>
                        </td>
                        <td>
                          <?php echo $row['oprice'] ?>
                        </td>
                        <td>
                          <?php echo $row['categories'] ?>
                        </td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">update</a></td>
                        <td><a href="upimg.php?id=<?php echo $row['id']; ?>" class="btn btn-info">update image</a></td>
                      </tr>

                      <?php
                    }
                    ?>

                  </table>

                </div>
              </div>
<!-- tablet div end -->


<!-- mobile div start -->
              <div class="tab-pane fade" id="pills-mobile" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h5 class="card-title">Hover Table</h5>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Img</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Delete Price</th>
                        <th scope="col">Orignel price</th>
                        <th scope="col">categories</th>
                        <th scope="col">Delete</th>
                        <th scope="col">update</th>
                        <th scope="col">update Image</th>
                      </tr>
                    </thead>
                    <?php

                    $sql = "SELECT * FROM `product` WHERE `categories`='m'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                      ?>

                      <tr>
                        <td>
                          <?php echo $row['id'] ?>
                        </td>
                        <td><img src="photos/<?php echo $row['img']; ?>" alt="" height="100px" width="100px"></td>
                        <td>
                          <?php echo $row['pname']; ?>
                        </td>
                        <td>
                          <?php echo $row['dprice'] ?>
                        </td>
                        <td>
                          <?php echo $row['oprice'] ?>
                        </td>
                        <td>
                          <?php echo $row['categories'] ?>
                        </td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">update</a></td>
                        <td><a href="upimg.php?id=<?php echo $row['id']; ?>" class="btn btn-info">update image</a></td>
                      </tr>

                      <?php
                    }
                    ?>

                  </table>


                </div>
              </div>
<!-- mobile div end -->


<!-- smart tv  -->
              <div class="tab-pane fade" id="pills-smarttv" role="tabpanel" aria-labelledby="pills-contact-tab">
                <h5 class="card-title">Hover Table</h5>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Img</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Delete Price</th>
                        <th scope="col">Orignel price</th>
                        <th scope="col">categories</th>
                        <th scope="col">Delete</th>
                        <th scope="col">update</th>
                        <th scope="col">update Image</th>
                      </tr>
                    </thead>

                    <?php

                    $sql = "SELECT * FROM `product` WHERE `categories`='s'";
                    $result = mysqli_query($con, $sql);

                    while ($row = mysqli_fetch_array($result)) {

                      ?>

                      <tr>
                        <td>
                          <?php echo $row['id'] ?>
                        </td>
                        <td><img src="photos/<?php echo $row['img']; ?>" alt="" height="100px" width="100px"></td>
                        <td>
                          <?php echo $row['pname']; ?>
                        </td>
                        <td>
                          <?php echo $row['dprice'] ?>
                        </td>
                        <td>
                          <?php echo $row['oprice'] ?>
                        </td>
                        <td>
                          <?php echo $row['categories'] ?>
                        </td>
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">update</a></td>
                        <td><a href="upimg.php?id=<?php echo $row['id']; ?>" class="btn btn-info">update image</a></td>
                      </tr>

                      <?php
                    }
                    ?>

                  </table>
                </div>
              </div>
<!-- smart tv end -->


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="assets/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="assets/js/sidebar-menu.js"></script>

<!-- Custom scripts -->
<script src="assets/js/app-script.js"></script>

</body>

</html>