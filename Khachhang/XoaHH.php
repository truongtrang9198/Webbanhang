<?php
// kiểm tra và bắt đầu 1 session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once("Ketnoi.php");
  if(isset($_GET['mahang']) &&isset($_SESSION['MSKH'])){
    $mahang = $_GET['mahang'];
    $makhach = $_SESSION['MSKH'];
    $sql = "delete from Giohang_temp where MSHH = '$mahang' && MSKH='$makhach'";
    if(mysqli_query($conn, $sql)){
      echo "true";
    }else{
      echo "Lỗi truy vấn!";
      die();
    }
  }else{
    echo "Lỗi hệ thống!";
 }

 ?>
