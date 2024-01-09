<?php
include 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 

$id=$_GET['id'];
$sql="SELECT * FROM `product` WHERE id=$id";
$result=mysqli_query($con,$sql);

$row=mysqli_fetch_array($result);

?>

<form method="post" enctype="multipart/form-data" action="">

<img src="photos/<?php echo $row['img']; ?>" height="200px" width="200px" alt="">

<input type="file" name="img">
<button type="submit" class="btn btn-success" name="submit">Update image</button>
</form>

<?php

if(isset($_POST['submit'])){
    $img=$_FILES['img']['name'];

    $sql="UPDATE `product` SET `img`='$img' WHERE id=$id";

    $result=mysqli_query($con,$sql);

    if($result){
        echo "<script>alert('update succesfully')</script>";
        echo "<script>location.href='show.php'</script>";
    }else{
        echo "error";
    }

    $target="photos/";
    $fname=$target.basename($_FILES['img']['name']);
    $move=move_uploaded_file($_FILES['img']['tmp_name'],$fname);

}

?>


    
</body>
</html>