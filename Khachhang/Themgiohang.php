<?php
session_start();
include_once("Ketnoi.php");
if(isset($_SESSION['MSKH']) && isset($_GET['mahang'])){
  $makhach = $_SESSION['MSKH'];
  $mahang = $_GET['mahang'];
  $sql = "call Themgiohang('$makhach','$mahang')";
  if(mysqli_query($conn, $sql))
    echo "Một sản phẩm được thêm vào giỏ hàng!";
}else{
    echo "Vui lòng đăng nhập để mua hàng!";
    // viet session cho giỏ hàng
}


 ?>
