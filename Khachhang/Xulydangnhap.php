<?php
  include_once("Ketnoi.php");
  $sdt = $_POST['sdt'];
  $sql = "select * from KhachHang where SoDienThoai='$sdt'";
  if(mysqli_query($conn,$sql)){
    $row = mysqli_fetch_array(mysqli_query($conn,$sql));
    $mang_ten = explode(' ',$row['HoTenKH']);
    $ten = array_pop($mang_ten);
    session_start();
    $_SESSION['MSKH'] = $row['MSKH'];
    $_SESSION['TenKH'] = $ten;
    header("Location:index.php?action=trangchu");
  }

 ?>
