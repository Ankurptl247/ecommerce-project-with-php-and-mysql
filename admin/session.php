<?php 

session_start();
if(!isset( $_SESSION['log'])  ||  $_SESSION['log']!=true){
    echo "<script>alert('first login must required')</script>";
    echo "<script>location.href='login.php'</script>";
}


?>