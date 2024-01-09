<?php 

include 'admin/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container">
  <div class="row">
<?php 

$sql="SELECT * FROM `product` WHERE 1";
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result)){

?>


<div class="card bg-body-secondary col-md-3 " >
        <img src="admin/photos/<?php echo $row['img'] ?>" class="card-img-top" alt="..." style="height:300px">
        <div class="card-body">
          <h5 class="card-title"><?php echo $row['pname'] ?></h5>
          <div class="">
            <span"><del><?php echo $row['dprice'] ?></del></span>
            <span><?php echo $row['oprice'] ?></span>
          </div>
        </div>
      </div> 
      


<?php 
}
?>

</div>
</div>



</body>
</html>