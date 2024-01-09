<?php 


include 'db.php';


$id=$_GET['id'];
$sql="DELETE FROM `product` WHERE id=$id ";

$result=mysqli_query($con,$sql);

if($result){
    echo "<script>alert('data deleted')</script>";
    echo "<script>location.href='show.php'</script>";
}else{
    echo "error";
}

?>

