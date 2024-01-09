<?php

session_start();
session_destroy();


echo "<script>alert('logout success')</script>";
echo "<script>location.href='login.php'</script>";

?>