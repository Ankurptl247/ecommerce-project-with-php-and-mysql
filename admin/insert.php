
<?php 

include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <title>Add your Product</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
 <?php

include 'design/sidenav.php';
?>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<?php 
include 'design/header.php';
?>
<!--End topbar header-->
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  
     
      <div class="col-lg-8">
         <div class="card">
           <div class="card-body">
           <div class="card-title">ADD YOUR PRODUCT</div>
           <hr>
            <form method="post" enctype="multipart/form-data">
           <div class="form-group">
            <label for="input-1">Product image</label>
            <input required name="img" type="file" class="form-control" id="input-1">
           </div>
           <div class="form-group">
            <label for="input-2">product name</label>
            <input required name="pname" type="text" class="form-control" id="input-2" placeholder="Enter Your Product name">
           </div>
           <div class="form-group">
            <label for="input-3">delete price</label>
            <input required name="dprice" type="number" class="form-control" id="input-3" placeholder="Enter Your delete price">
           </div>
           <div class="form-group">
            <label for="input-4">orignel price</label>
            <input required name="oprice" type="number" class="form-control" id="input-4" placeholder="orignel price">
           </div>
           <div class="form-group">
            <label for="input-5">categories</label>
            <select name="categories">
              <option value="m" class="bg-light">Mobile</option>
              <option value="s" class="bg-light">Smart Tv</option>
              <option value="l" class="bg-light">Laptop</option>
              <option value="t" class="bg-light">Tablet</option>
              <option value="h" class="bg-light">Home items</option>
            </select>
           </div>
           <div class="form-group py-2">
             <div class="icheck-material-white">
            <input type="checkbox" id="user-checkbox1" checked=""/>
            <label for="user-checkbox1">I Agree Terms & Conditions</label>
            </div>
           </div>
           <div class="form-group">
            <button name="register" type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Add Product</button>
          </div>
          </form>
         </div>
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	
	<!--End footer-->
	
	<!--start color switcher-->
   <?php 
   include 'design/colorswitcher.php';
   ?>
  <!--end color switcher-->
   
  </div><!--End wrapper-->

<?php 

if(isset($_POST['register'])){
    $img=$_FILES['img']['name'];
    $pname=$_POST['pname'];
    $dprice=$_POST['dprice'];
    $oprice=$_POST['oprice'];
    $categories=$_POST['categories'];


$sql="INSERT INTO `product`(`img`, `pname`, `dprice`, `oprice`, `categories`) VALUES ('$img','$pname','$dprice','$oprice','$categories')";

$result=mysqli_query($con,$sql);

if($result){
    echo "<script>alert('succesfully added')</script>";
    echo "<script>location.href='insert.php'</script>";
}else{
    echo "failed";
}

$target="photos/";
$fname=$target.basename($img=$_FILES['img']['name']);
$move=move_uploaded_file($_FILES['img']['tmp_name'],$fname);
    
}

?>



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