<?php
  include("Ketnoi.php");
  if(isset($_GET['manv'])){
    $manv = $_GET['manv'];
    $sql = "delete from NhanVien where MSNV = '$manv'";
    if(mysqli_query($conn,$sql)){
      echo "Thành công!";
    }else
      echo "Thất bại!";
  }

 ?>
